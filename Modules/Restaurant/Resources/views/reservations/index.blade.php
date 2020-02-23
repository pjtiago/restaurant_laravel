@extends('layouts.app', ['title' => __('Categories Management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $reservations, 'columnsValues' => ['id', 'name', 'email', 'phone', 'start_date', 'status', 'confirmed', 'executed'], 'baseRoute' => 'restaurant.reservation'])
        @slot('title'){{ __('Categories') }}@endslot

        @slot('createRoute')
            <a href="{{ route('restaurant.reservation.create') }}"
               class="btn btn-sm btn-primary">{{ __('Add category') }}</a>
        @endslot
    @endcomponent
@endsection
