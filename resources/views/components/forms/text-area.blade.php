<div class="form-group{{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="textarea-{{$fieldName}}">{{$name}}</label>
    <textarea
        class="form-control"
        id="{{$fieldName}}"
        name="{{$fieldName}}"
        rows="{{$rows}}"
    >
    </textarea>

    @if ($errors->has($fieldName))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
