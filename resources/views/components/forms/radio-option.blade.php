@foreach ($options as $key => $option)
    <div class="custom-control custom-radio mb-3">
        <input name="{{$fieldName}}" class="custom-control-input" id="{{$fieldName . $key}}" type="radio" value="{{$option->id}}">
        <label class="custom-control-label" for="{{$fieldName . $key}}">{{$option->name}}</label>
    </div>
@endforeach
