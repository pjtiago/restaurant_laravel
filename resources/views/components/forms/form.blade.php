<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{$title}}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{$backLink}}" class="btn btn-sm btn-primary">{{ __('lang.back_to_list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ $formEndpoint }}" autocomplete="off" {{$additionalFormOptions}}>
                        @csrf
                        @method($formAction)
                        <h6 class="heading-small text-muted mb-4">{{$subTitle}}</h6>
                        <div class="pl-lg-4">
                            {{$formFields}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('lang.save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
