@extends('layouts.app', ['title' => __('restaurant::lang.categories_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $categories, 'columnsValues' => ['id', 'name'], 'baseRoute' => 'restaurant.category'])
        @slot('title'){{ __('estaurant::lang.categories') }}@endslot

        @slot('createRoute')
            <a href="{{ route('restaurant.category.create') }}"
               class="btn btn-sm btn-primary">{{ __('estaurant::lang.add_category') }}</a>
        @endslot
    @endcomponent
@endsection
