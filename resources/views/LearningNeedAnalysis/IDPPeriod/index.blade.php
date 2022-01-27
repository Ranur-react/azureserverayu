@extends('layouts.app', ['pagename' => 'IDP Period'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
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
                                        <a href="{{ route('learning-need-analysis.idp-period.archive') }}"
                                                class="btn btn-primary">Archive</a>
                                        @can('idp_period_create')
                                            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Add
                                                Period</button>
                                        @endcan
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
                                            @if (auth()->user()->can('idp_period_edit') || auth()->user()->can('idp_period_delete'))
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
                                                    <a href="{{ route('learning-need-analysis.idp-period.syllabuses.index', $idpPeriod->id) }}">
                                                    {{ $idpPeriod->name }} -
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idpPeriod['start_date'])->format('Y') }}
                                                    </a>
                                                </td>
                                                <td>
                                                    @php 
                                                        $date_facturation = \Carbon\Carbon::parse($idpPeriod->start_date) 
                                                    @endphp
                                                    {{-- check if date now in period start date and end date then status active --}}
                                                    @if (\Carbon\Carbon::today()->between($idpPeriod->start_date, $idpPeriod->end_date))
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
                                                <td>
                                                    {{ \Carbon\Carbon::parse($idpPeriod->start_date)->format('d F Y') }}
                                                    ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($idpPeriod->start_date))->diffForHumans() }})
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($idpPeriod->end_date)->format('d F Y') }}
                                                    ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($idpPeriod->end_date))->diffForHumans() }})
                                                </td>
                                                @if (auth()->user()->can('idp_period_edit') || auth()->user()->can('idp_period_delete'))
                                                    <td class="text-right">
                                                        <div class="d-flex justify-content-end">
                                                            @can('idp_period_edit')
                                                                <a href="{{ route('learning-need-analysis.idp-period.edit', $idpPeriod->id) }}"
                                                                    class="btn btn-sm btn-primary btn-icon" type="button" >Edit
                                                                </a>
                                                            @endcan
                                                            @can('idp_period_delete')
                                                            <form action="{{ route('learning-need-analysis.idp-period.destroy', $idpPeriod->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                            </form>
                                                            @endcan
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
                <form method="post" action="{{ route('learning-need-analysis.idp-period.store') }}" id="formIdpPeriod">
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
                                        <input class="form-control bg-white" id="input-start-date" name="start_date" placeholder="Select date"
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
                                        <input class="form-control bg-white" id="input-end-date" name="end_date" placeholder="Select date"
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
    <script>
        var idp_start_date = flatpickr("#input-start-date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            idp_end_date.set('minDate', dateStr)
        }
        });
    
        var idp_end_date = flatpickr("#input-end-date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            idp_start_date.set('maxDate', dateStr)
        }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#formIdpPeriod").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                }); 
        }); 
    </script>
@endpush
