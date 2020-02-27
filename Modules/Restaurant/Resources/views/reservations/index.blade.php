@extends('layouts.app', ['title' => __('restaurant::lang.categories_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $reservations, 'columnsValues' => ['id', 'name', 'email', 'phone', 'start_date', 'status', 'confirmed', 'executed'], 'baseRoute' => 'restaurant.reservation'])
        @slot('title'){{ __('restaurant::lang.categories') }}@endslot

        @slot('createRoute')
            <a href="{{ route('restaurant.reservation.create') }}"
               class="btn btn-sm btn-primary">{{ __('restaurant::lang.add_category') }}</a>
        @endslot
    @endcomponent
@endsection
