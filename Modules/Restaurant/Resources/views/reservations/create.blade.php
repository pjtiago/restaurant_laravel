@extends('layouts.app', ['title' => __('Create Reservation')])

@section('custom_scripts')
    <script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $( ".datepicker" ).datepicker();
        });
    </script>
@endsection

@section('content')
    @include('users.partials.header', ['title' => __('Add User')])

    @component('components.form')
        @slot('title'){{ __('Create Reservation') }}@endslot
        @slot('subTitle'){{__('Reservation information')}}@endslot
        @slot('backLink'){{route('restaurant.reservation.index')}}@endslot
        @slot('formEndpoint'){{route('restaurant.reservation.store')}}@endslot
    @endcomponent
@endsection
