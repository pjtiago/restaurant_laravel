@extends('layouts.app', ['title' => __('Categories Management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table')
        @slot('title'){{ __('Reservations') }}@endslot

        @slot('createRoute')
            <a href="{{ route('restaurant.reservation.create') }}"
               class="btn btn-sm btn-primary">{{ __('Add reservation') }}</a>
        @endslot

        @slot('columns')
            <th scope="col">{{ __('Id') }}</th>
            <th scope="col">{{ __('Name') }}</th>
            <th scope="col">{{ __('Email') }}</th>
            <th scope="col">{{ __('Phone') }}</th>
            <th scope="col">{{ __('Start Date') }}</th>
            <th scope="col">{{ __('Status') }}</th>
            <th scope="col">{{ __('Confirmed') }}</th>
            <th scope="col">{{ __('Executed') }}</th>
            <th scope="col"></th>
        @endslot

        @slot('tableBody')
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->start_date }}</td>
                    <td>
                        @if ($reservation->status === 'Pending')
                            <span class="badge badge-danger">{{ __('Pending') }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($reservation->confirmed)
                            <span class="badge badge-success">{{ __('Yes') }}</span>
                        @else
                            <span class="badge badge-danger">{{ __('No') }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($reservation->executed)
                            <span class="badge badge-success">{{ __('Yes') }}</span>
                        @else
                            <span class="badge badge-danger">{{ __('No') }}</span>
                        @endif
                    </td>

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

        @slot('tablePagination'){{ $reservations->links() }}@endslot
    @endcomponent
@endsection
