@extends('layouts.app', ['title' => __('Categories Management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $categories, 'columnsValues' => ['id', 'name'], 'baseRoute' => 'restaurant.category'])
        @slot('title'){{ __('Categories') }}@endslot

        @slot('createRoute')
            <a href="{{ route('restaurant.category.create') }}"
               class="btn btn-sm btn-primary">{{ __('Add category') }}</a>
        @endslot
    @endcomponent
@endsection
