@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('tables.partials.header', ['title' => __('Edit table')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('table Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('restaurant.tables.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('restaurant.tables.update', $user) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $table->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('n_sits') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('n_sits') }}</label>
                                    <input type="text" name="n_sits" id="input-n_sits" class="form-control form-control-alternative{{ $errors->has('n_sits') ? ' is-invalid' : '' }}" placeholder="{{ __('n_sits') }}" value="{{ old('n_sits', $table->n_sits) }}" required>

                                    @if ($errors->has('n_sits'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('n_sits') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
