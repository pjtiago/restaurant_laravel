@extends('layouts.app', ['title' => __('Create Reservation')])

@section('custom_scripts').
    <script>
        $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endsection
@section('content')
    @include('users.partials.header', ['title' => __('Add User')])

    @component('components.forms.form', ['formAction' => 'post'])
        @slot('title'){{ __('Create Category') }}@endslot
        @slot('subTitle'){{__('Category information')}}@endslot
        @slot('backLink'){{route('restaurant.category.index')}}@endslot
        @slot('formEndpoint'){{route('restaurant.category.store')}}@endslot
        @slot('additionalFormOptions')enctype="multipart/form-data"@endslot
        @slot('formFields')
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text'])
                @slot('name'){{ __('name') }}@endslot
                @slot('oldValue'){{old('name')}}@endslot
            @endcomponent
        @endslot
    @endcomponent
@endsection
