@extends('layouts.app', ['title' => __('Create Reservation')])

@section('custom_scripts')
    <script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".datepicker").datepicker();
        });
    </script>
@endsection

@section('content')
    @include('users.partials.header', ['title' => __('restaurant::lang.add_user')])

    @component('components.forms.form', ['formAction' => 'put'])
        @slot('title'){{ __('restaurant::lang.create_reservation') }}@endslot
        @slot('subTitle'){{__('restaurant::lang.reservation_information')}}@endslot
        @slot('backLink'){{route('restaurant.reservation.index')}}@endslot
        @slot('formEndpoint'){{ route('restaurant.reservation.update', $reservation) }}@endslot
        @slot('formFields')
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text'])
                @slot('name'){{ __('restaurant::lang.name') }}@endslot
                @slot('oldValue'){{old('name', $reservation->name)}}@endslot
            @endcomponent

            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'email', 'type' => 'email'])
                @slot('name'){{ __('restaurant::lang.email') }}@endslot
                @slot('oldValue'){{old('email', $reservation->email)}}@endslot
            @endcomponent

            @component('components.forms.input-field', ['errors' => $errors, 'fieldName' => 'phone', 'type' => 'text'])
                @slot('name'){{ __('restaurant::lang.phone') }}@endslot
                @slot('oldValue'){{old('phone', $reservation->phone)}}@endslot
            @endcomponent

            <div class="form-group {{ $errors->has('start_date') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="input-start-date-picker">{{ __('restaurant::lang.start_date') }}</label>
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control datepicker" id="input-start-date-picker" placeholder="Select date" type="text" value="06/20/2020">
                </div>
            </div>
        @endslot
    @endcomponent
@endsection
