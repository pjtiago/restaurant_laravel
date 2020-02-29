@extends('layouts.app', ['title' => __('restaurant::lang.categories_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $categories])
        @slot('title'){{ __('restaurant::lang.categories') }}@endslot

        @slot('columns')
            <td>{{ __('restaurant::lang.id') }}</td>
            <td>{{ __('restaurant::lang.name') }}</td>
            <td>{{ __('restaurant::lang.visible') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $category->visible->id === Modules\Restaurant\Http\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($category->visible->translation) }}
                        </span>
                    </td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{ route('restaurant.category.destroy', $category)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('restaurant.category.edit', $category) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('restaurant.category.create') }}"
               class="btn btn-sm btn-primary">{{ __('restaurant::lang.add_category') }}</a>
        @endslot
    @endcomponent
@endsection
