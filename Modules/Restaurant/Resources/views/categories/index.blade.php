@extends('layouts.app', ['title' => __('Categories Management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.table')
        @slot('title'){{ __('Categories') }}@endslot

        @slot('createRoute')
            <a href="{{ route('restaurant.category.create') }}"
               class="btn btn-sm btn-primary">{{ __('Add category') }}</a>
        @endslot

        @slot('columns')
            <th scope="col">{{ __('Id') }}</th>
            <th scope="col">{{ __('Name') }}</th>
            <th scope="col"></th>
        @endslot

        @slot('tableBody')
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>

                    @component('components.table-actions')
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

        @slot('tablePagination'){{ $categories->links() }}@endslot
    @endcomponent
@endsection
