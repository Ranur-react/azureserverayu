@extends('layouts.app', ['pagedirectory' => [
'IDP' =>'/learning-need-analysis/idp',
'Training Plan' => '' ]])


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
                                    <h5 class="text-sm text-muted mb-0">NIK {{ $employee->nik }}</h5>
                                    <h2 class="text-xl font-weight-extrabold">{{ $employee->name }}</h2>
                                    <p class="text-sm font-weight-normal text-muted mb-0"><span
                                            class="font-weight-bold text-uppercase">Title :</span> {{ $employee->title }}</p>
                                    <p class="text-sm font-weight-normal text-muted mb-0"><span
                                            class="font-weight-bold text-uppercase">Organization :</span>
                                        {{ $employee->organization }}</p>
                                </div>
                                <div class="col-lg-2">
                                <img src="https://ui-avatars.com/api/?name={{ $employee->name }}" alt="..."
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
                                            @foreach ($results as $data)
                                                <tr>
                                                    <th scope="row">
                                                        @php 
                                                            $date_facturation = \Carbon\Carbon::parse($data->start_date) 
                                                        @endphp
                                                        {{-- check if date now in period start date and end date then status new --}}
                                                        @if (\Carbon\Carbon::today()->between($data->start_date, $data->end_date))
                                                            New
                                                        {{-- check if start date in past --}}
                                                        @elseif($date_facturation->isPast())
                                                            Not Taken
                                                        {{-- check if start date in future --}}
                                                        @elseif($date_facturation->isFuture())
                                                            Pending
                                                        @else
                                                            No Status
                                                        @endif
                                                    </th>
                                                    <td>
                                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $data['start_date'])->format('Y') }}
                                                    </td>
                                                    <td>
                                                        {{ $data->name }}
                                                    </td>
                                                    <td class="text-wrap">
                                                        {{ $employee->title }}
                                                    </td>
                                                    <td class="text-wrap">
                                                        {{ $employee->organization }}
                                                    </td>
                                                    <td>
                                                        {{-- check if date now in period start date and end date then status active --}}
                                                        @if (\Carbon\Carbon::today()->between($data->start_date, $data->end_date))
                                                            <span
                                                            class="badge badge-pill badge-success mb-1 mr-1">Active</span>
                                                        {{-- check if start date in past --}}
                                                        @elseif($date_facturation->isPast())
                                                            <span
                                                            class="badge badge-pill badge-muted mb-1 mr-1">Ended</span>
                                                        {{-- check if start date in future --}}
                                                        @elseif($date_facturation->isFuture())
                                                            <span
                                                            class="badge badge-pill badge-warning mb-1 mr-1">Pending</span>
                                                        @else
                                                            <span
                                                                class="badge badge-pill badge-secondary mb-1 mr-1">No Status</span>
                                                        @endif
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        @if (\Carbon\Carbon::today()->between($data->start_date, $data->end_date))
                                                            <a href="{{ route('learning-need-analysis.idp.createIdp', [$employee->nik, $data->id]) }}"
                                                                class="btn btn-sm btn-success btn-icon" type="button"><i
                                                                    class="fas fa-plus"></i>
                                                            </a>
                                                        @else
                                                        No Action
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                                        {{ $employee->title }}
                                                    </td>
                                                    <td class="text-wrap">
                                                        {{ $employee->organization }}
                                                    </td>
                                                    <td>
                                                        @php 
                                                            $date_facturation_row = \Carbon\Carbon::parse($row->idpPeriod['start_date']) 
                                                        @endphp
                                                        {{-- check if date now in period start date and end date then status active --}}
                                                        @if (\Carbon\Carbon::today()->between($row->idpPeriod['start_date'], $row->idpPeriod['end_date']))
                                                            <span
                                                            class="badge badge-pill badge-success mb-1 mr-1">Active</span>
                                                        {{-- check if start date in past --}}
                                                        @elseif($date_facturation_row->isPast())
                                                            <span
                                                            class="badge badge-pill badge-muted mb-1 mr-1">Ended</span>
                                                        {{-- check if start date in future --}}
                                                        @elseif($date_facturation_row->isFuture())
                                                            <span
                                                            class="badge badge-pill badge-warning mb-1 mr-1">Pending</span>
                                                        @else
                                                            <span
                                                                class="badge badge-pill badge-secondary mb-1 mr-1">No Status</span>
                                                        @endif
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <div class="d-flex justify-content-center">
                                                            {{-- check if date now in period start date and end date then status active --}}

                                                            @if (\Carbon\Carbon::today()->between($row->idpPeriod->start_date, $row->idpPeriod->end_date))
                                                                <a href="{{ route('learning-need-analysis.idp.detail', [$employee->nik, $row->id]) }}"
                                                                    class="btn btn-sm btn-primary btn-icon" type="button">View
                                                                </a>
                                                                <form action="{{ route('learning-need-analysis.idp.destroyIdp', [$employee->nik, $row->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                                </form>
                                                            {{-- check if start date in past --}}
                                                            @elseif($date_facturation_row->isPast())
                                                                <a href="{{ route('learning-need-analysis.idp.detail', [$employee->nik, $row->id]) }}"
                                                                    class="btn btn-sm btn-primary btn-icon" type="button">View
                                                                </a>
                                                           {{-- check if start date in future --}}
                                                           @elseif($date_facturation_row->isFuture())
                                                                <a href="{{ route('learning-need-analysis.idp.detail', [$employee->nik, $row->id]) }}"
                                                                    class="btn btn-sm btn-primary btn-icon" type="button">View
                                                                </a>
                                                                <form action="{{ route('learning-need-analysis.idp.destroyIdp', [$employee->nik, $row->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                                </form>
                                                            @else
                                                                No Action
                                                            @endif
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
        $(document).ready(function(){
            $("form").submit(function () {
                if ($(this).valid()) {
                    $(this).submit(function () {
                        return false;
                    });
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    </script>
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
