<div class="form-group{{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-{{$fieldName}}"></label>
    <input type="{{$type}}" name="{{$fieldName}}" id="input-{{$fieldName}}" class="form-control form-control-alternative{{ $errors->has($fieldName) ? ' is-invalid' : '' }}" placeholder="{{$name}}" value="{{$oldValue}}" required autofocus>

    @if ($errors->has($fieldName))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
