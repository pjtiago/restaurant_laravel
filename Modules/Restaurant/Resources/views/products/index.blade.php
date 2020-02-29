@extends('layouts.app', ['title' => __('restaurant::lang.products_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $products])
        @slot('title'){{ __('restaurant::lang.products') }}@endslot

        @slot('columns')
            <td>{{ __('restaurant::lang.id') }}</td>
            <td>{{ __('restaurant::lang.name') }}</td>
            <td>{{ __('restaurant::lang.description') }}</td>
            <td>{{ __('restaurant::lang.price') }}</td>
            <td>{{ __('restaurant::lang.photo') }}</td>
            <td>{{ __('restaurant::lang.category') }}</td>
            <td>{{ __('restaurant::lang.visible') }}</td>
            <td>{{ __('restaurant::lang.highlight') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->photo }}</td>
                    <td>
                        {{$product->category->name}}
                    </td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $product->visible->id === Modules\Restaurant\Http\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($product->visible->translation) }}
                        </span>
                    </td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $product->highlight->id === Modules\Restaurant\Http\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($product->highlight->translation) }}
                        </span>
                    </td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{ route('restaurant.product.destroy', $product)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('restaurant.product.edit', $product) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('restaurant.product.create') }}"
               class="btn btn-sm btn-primary">{{ __('restaurant::lang.add_product') }}</a>
        @endslot
    @endcomponent
@endsection
