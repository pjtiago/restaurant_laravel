<div class="form-group{{ $errors->has($fieldName) ? ' has-danger' : '' }}">
    <label class="form-control-label" for="input-{{$fieldName}}">{{$name}}</label>
    <input
        type="{{$type}}"
        name="{{$fieldName}}"
        id="input-{{$fieldName}}"
        class="form-control form-control-alternative{{ $errors->has($fieldName) ? ' is-invalid' : '' }}"
        placeholder="{{$name}}"
        value="{{$oldValue}}"
        @if(isset($additionalOptions))
            @foreach($additionalOptions as $additionalOption)
                {{$additionalOption}}
                @endforeach
        @endif
    >

    @if ($errors->has($fieldName))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
    @endif
</div>
