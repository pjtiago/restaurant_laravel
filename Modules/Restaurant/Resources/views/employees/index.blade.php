@extends('layouts.app', ['title' => __('restaurant::lang.employees_management')])

@section('content')
    @include('layouts.headers.cards')

    @component('components.tables.table', ['rows' => $employees])
        @slot('title'){{ __('restaurant::lang.employees') }}@endslot

        @slot('columns')
            <td>{{ __('restaurant::lang.id') }}</td>
            <td>{{ __('restaurant::lang.name') }}</td>
            <td>{{ __('restaurant::lang.description') }}</td>
            <td>{{ __('restaurant::lang.phone') }}</td>
            <td>{{ __('restaurant::lang.photo') }}</td>
            <td>{{ __('restaurant::lang.role') }}</td>
            <td>{{ __('restaurant::lang.email') }}</td>
            <td>{{ __('restaurant::lang.visible') }}</td>
        @endslot
        @slot('columnsValues')
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->description }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->photo }}</td>
                    <td>{{ $employee->role->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <span class="badge badge-pill badge-lg
{{ $employee->visible->id === Modules\Restaurant\Http\Models\BooleanOption::KEY_YES ? 'badge-success' : 'badge-danger'}}">{{ __($employee->visible->translation) }}
                        </span>
                    </td>
                    @component('components.tables.table-actions')
                        @slot('destroyRoute')
                            {{ route('restaurant.employee.destroy', $employee)}}
                        @endslot

                        @slot('editRoute')
                            {{ route('restaurant.employee.edit', $employee) }}
                        @endslot
                    @endcomponent
                </tr>
            @endforeach
        @endslot
        <th scope="col"></th>

        @slot('createRoute')
            <a href="{{ route('restaurant.employee.create') }}"
               class="btn btn-sm btn-primary">{{ __('restaurant::lang.add_employee') }}</a>
        @endslot
    @endcomponent
@endsection
