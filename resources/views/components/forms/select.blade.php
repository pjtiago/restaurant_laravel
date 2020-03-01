<div class="form-group{{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="{{$fieldName}}">{{$name}}</label>
    <select class="form-control" name="{{$fieldName}}" id="select-{{$fieldName}}">
        @component('components.forms.select-option', ['options' => $options, 'selected' => $selected ?? null])
        @endcomponent
    </select>

    @if ($errors->has($fieldName))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
