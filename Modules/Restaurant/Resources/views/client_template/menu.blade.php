@extends('restaurant::client_template.layouts.layout')

@section('menuActivePage')
    active
@endsection

@component('restaurant::client_template.components.page-position', ['image' => url('/client/images/bg_3.jpg'), 'title' => 'Specialties'])
    @section('pagePosition')
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
    @endsection
@endcomponent

@section('content')
    @component('restaurant::client_template.components.menu.main-content', ['categories' => $categories])
    @endcomponent
@endsection
