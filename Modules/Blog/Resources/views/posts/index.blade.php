@extends('layouts.app', ['title' => __('blog::lang.posts_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $posts])
        @slot('title'){{ __('blog::lang.posts') }}@endslot

        @slot('columns')
            <td>{{ __('blog::lang.id') }}</td>
            <td>{{ __('blog::lang.title') }}</td>
            <td>{{ __('blog::lang.user') }}</td>
            <td>{{ __('blog::lang.category') }}</td>
            <td>{{ __('blog::lang.visible') }}</td>
            <td>{{ __('blog::lang.highlight') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->postCategory->name }}</td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $post->visible->id === App\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($post->visible->translation) }}
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $post->highlight->id === App\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($post->highlight->translation) }}
                        </span>
                    </td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{ route('blog.post.destroy', $post)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('blog.post.edit', $post) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('blog.post_category.create') }}"
               class="btn btn-sm btn-primary">{{ __('blog::lang.add_post') }}</a>
        @endslot
    @endcomponent
@endsection
