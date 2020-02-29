@section('custom_scripts')
    <script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $( ".datepicker" ).datepicker({
                format: '{{$format ?? ''}}',
                startDate: '{{$startDate ?? ''}}',
                endDate: '{{$endDate ?? ''}}'
            });
        });
    </script>
@endsection
<div class="form-group{{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="datepicker-{{$fieldName}}">{{$name}}</label>

    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
        </div>
        <input
            id="datepicker-{{$fieldName}}"
            class="form-control datepicker"
            placeholder="{{ $placeholder ?? '' }}"
            type="text"
            value="{{$value ?? ''}}">
    </div>

    @if ($errors->has($fieldName))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>

