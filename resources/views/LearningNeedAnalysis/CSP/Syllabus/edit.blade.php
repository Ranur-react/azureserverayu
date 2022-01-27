@extends('layouts.app', ['pagedirectory' => [
'CSP' =>'/learning-need-analysis/csp',
$csp_id->name => '',
'List Syllabus' => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8">
        @if ($errors->any())
            <div class="alert alert-default alert-dismissible fade show mb-5" role="alert">
                <span class="alert-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                <span class="alert-text">
                    <strong>Whoops, </strong>there is some error!!
                </span>
                @foreach ($errors->all() as $error)
                    <div class="ml-5 mt-2"><li>{{$error}}</li></div>
                @endforeach

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Delete CSP Syllabus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Add Csp Syllabus</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <div class="card shadow-lg mb-5">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="mb-0">CSP - Daftar Syllabus</h3>
                                </div>
                            </div>
                            <div class="card-body pt-1">
                                <!-- Light table -->
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush w-100" id="example">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th scope="col" class="sort" data-sort="name">Training Name</th>
                                                <th scope="col" class="sort" data-sort="summary">Training Summary
                                                </th>
                                                <th scope="col" class="sort" data-sort="competency">Competency
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form method="post" id="frm-delete-csp-syllabus"
                            action="{{ route('learning-need-analysis.csp.destroyCspSyllabuses', $csp_id->id) }}">
                            {{ csrf_field() }}
                                <div class="text-center mb-5">
                                    <button type="submit" class="btn btn-warning mt-4">Delete Syllabus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="card shadow-lg mb-5">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="mb-0">CSP - Add Syllabus</h3>
                                </div>
                            </div>
                            <div class="card-body pt-1">
                                <!-- Light table -->
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush w-100" id="exampleNot">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th scope="col" class="sort" data-sort="name">Training Name</th>
                                                <th scope="col" class="sort" data-sort="summary">Training Summary
                                                </th>
                                                <th scope="col" class="sort" data-sort="competency">Competency
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form method="post" id="frm-add-csp-syllabus"
                            action="{{ route('learning-need-analysis.csp.storeCspSyllabuses', $csp_id->id) }}">
                                {{ csrf_field() }}
                                <div class="text-center mb-5">
                                    <button type="submit" class="btn btn-success mt-4">Add Syllabus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>   
            </div>
        </div>

        <div class="row">
            <div class="col">
                    
            </div>
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
        $(document).ready( function() {
            var table =  $('#example').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": "{{ route('learning-need-analysis.csp.getCspSyllabuses', $csp_id->id) }}",
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
            $('#frm-delete-csp-syllabus').on('submit', function(e){
                var form = this;
                var rows_selected = table.column(0).checkboxes.selected();

                // Iterate over all selected checkboxes
                $.each(rows_selected, function(index, rowId){
                    // Create a hidden element
                    $(form).append(
                        $('<input>')
                            .attr('type', 'hidden')
                            .attr('name', 'syllabus[][id]')
                            .val(rowId)
                    );
                });
            });
        });
    </script>
    <script>
        $(document).ready( function() {
            var table =  $('#exampleNot').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": "{{ route('learning-need-analysis.csp.getNotCspSyllabuses', $csp_id->id) }}",
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
            $('#frm-add-csp-syllabus').on('submit', function(e){
                var form = this;
                var rows_selected = table.column(0).checkboxes.selected();

                // Iterate over all selected checkboxes
                $.each(rows_selected, function(index, rowId){
                    // Create a hidden element
                    $(form).append(
                        $('<input>')
                            .attr('type', 'hidden')
                            .attr('name', 'syllabus[][id]')
                            .val(rowId)
                    );
                });
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
    <script>
        $(function() {
            $('#selectAll').click(function() {
                if ($(this).prop('checked')) {
                    $('.syllabus-class').prop('checked', true);
                } else {
                    $('.syllabus-class').prop('checked', false);
                }
            });

        });
    </script>
@endpush
