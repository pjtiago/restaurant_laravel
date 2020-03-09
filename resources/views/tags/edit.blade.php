@extends('layouts.app', ['title' => __('lang.create_category')])

@section('content')
    @include('users.partials.header', ['title' => __('lang.edit_tag')])

    @component('components.forms.form', ['formAction' => 'put'])
        @slot('title'){{ __('lang.edit_tag') }}@endslot
        @slot('subTitle'){{ __('lang.tag_information') }}@endslot
        @slot('backLink'){{route('tag.index')}}@endslot
        @slot('formEndpoint'){{ route('tag.update', $tag) }}@endslot
        @slot('formFields')
            @component('components.forms.input-field',['errors' => $errors, 'fieldName' => 'name', 'type' => 'text', 'additionalOptions' => ['required', 'autofocus']])
                @slot('name'){{ __('lang.name') }}@endslot
                @slot('oldValue'){{old('name', $tag->name)}}@endslot
            @endcomponent
            @component('components.forms.radio',['errors' => $errors, 'fieldName' => 'fk_status', 'options' => $boolean_status, 'oldValue' => $tag->status->name])
                @slot('name'){{ __('lang.status') }}@endslot
            @endcomponent
        @endslot
    @endcomponent
@endsection
