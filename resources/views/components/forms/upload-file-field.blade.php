@section('custom_scripts').
    <script>
        $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endsection

<div class="form-group {{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-{{$fieldName}}">{{$name}}</label>
    <div class="input-group input-group-alternative {{ $errors->has($fieldName) ? ' is-invalid' : '' }}">
        <div class="custom-file">
            <input id="input-{{$fieldName}}" name="{{$fieldName}}" type="file" class="custom-file-input">
            <label for="input-{{$fieldName}}" class="custom-file-label text-truncate">{{ isset($filePath) ? $filePath : 'Choose image...' }}</label>
        </div>
    </div>
    @if ($errors->has($fieldName))
        <span class="custom-invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
