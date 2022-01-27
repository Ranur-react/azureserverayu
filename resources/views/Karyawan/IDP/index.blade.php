@extends('layouts.app', ['pagedirectory' => 
['Individual Development Plan' => '']])


@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="p-md-2 p-1">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h5 class="text-sm text-muted mb-0">NIK {{ auth()->user()->employee->nik }}</h5>
                                    <h2 class="text-xl font-weight-extrabold">{{ auth()->user()->employee->name }}</h2>
                                    <p class="text-sm font-weight-normal text-muted mb-0"><span
                                            class="font-weight-bold text-uppercase">Title :</span> {{ auth()->user()->employee->title }}</p>
                                    <p class="text-sm font-weight-normal text-muted mb-0"><span
                                            class="font-weight-bold text-uppercase">Organization :</span>
                                        {{ auth()->user()->employee->organization }}</p>
                                </div>
                                <div class="col-lg-2">
                                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->employee->name }}" alt="..."
                                        style="height: 8rem; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div>
                                <h3 class="font-weight-bold mb-3">Training Plan</h3>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="example">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">#</th>
                                                <th scope="col" class="sort" data-sort="name">Year</th>
                                                <th scope="col" class="sort" data-sort="name">Period</th>
                                                <th scope="col" class="sort" data-sort="name">Title</th>
                                                <th scope="col" class="sort" data-sort="name">Organization</th>
                                                <th scope="col" class="sort" data-sort="name">Status</th>
                                                <th class="text-right" scope="col" class="sort"
                                                    data-sort="status">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($idpUser as $row)
                                                <tr>
                                                    <th scope="row">
                                                        Already Taken
                                                    </th>
                                                    <td>
                                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row->idpPeriod['start_date'])->format('Y') }}
                                                    </td>
                                                    <td>
                                                        {{ $row->idpPeriod->name }} -
                                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row->idpPeriod['start_date'])->format('Y') }}
                                                    </td>
                                                    <td class="text-wrap">
                                                        {{ auth()->user()->employee->title }}
                                                    </td>
                                                    <td class="text-wrap">
                                                        {{ auth()->user()->employee->organization }}
                                                    </td>
                                                    <td>
                                                        @php($date_facturation_row = \Carbon\Carbon::parse($row->idpPeriod->start_date))
                                                        @if (\Carbon\Carbon::today()->between($row->idpPeriod->start_date, $row->idpPeriod->end_date))
                                                            <span
                                                            class="badge badge-pill badge-success mb-1 mr-1">Active</span>
                                                        @elseif($date_facturation_row->isPast())
                                                            <span
                                                            class="badge badge-pill badge-muted mb-1 mr-1">Ended</span>
                                                        @else
                                                            <span
                                                            class="badge badge-pill badge-warning mb-1 mr-1">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('idp.show', [$row->id]) }}"
                                                                class="btn btn-sm btn-primary btn-icon" type="button">View
                                                            </a>       
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
