@extends('layouts.app', ['title' => __('blog::lang.post_categories_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $postCategories])
        @slot('title'){{ __('blog::lang.post_categories') }}@endslot

        @slot('columns')
            <td>{{ __('blog::lang.id') }}</td>
            <td>{{ __('blog::lang.name') }}</td>
            <td>{{ __('blog::lang.visible') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($postCategories as $postCategory)
                <tr>
                    <td>{{ $postCategory->id }}</td>
                    <td>{{ $postCategory->name }}</td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $postCategory->visible->id === App\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($postCategory->visible->translation) }}
                        </span>
                    </td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{ route('blog.post_category.destroy', $postCategory)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('blog.post_category.edit', $postCategory) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('blog.post_category.create') }}"
               class="btn btn-sm btn-primary">{{ __('blog::lang.add_post_category') }}</a>
        @endslot
    @endcomponent
@endsection
