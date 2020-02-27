@extends('layouts.app', ['title' => __('restaurant::lang.categories_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $categories])
        @slot('title'){{ __('restaurant::lang.categories') }}@endslot

        @slot('columns')
            <td>{{ __('id') }}</td>
            <td>{{ __('name') }}</td>
            <td>{{ __('visible') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->visible }}</td>
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
               class="btn btn-sm btn-primary">{{ __('estaurant::lang.add_category') }}</a>
        @endslot
    @endcomponent
@endsection
