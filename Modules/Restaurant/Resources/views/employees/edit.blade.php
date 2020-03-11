@extends('layouts.app', ['title' => __('restaurant::lang.create_employee')])

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

    @component('components.forms.form', ['formAction' => 'put'])
        @slot('title'){{ __('restaurant::lang.create_employee') }}@endslot
        @slot('subTitle'){{ __('restaurant::lang.employee_information') }}@endslot
        @slot('backLink'){{route('restaurant.employee.index')}}@endslot
        @slot('formEndpoint'){{ route('restaurant.employee.update', $employee) }}@endslot
        @slot('additionalFormOptions')enctype="multipart/form-data"@endslot
        @slot('formFields')
            @component('components.forms.input-field', ['errors' => $errors, 'fieldName' => 'name', 'type' => 'text', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('restaurant::lang.name') }}@endslot
                @slot('oldValue'){{old('name', $employee->name)}}@endslot
            @endcomponent
            @component('components.forms.text-area',['rows' => '3','errors' => $errors, 'fieldName' => 'description', 'type' => 'text'])
                @slot('name'){{ __('restaurant::lang.description') }}@endslot
                @slot('oldValue'){{old('description', $employee->description)}}@endslot
            @endcomponent
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'price', 'type' => 'number', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('restaurant::lang.price') }}@endslot
                @slot('oldValue'){{old('price', $employee->price)}}@endslot
            @endcomponent
            @component('components.forms.upload-file-field',['errors' => $errors, 'fieldName' => 'photo', 'filePath' => $employee->photo_name])
                @slot('name'){{ __('restaurant::lang.photo') }}@endslot
            @endcomponent

            @component('components.forms.select',['errors' => $errors, 'fieldName' => 'fk_category_id', 'options' => $categories, 'selected' => $employee->fk_category_id])
                @slot('name'){{ __('restaurant::lang.category') }}@endslot
            @endcomponent
            <div class="row">
                <div class="col-md-6">
                    @component('components.forms.radio',['errors' => $errors, 'fieldName' => 'fk_visible', 'options' => $boolean_options, 'oldValue' => $employee->visible->name])
                        @slot('name'){{ __('restaurant::lang.visible') }}@endslot
                    @endcomponent
                </div>
                <div class="col-md-6">
                    @component('components.forms.radio',['errors' => $errors, 'fieldName' => 'fk_highlight', 'options' => $boolean_options, 'oldValue' => $employee->highlight->name])
                        @slot('name'){{ __('restaurant::lang.highlight') }}@endslot
                    @endcomponent
                </div>
            </div>
        @endslot
    @endcomponent
@endsection
