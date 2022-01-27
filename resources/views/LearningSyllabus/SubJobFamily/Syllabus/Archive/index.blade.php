@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families',
$jobFamily->name => '/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families',
$subJobFamily->name => '/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families/' .
$subJobFamily->id .'/syllabuses',
'Archive' => '']])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt-lg--8 mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-uppercase">Sub Job Family</h3>
                <h1 class="font-weight-bold text-3xl">{{ $subJobFamily->name }}</h1>
            </div>
        </div>
        <div class="card shadow rounded mt-4">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Syllabus Archive - {{ $subJobFamily->name }}</h3>
                            @can('learning_syllabus_create')
                                <div class="text-right">
                                    <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.archive.restore', [$jobFamily->id, $subJobFamily->id]) }}" id="button_restore_syllabus"
                                        class="btn btn-secondary">Restore</a>
                                        <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.force_delete', [$jobFamily->id, $subJobFamily->id]) }}" id="button_delete_syllabus"
                                        class="btn btn-secondary">Delete</a>
                                        @endcan
                                        <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.index', [$jobFamily->id, $subJobFamily->id]) }}"
                                            class="btn btn-primary">Back</a>
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
                                <th scope="col" class="sort" data-sort="name">
                                    Code</th>
                                <th scope="col" class="sort" data-sort="name">
                                    Name</th>
                                <th scope="col" class="sort" data-sort="name">
                                    Status</th>
                                    @if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
                                    <th class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="selectAll" class="custom-control-input text-lg" name="selectAll">
                                            <label class="custom-control-label"
                                                   for="selectAll"></label>
                                        </div>
                                    </th>
                                    @endif
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach ($syllabuses as $syllabus)
                                <tr>
                                    <td>
                                        {{ $syllabus->syllabus_code }}
                                    </td>
                                    <td><a
                                            href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.show', [$jobFamily->id, $subJobFamily->id, $syllabus->id]) }}">
                                            {{ $syllabus->training_name }}</a>
                                    </td>
                                    <td>
                                        @if ($syllabus->status_id == 4)
                                        {{-- <span class="badge badge-pill badge-danger">Rejected</span> --}}
                                        Rejected
                                        @endif
                                        @if ($syllabus->status_id == 3)
                                            {{-- <span class="badge badge-pill badge-warning">Pending</span> --}}
                                            Pending
                                        @endif

                                        @if ($syllabus->status_id == 1)
                                            {{-- <span class="badge badge-pill badge-success">Active</span> --}}
                                            Active
                                        @endif

                                        @if ($syllabus->status_id == 2)
                                            {{-- <span class="badge badge-pill badge-muted">Deactive</span> --}}
                                            Deactive
                                        @endif
                                    </td>
                                    @if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="syllabus_selected[]" class="syllabus-class custom-control-input" value="{{ $syllabus->id }}"
                                                   id="customCheck1.{{ $loop->index }}">
                                            <label class="custom-control-label"
                                                   for="customCheck1.{{ $loop->index }}"></label>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        Code</th>
                                    <th>
                                        Training Name</th>
                                    <th>
                                        Status</th>
                                        @if (auth()->user()->can('learning_syllabus_edit') ||
                                        auth()->user()->can('learning_syllabus_delete'))
                                                                        <th class="text-right" scope="col" class="sort" data-sort="name">
                                                                            Action
                                                                        </th>
                                                                    @endif
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "numbers",
                initComplete: function () {
                    this.api().columns( 2 ).every( function ()  {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            } );
        } );
    </script>
    <script>
        $(document).ready(function () {
            $("#button_restore_syllabus").click(function() {
                event.preventDefault();

                var searchIDs = [];

                var url = $(this).attr('href');

                $("input[name='syllabus_selected[]']:checked").map(function(){
                    searchIDs.push($(this).val());
                }).get();
                console.log(searchIDs)

                $.ajax({
                url: url,
                data: {syllabus_id:searchIDs},
                type: 'GET',
                }).done(function(response) {
                    location.reload();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#button_delete_syllabus").click(function() {
                event.preventDefault();

                var searchIDs = [];

                var url = $(this).attr('href');

                $("input[name='syllabus_selected[]']:checked").map(function(){
                    searchIDs.push($(this).val());
                }).get();
                console.log(searchIDs)

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

                $.ajax({
                url: url,
                data: {syllabus_id:searchIDs},
                type: 'DELETE',
                dataType: 'html',
                }).done(function(response) {
                    location.reload();
                });
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
