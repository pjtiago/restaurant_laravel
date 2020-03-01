<div class="form-group {{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="select-">{{$name}}</label>
    @component('components.forms.radio-option',['fieldName' => $fieldName, 'options' => $options, 'oldValue' => $oldValue ?? null])
    @endcomponent

    @if ($errors->has($fieldName))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
