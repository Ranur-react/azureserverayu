@extends('layouts.app', ['pagename' => 'List Request Syllabus'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">List Request Syllabus</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th>Syllabus Name</th>
                                    <th>Job Family</th>
                                    <th>Level</th>
                                    <th>Created At</th>
                                    <th>Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">Select Level..</option>
                                            <option value="0">Job Family</option>
                                            <option value="1">Sub Job Family</option>
                                        </select>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready( function() {
            var table = $('#example').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            "pagingType": "numbers",
            "ajax": ({
                url: "{{ route('learning-design.learning-syllabus.getPendingSyllabus') }}",
            }),
            "columns":[
                { data: 'training_name', name: 'training_name'},
                { data: 'job_family_name', name: 'syllabusJobFamily.name'},
                { data: 'level_description', name: 'syllabusJobFamily.level'},
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', searchable: false},
                ]
            });

            $('.filter-select').change(function() {
                table.column( $(this).data('column'))
                    .search( $(this).val() )
                    .draw();
            });
        });
    </script>
@endpush
