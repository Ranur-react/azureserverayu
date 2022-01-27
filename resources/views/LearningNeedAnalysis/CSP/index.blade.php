@extends('layouts.app', ['pagename' => 'CSP'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
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
        @if (session('delete_csp_message_success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                <span class="alert-text">{!! session('delete_csp_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Informasi CSP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="fas fa-history mr-2"></i>History CSP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="mb-0">CSP - Daftar Syllabus</h3>
                                </div>
                            </div>
                            <div class="card-body pt-1 pb-0">
                                <!-- Light table -->
                                <div class="table-responsive mb-4">
                                    <table class="table align-items-center table-flush" id="example">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th scope="col" class="sort" data-sort="name">Training Name</th>
                                                <th scope="col" class="sort" data-sort="summary">Training Summary
                                                </th>
                                                <th scope="col" class="sort" data-sort="competency">Competency
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                            <th>
                                                <input type="text" class="form-control filter-input"
                                                    placeholder="Search for training name..." data-column="1" />
                                            </th>
                                            <th>
                                                <input type="text" class="form-control filter-input"
                                                    placeholder="Search for training summary..." data-column="2" />
                                            </th>
                                            <th>
                                                <input type="text" class="form-control filter-input"
                                                    placeholder="Search for competency..." data-column="3" />
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                        </tbody>
                                        {{-- <tfoot>
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control filter-input"
                                                    placeholder="Search for training name..." data-column="1" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control filter-input"
                                                    placeholder="Search for training summary..." data-column="2" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control filter-input"
                                                    placeholder="Search for competency..." data-column="3" />
                                            </td>
                                        </tfoot> --}}
                                    </table>
                                </div>
                            </div>
                            <div class="text-right p-4">
                                <a href="{{ route('api.csp.show') }}" id="button1" class="btn btn-success text-white">
                                    Submit
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col d-flex justify-content-between">
                                        <h3 class="mb-0">History CSP</h3>
                                        <div class="text-right">
                                            <a href="{{ route('learning-need-analysis.csp.archive') }}"
                                                class="btn btn-primary">Archive</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="history">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="year">Year</th>
                                                <th scope="col" class="sort" data-sort="theme">Theme</th>
                                                <th scope="col" class="sort" data-sort="status">Status</th>
                                                <th scope="col" class="sort" data-sort="start_date">Start Date
                                                </th>
                                                <th scope="col" class="sort" data-sort="end_date">End Date</th>
                                                <th class="text-right" scope="col" class="sort"
                                                    data-sort="name">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($csp as $row)
                                                <tr>
                                                    <td>
                                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row['start_date'])->format('Y') }}
                                                    </td>
                                                    <td><a
                                                            href="{{ route('learning-need-analysis.csp.syllabuses.index', $row->id) }}">
                                                            {{ $row->name }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @php 
                                                            $date_facturation = \Carbon\Carbon::parse($row->start_date) 
                                                        @endphp
                                                        {{-- check if date now in period start date and end date then status active --}}
                                                        @if (\Carbon\Carbon::today()->between($row->start_date, $row->end_date))
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
                                                        {{ \Carbon\Carbon::parse($row->start_date)->format('d F Y') }}
                                                        ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->start_date))->diffForHumans() }})
                                                    </td>
                                                    <td>
                                                        {{ \Carbon\Carbon::parse($row->end_date)->format('d F Y') }}
                                                        ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->end_date))->diffForHumans() }})
                                                    </td>
                                                    @if (auth()->user()->can('csp_edit') || auth()->user()->can('csp_delete'))
                                                    <td class="text-right">
                                                        <div class="d-flex justify-content-center">
                                                            @can('csp_edit')
                                                                <a href="{{ route('learning-need-analysis.csp.edit', $row->id) }}"
                                                                    class="btn btn-sm btn-primary btn-icon" type="button" >Edit Csp
                                                                </a>
                                                                <a href="{{ route('learning-need-analysis.csp.syllabuses.editCspSyllabuses', $row->id) }}"
                                                                    class="btn btn-sm btn-primary btn-icon" type="button" >Edit Csp Syllabus
                                                                </a>
                                                            @endcan
                                                            @can('csp_delete')
                                                                <form
                                                                    action="{{ route('learning-need-analysis.csp.destroy', $row->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                    type="submit" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
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
            </div>
        </div>
    </div>

    <!-- Modal Csp Cart -->
    <div class="modal fade" id="exampleModal"  role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <form method="post" id="frm-example" action="{{ route('learning-need-analysis.csp.store') }}">
                {{ csrf_field() }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Csp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label class="form-control-label" for="input-theme-name">Theme Name</label>
                            <input type="text" name="name" id="input-theme-name" class="form-control" placeholder=""
                                autofocus required>
                            {{-- <input type="text" name="syllabusId[]" id="syllabusId" value="" /> --}}
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
                                            type="text" autocomplete=”off” required>
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
                                            type="text" autocomplete=”off” required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Syllabus Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-2">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        var csp_start_date = flatpickr("#input-start-date", {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            onChange: function(selectedDates, dateStr, instance) {
                csp_end_date.set('minDate', dateStr)
            }
        });

        var csp_end_date = flatpickr("#input-end-date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            csp_start_date.set('maxDate', dateStr)
        }
        });
    </script>
    <script>
        $(document).ready( function() {
            var table =  $('#example').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            "pagingType": "numbers",
            "ajax": "{{ route('learning-need-analysis.csp.getAjaxSyllabus') }}",
            "columns":[
                { data: 'id', name: 'id'},
                { data: 'training_name', name: 'training_name' },
                { data: 'training_summary', name: 'training_summary'  },
                { data: 'prfCompetencyCatalog', name: 'prfCompetencyCatalog.name'},
                // { data: 'select_syllabus', name: 'select_syllabus', orderable: false, searchable: false},
                ],
                'columnDefs': [
                    {
                        'targets': 0,
                        'checkboxes': {
                            'selectRow': true
                        }
                    }
                ],
                'select': {
                    'style': 'multi',
                    selector : "td:nth-child(1), td:nth-child(3) , td:nth-child(4)"
                },
            });


            $('.filter-input').keyup(function() {
                table.column($(this).data('column'))
                .search($(this).val())
                .draw();
            });

             // Handle form submission event
            $('#frm-example').on('submit', function(e){
                var form = this;
                var rows_selected = table.column(0).checkboxes.selected();

                // Iterate over all selected checkboxes
                $.each(rows_selected, function(index, rowId){
                    // Create a hidden element
                    $(form).append(
                        $('<input>')
                            .attr('type', 'hidden')
                            .attr('name', 'syllabusId[]')
                            .val(rowId)
                    );
                });
             });
        });
    </script>
    <script>
        $('#history').DataTable({
            "pagingType": "numbers"
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#button1").click(function() {
                event.preventDefault();

                var searchIDs = [];
                var url = $(this).attr('href');

                $("#exampleModal").modal('show');

                $("input[name='syllabus[]']:checked").map(function() {
                    searchIDs.push($(this).val());
                }).get();

                $("#exampleModal #syllabusId").val(searchIDs);

            });
        });
    </script>
    <script>
        $("body").on("click", "a.modal-global", function (e) {
            event.preventDefault();

            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(response) {
                var competencies_section = ''
                var vendors_section = ''
                var levels_section = ''
                var statuses_section = ''
                var locations_section = ''
                var units_section = ''

                for (let index = 0; index < response['competencies'].length; index++) {
                    const competency = response['competencies'][index];
                    competencies_section +=
                        `<span class="badge badge-pill badge-muted mb-1 mr-1">` + competency['name'] +
                        `</span>`
                }
                for (let index = 0; index < response['vendors'].length; index++) {
                    const vendor = response['vendors'][index];
                    vendors_section += `
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + vendor['partner_name'] + `</span>
                    `
                }
                for (let index = 0; index < response['levels'].length; index++) {
                    const level = response['levels'][index];
                    levels_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + level['name'] + `</span>
                    `
                }
                for (let index = 0; index < response['statuses'].length; index++) {
                    const status = response['statuses'][index];
                    statuses_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + status['name'] + `</span>
                    `
                }
                for (let index = 0; index < response['locations'].length; index++) {
                    const location = response['locations'][index];
                    locations_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + location['location_code'] + `</span>
                    `
                }
                for (let index = 0; index < response['units'].length; index++) {
                    const unit = response['units'][index];
                    units_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + unit['name'] + `</span>
                    `
                }
                // console.log(response[0].description)
                $("#exampleModalLong").find('.modal-body').html(`
                <div>
                    <div class="mb-4">
                        <h3 class="text-lg">` + response['syllabus']['training_name'] + `</h3>
                        <p class="text-xs font-weight-normal text-muted mb-2">
                            ` + response['syllabus']['syllabus_code'] + `</p>
                        <p class="text-sm mb-0 font-weight-normal">` + response['syllabus']['training_summary'] + `</p>
                    </div>

                    <div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Skills Will You Gain
                            </h4>
                            <div class="border p-3">
                                <div>
                                    ` + competencies_section + `
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Who is This Course For
                            </h4>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Level</h4>
                                            ` + levels_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Status</h4>
                                            ` + statuses_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Location</h4>
                                            ` + locations_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Unit</h4>
                                            ` + units_section + `
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Training Description
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                                ` + response['syllabus']['training_description'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Training Background
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['training_background'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Learning Scope
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['learning_scope'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Partner Recommendation
                            </h4>
                            
                            <div class="border p-3">
                            ` + vendors_section + `
                            </div>
                        </div>
                    </div>
                </div>
            `)
            });
        });
    </script>
    {{-- <script>
        $(function() {
            $('#selectAll').click(function() {
                if ($(this).prop('checked')) {
                    $('.syllabus-class').prop('checked', true);
                } else {
                    $('.syllabus-class').prop('checked', false);
                }
            });

        });
    </script> --}}
@endpush
