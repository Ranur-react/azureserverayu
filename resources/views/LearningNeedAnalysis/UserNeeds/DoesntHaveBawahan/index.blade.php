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
                <div class="card-body pt-2">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Syllabus Name</th>
                                    <th scope="col" class="sort" data-sort="job-family">Job Family</th>
                                    <th scope="col" class="sort" data-sort="level">Level</th>
                                    <th scope="col" class="sort" data-sort="created-at">Created At</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th class="text-center" scope="col" class="sort" data-sort="name">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($request_syllabuses as $request_syllabus)
                                <tr>
                                    <td class="text-wrap">
                                        <a href="">
                                           {{ $request_syllabus->training_name }}
                                        </a>
                                    </td>
                                    <td class="text-wrap">
                                        Product & Marketing Management
                                    </td>
                                    <td>
                                        Technical Skill
                                    </td>
                                    <td>
                                        27 September 2021
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-muted mb-1 mr-1">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#">
                                            <button class="btn btn-sm btn-success btn-icon mr-2" type="button">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button class="btn btn-sm btn-danger btn-icon" type="button">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach --}}
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
                                    <th><select data-column="4" class="form-control filter-select">
                                        <option value="">Select Status..</option>
                                        @foreach ($status_syllabuses as $status_syllabus )
                                            <option value="{{ $status_syllabus->id }}">{{ $status_syllabus->name }}</option>
                                        @endforeach
                                    </select></th>
                                    <th></th>
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
        $(document).ready( function() {
            var table = $('#example').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            "pagingType": "numbers",
            "ajax": ({
                url: "{{ route('api.syllabuses.learning-design.requestSyllabus') }}",
            }),
            "columns":[
                { data: 'training_name', name: 'training_name'},
                { data: 'job_family_name', name: 'syllabusJobFamily.name'},
                { data: 'level_description', name: 'syllabusJobFamily.level'},
                { data: 'created_at', name: 'created_at' },
                { data: 'status_id', name: 'status_id' },
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
