@extends('layouts.app', ['title' => __('Reservations Management')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Reservations') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('reservation.create') }}"
                                   class="btn btn-sm btn-primary">{{ __('Add reservation') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Phone') }}</th>
                                <th scope="col">{{ __('Start Date') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col">{{ __('Confirmed') }}</th>
                                <th scope="col">{{ __('Executed') }}</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
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
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <form action="{{ route('reservation.destroy', $reservation)}}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a class="dropdown-item"
                                                       href="{{ route('reservation.edit', $reservation) }}">{{ __('Edit') }}</a>
                                                    <button type="button" class="dropdown-item"
                                                            onclick="confirm('{{ __("Are you sure you want to delete this reservation?") }}') ? this.parentElement.submit() : ''">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $reservations->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
