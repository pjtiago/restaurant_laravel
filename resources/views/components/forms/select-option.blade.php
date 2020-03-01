@foreach ($options as $option)
    <option value="{{$option->id}}"
        {{ isset($selected) && $selected == $option->id ? 'selected': ''}}
    >{{ $option->id . '- ' . $option->name }}
    </option>
@endforeach
