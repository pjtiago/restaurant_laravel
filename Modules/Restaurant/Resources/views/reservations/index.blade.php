@extends('layouts.app', ['title' => __('restaurant::lang.categories_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $reservations])
        @slot('title'){{ __('restaurant::lang.categories') }}@endslot

        @slot('columns')
            <td>{{ __('id') }}</td>
            <td>{{ __('name') }}</td>
            <td>{{ __('email') }}</td>
            <td>{{ __('phone') }}</td>
            <td>{{ __('start_date') }}</td>
            <td>{{ __('status') }}</td>
            <td>{{ __('confirmed') }}</td>
            <td>{{ __('executed') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->start_date }}</td>
                    <td>{{ $reservation->status }}</td>
                    <td>{{ $reservation->confirmed }}</td>
                    <td>{{ $reservation->executed }}</td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{ route('restaurant.reservation.destroy', $reservation)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('restaurant.reservation.edit', $reservation) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('restaurant.reservation.create') }}"
               class="btn btn-sm btn-primary">{{ __('restaurant::lang.add_category') }}</a>
        @endslot
    @endcomponent
@endsection
