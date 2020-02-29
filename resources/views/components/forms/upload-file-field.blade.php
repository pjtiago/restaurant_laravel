<div class="form-group {{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-{{$fieldName}}">{{$name}}</label>
    <div class="input-group input-group-alternative {{ $errors->has($fieldName) ? ' is-invalid' : '' }}">
        <div class="custom-file">
            <input id="input-{{$fieldName}}" name="{{$fieldName}}" type="file" class="custom-file-input">
            <label for="input-{{$fieldName}}" class="custom-file-label text-truncate">Choose image...</label>
        </div>
    </div>
    @if ($errors->has($fieldName))
        <span class="custom-invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
