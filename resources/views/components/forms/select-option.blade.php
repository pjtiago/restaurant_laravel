@foreach ($options as $option)
    <option value="{{$option->id}}">{{ $option->id . '- ' . $option->name }}</option>
@endforeach
