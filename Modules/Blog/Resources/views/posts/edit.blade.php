@extends('layouts.app', ['title' => __('restaurant::lang.create_category')])

@section('content')
    @include('users.partials.header', ['title' => __('Add User')])

    @component('components.forms.form', ['formAction' => 'put'])
        @slot('title'){{ __('blog::lang.edit_post_category') }}@endslot
        @slot('subTitle'){{ __('blog::lang.post_category_information') }}@endslot
        @slot('backLink'){{route('blog.post_category.index')}}@endslot
        @slot('formEndpoint'){{ route('blog.post_category.update', $postCategory) }}@endslot
        @slot('formFields')

            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('blog::lang.name') }}@endslot
                @slot('oldValue'){{old('name', $postCategory->name)}}@endslot
            @endcomponent

            @component('components.forms.radio',['errors' => $errors, 'fieldName' => 'fk_visible', 'options' => $booleanOptions, 'oldValue' => $postCategory->visible->name])
                @slot('name'){{ __('blog::lang.visible') }}@endslot
            @endcomponent
        @endslot
    @endcomponent
@endsection
