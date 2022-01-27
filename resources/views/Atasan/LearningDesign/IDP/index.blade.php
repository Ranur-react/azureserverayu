@extends('layouts.app', ['pagename' => 'Periode IDP'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8">
        @can('idp_period_access')
            @if ($errors->any())
                <div class="alert alert-default alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Whoops, there is some errors!!</h4>
                    @foreach ($errors->all() as $error)
                        <span class="alert-icon"><i class="ni ni-fat-delete"></i></span>
                        <span class="alert-text">{{ $error }}</span><br>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('delete_idp_message_success'))
                <div class="alert alert-default alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                    <span class="alert-text">{!! session('delete_idp_message_success') !!}</span>
                    <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="bg-darker">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="card shadow-lg">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col d-flex justify-content-between">
                                    <h3 class="mb-0">Periode IDP</h3>
                                    <div class="text-right">
                                        <a href="{{ route('learning-design.learning-need-analysis.idp.archive') }}"
                                            class="btn btn-primary">Archive</a>
                                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Add
                                            Period</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body pt-1">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Year</th>
                                            <th scope="col" class="sort" data-sort="email">Period</th>
                                            <th scope="col" class="sort" data-sort="email">Status</th>
                                            <th scope="col" class="sort" data-sort="email">Start Date</th>
                                            <th scope="col" class="sort" data-sort="email">End Date</th>
                                            @if (auth()->user()->can('idp_period_edit') ||
            auth()->user()->can('idp_period_delete'))
                                                <th class="text-right" scope="col" class="sort" data-sort="name">
                                                    Action
                                                </th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($idp as $idpPeriod)
                                            <tr>
                                                <td>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idpPeriod['start_date'])->format('Y') }}
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('learning-design.learning-need-analysis.idp-period.syllabuses.index', $idpPeriod->id) }}">
                                                        {{ $idpPeriod->name }} -
                                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idpPeriod['start_date'])->format('Y') }}
                                                    </a>
                                                </td>
                                                <td>
                                                    @if (\Carbon\Carbon::today()->between($idpPeriod->start_date, $idpPeriod->end_date))
                                                        <span class="badge badge-pill badge-success mb-1 mr-1">Active</span>
                                                    @elseif(\Carbon\Carbon::today()->lessThan($idpPeriod->start_date))
                                                        <span class="badge badge-pill badge-warning mb-1 mr-1">Pending</span>
                                                    @else
                                                        <span class="badge badge-pill badge-muted mb-1 mr-1">Ended</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($idpPeriod->start_date)->format('d F Y') }}
                                                    ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($idpPeriod->start_date))->diffForHumans() }})
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($idpPeriod->end_date)->format('d F Y') }}
                                                    ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($idpPeriod->end_date))->diffForHumans() }})
                                                </td>
                                                @if (auth()->user()->can('idp_period_edit') ||
            auth()->user()->can('idp_period_delete'))
                                                    <td class="text-right">
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                @can('idp_period_edit')
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('learning-design.learning-need-analysis.idp.edit', $idpPeriod->id) }}">Edit</a>
                                                                @endcan
                                                                @can('idp_period_delete')
                                                                    <form
                                                                        action="{{ route('learning-design.learning-need-analysis.idp.destroy', $idpPeriod->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="dropdown-item submit-delete"
                                                                            data-method="delete">Delete</button>
                                                                    </form>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
        <br>
        @if (auth()->user()->userAtasan()->exists())
            <div class="row">
                <div class="col">
                    <div class="card shadow-lg">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">List Karyawan</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body pt-1">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Name</th>
                                            <th scope="col" class="sort" data-sort="email">Title</th>
                                            <th scope="col" class="sort" data-sort="email">Organization</th>
                                            <th class="text-right" scope="col" class="sort" data-sort="name">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach (auth()->user()->userAtasan as $row)
                                            <tr>
                                                <td>
                                                    {{ $row->name }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $row->title }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $row->directorate }}
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('learning-design.learning-need-analysis.idp.karyawan.show', $row->id) }}"
                                                        class="btn btn-sm btn-primary" type="button">Lihat</a>
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
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Period
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('learning-design.learning-need-analysis.idp.store') }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label class="form-control-label" for="input-period">Period</label>
                            <input type="text" name="name" id="input-period" class="form-control" placeholder="" autofocus
                                required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-start-date">Start Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" name="start_date" placeholder="Select date"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-end-date">End Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" name="end_date" placeholder="Select date"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
