@extends('layouts.app', ['title' => __('restaurant::lang.create_reservation')])



@section('content')
    @include('users.partials.header', ['title' => __('Add User')])

    @component('components.forms.form', ['formAction' => 'post'])
        @slot('title'){{ __('Create Reservation') }}@endslot
        @slot('subTitle'){{__('Reservation information')}}@endslot
        @slot('backLink'){{route('restaurant.reservation.index')}}@endslot
        @slot('formEndpoint'){{route('restaurant.reservation.store')}}@endslot
        @slot('formFields')
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text'])
                @slot('name'){{ __('restaurant::lang.name') }}@endslot
                @slot('oldValue'){{old('name')}}@endslot
            @endcomponent

            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'email', 'type' => 'email'])
                @slot('name'){{ __('restaurant::lang.email') }}@endslot
                @slot('oldValue'){{old('email')}}@endslot
            @endcomponent

            @component('components.forms.input-field', ['errors' => $errors, 'fieldName' => 'phone', 'type' => 'text'])
                @slot('name'){{ __('restaurant::lang.phone') }}@endslot
                @slot('oldValue'){{old('phone')}}@endslot
            @endcomponent

            @component('components.forms.datepicker',['errors' => $errors, 'fieldName' => 'booking_date', 'type' => 'text'])
                @slot('name'){{ __('restaurant::lang.date') }}@endslot
                @slot('value'){{ date("d/m/Y",strtotime("+1 day")) }}@endslot
                @slot('format'){{ "dd/mm/yyyy" }}@endslot
                @slot('startDate'){{ date("d/m/Y",strtotime("+1 day")) }}@endslot
                @slot('endDate'){{ date("d/m/Y",strtotime("+2 weeks")) }}@endslot
                @slot('daysOfWeekDisabled'){{ "[1,2]" }}@endslot
                @slot('datesDisabled'){{ "[12/03/2020,11/03/2020]" }}@endslot
                @slot('placeholder'){{ __('restaurant::lang.select_date') }}@endslot
            @endcomponent

        @endslot
    @endcomponent
@endsection
