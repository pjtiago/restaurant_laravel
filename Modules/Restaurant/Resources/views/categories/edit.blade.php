@extends('layouts.app', ['title' => __('restaurant::lang.create_category')])

@section('content')
    @include('users.partials.header')

    @component('components.forms.form', ['formAction' => 'put'])
        @slot('title'){{ __('restaurant::lang.create_category') }}@endslot
        @slot('subTitle'){{ __('restaurant::lang.category_information') }}@endslot
        @slot('backLink'){{route('restaurant.category.index')}}@endslot
        @slot('formEndpoint'){{ route('restaurant.category.update', $category) }}@endslot
        @slot('formFields')
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('restaurant::lang.name') }}@endslot
                @slot('oldValue'){{old('name', $category->name)}}@endslot
            @endcomponent
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'description', 'type' => 'text', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('restaurant::lang.description') }}@endslot
                @slot('oldValue'){{old('description', $category->description)}}@endslot
            @endcomponent
        @endslot
    @endcomponent
@endsection
