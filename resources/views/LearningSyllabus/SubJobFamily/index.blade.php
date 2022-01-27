@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families', $jobFamily->name =>'']])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-uppercase">Job Family</h3>
                <h1 class="font-weight-bold text-3xl ">{{ $jobFamily->name }}</h1>
            </div>
        </div>
        @if (session('delete_sub_job_family_message_success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                <span class="alert-text">{!! session('delete_sub_job_family_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        @if (session('delete_job_family_syllabus_message_success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                <span class="alert-text">{!! session('delete_job_family_syllabus_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        <div>
            <div class="row justify-content-end">
                <div class="text-right mr-3">
                    <a href="{{ route('learning-syllabus.job-families.sub-job-families.archive', $jobFamily->id) }}"
                        class="btn btn-secondary">Archive</a>
                </div>
                @can('learning_syllabus_create')
                    <div class="text-right">
                        <a href="{{ route('learning-syllabus.job-families.sub-job-families.create', $jobFamily->id) }}"
                            class="btn btn-primary">Add Sub Job Family</a>
                    </div>
                @endcan
            </div>
            <div class="row mt-4">
                @forelse ($jobFamily->jobFamilySubJobFamily as $subJobFamily)
                    <div class="col-xl-2 col-lg-6 mb-4 mb-lg-5">
                        <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg h-100">
                            @if ($subJobFamily->pending_syllabuses->count() != 0)
                                <span
                                    class="card-badge text-sm text-white">{{ $subJobFamily->pending_syllabuses->count() }}</span>
                            @endif
                            <div class="dropdown text-right rounded-top">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                @if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        @can('learning_syllabus_edit')
                                            <a class="dropdown-item"
                                                href="{{ route('learning-syllabus.job-families.sub-job-families.edit', [$jobFamily->id, $subJobFamily->id]) }}">Edit</a>
                                        @endcan
                                        @can('learning_syllabus_delete')
                                            <form
                                                action="{{ route('learning-syllabus.job-families.sub-job-families.destroy', [$jobFamily->id, $subJobFamily->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    data-method="delete">Delete</button>
                                            </form>
                                        @endcan
                                    </div>
                                @endif
                            </div>
                            <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.index', [$jobFamily->id, $subJobFamily->id]) }}"
                                class="p-2 pb-4">
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                            <i class="fas fa-folder-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <span class="h4 font-weight-bold mb-0">{{ $subJobFamily->name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-11 mb-2 mb-lg-4 mt-2">
                        <p class="text-center text-xl">This Folder Is Empty.</p>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="card shadow rounded">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Syllabus - {{ $jobFamily->name }} </h3>
                            @can('learning_syllabus_create')
                                <div class="text-right">
                                    <a href="{{ route('learning-syllabus.job-families.syllabuses.create', $jobFamily->id) }}"
                                        class="btn btn-primary">Add Syllabus</a>
                                </div>
                            @endcan
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
                                        <th class="text-center" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    @else
                                        <th></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="list">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">Select Status..</option>
                                            @foreach ($syllabusStatuses as $syllabusStatus)
                                                <option value="{{ $syllabusStatus->id }}">
                                                    {{ $syllabusStatus->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td></td>
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
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": "{{ route('learning-syllabus.job-families.sub-job-families.getAjaxSyllabus', $jobFamily->id) }}",
                "columns": [{
                        data: 'syllabus_code',
                        name: 'syllabus_code'
                    },
                    {
                        data: 'training_name',
                        name: 'training_name'
                    },
                    {
                        data: 'status_id',
                        name: 'syllabusStatus.id'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            $('.filter-select').change(function() {
                table.column($(this).data('column'))
                    .search($(this).val())
                    .draw();
            });
        });
    </script>
@endpush
