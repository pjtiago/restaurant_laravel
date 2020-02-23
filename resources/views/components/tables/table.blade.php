<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{$title}}</h3>
                        </div>
                        <div class="col-4 text-right">
                            {{$createRoute}}
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
                            @foreach ($columnsValues as $value)
                                <td>{{ __($value) }}</td>
                            @endforeach
                                <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                                <tr>
                                    @foreach ($columnsValues as $value)
                                        <td>{{ $row->$value }}</td>
                                    @endforeach
                                    @component('components.tables.table-actions')
                                        @slot('destroyRoute')
                                            {{ route($baseRoute . '.destroy', $row)}}
                                        @endslot

                                        @slot('editRoute')
                                            {{ route($baseRoute . '.edit', $row) }}
                                        @endslot
                                    @endcomponent
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $rows->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
