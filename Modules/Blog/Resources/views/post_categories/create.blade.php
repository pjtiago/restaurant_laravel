@extends('layouts.app', ['title' => __('blog::lang.create_post_category')])

@section('content')
    @include('users.partials.header')

    @component('components.forms.form', ['formAction' => 'post'])
        @slot('title'){{ __('blog::lang.create_post_category') }}@endslot
        @slot('subTitle'){{ __('blog::lang.post_category_information') }}@endslot
        @slot('backLink'){{route('blog.post_category.index')}}@endslot
        @slot('formEndpoint'){{route('blog.post_category.store')}}@endslot
        @slot('formFields')

            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('blog::lang.name') }}@endslot
                @slot('oldValue'){{old('name')}}@endslot
            @endcomponent

            @component('components.forms.radio',['errors' => $errors, 'fieldName' => 'fk_visible', 'options' => $boolean_options])
                @slot('name'){{ __('blog::lang.visible') }}@endslot
            @endcomponent

        @endslot
    @endcomponent
@endsection
