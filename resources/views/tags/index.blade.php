@extends('layouts.app', ['title' => __('lang.tags_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $tags])
        @slot('title'){{ __('lang.tags') }}@endslot

        @slot('columns')
            <td>{{ __('lang.id') }}</td>
            <td>{{ __('lang.name') }}</td>
            <td>{{ __('lang.status') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $tag->status->id === App\Models\BooleanStatus::KEY_ACTIVE ? 'badge-success' : 'badge-danger'}}">{{ __($tag->status->translation) }}
                        </span>
                    </td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{  route('tag.destroy', $tag)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('tag.edit', $tag) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('tag.create') }}"
               class="btn btn-sm btn-primary">{{ __('lang.add_tag') }}</a>
        @endslot
    @endcomponent
@endsection
