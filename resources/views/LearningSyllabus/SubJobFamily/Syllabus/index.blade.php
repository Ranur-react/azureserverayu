@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families',
$jobFamily->name => '/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families',
$subJobFamily->name => '']])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-uppercase">Sub Job Family</h3>
                <h1 class="font-weight-bold text-3xl ">{{ $subJobFamily->name }}</h1>
            </div>
        </div>
        @if (session('delete_sub_job_family_syllabus_message_success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                <span class="alert-text">{!! session('delete_sub_job_family_syllabus_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        <div class="card shadow rounded mt-4">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Syllabus - {{ $subJobFamily->name }}</h3>
                            <div class="row justify-content-end">
                                <div class="text-right mr-3">
                                    <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.archive', [$jobFamily->id, $subJobFamily->id]) }}"
                                        class="btn btn-secondary">Archive</a>
                                </div>
                                @can('learning_syllabus_delete')
                                    <div class="text-right">
                                        <a href="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.create', [$jobFamily->id, $subJobFamily->id]) }}"
                                            class="btn btn-primary">Add Syllabus</a>
                                    </div>
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
                                    <th>
                                        Code</th>
                                    <th>
                                        Name</th>
                                    <th>
                                        Status</th>
                                    @if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
                                        <th class="text-right" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    @else
                                        <th>

                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($jobFamily->syllabuses as $syllabus_jf) --}}
                                {{-- <tr>
                                        <td>
                                            {{ $syllabus_jf->syllabus_code }}
                                        </td>
                                        <td><a
                                                href="{{ route('learning-design.learning-syllabus.job-families.syllabuses.show', [$jobFamily->id, $syllabus_jf->id]) }}">
                                                {{ $syllabus_jf->training_name }}</a>
                                        </td>
                                        <td>
                                            @if ($syllabus_jf->is_approved == 0 && $syllabus_jf->is_active == 0)

                                                Rejected
                                            @endif
                                            @if ($syllabus_jf->is_approved == 0 && $syllabus_jf->is_active == 1)

                                                Pending
                                            @endif

                                            @if ($syllabus_jf->is_approved == 1 && $syllabus_jf->is_active == 1)

                                                Active
                                            @endif

                                            @if ($syllabus_jf->is_approved == 1 && $syllabus_jf->is_active == 0)

                                                Deactive
                                            @endif
                                        </td>
                                        @if (auth()->user()->can('learning_syllabus_edit') ||
    auth()->user()->can('learning_syllabus_delete'))
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @can('learning_syllabus_edit')
                                                            <a class="dropdown-item"
                                                                href="{{ route('learning-design.learning-syllabus.job-families.syllabuses.edit', [$jobFamily->id, $syllabus_jf->id]) }}">Edit</a>
                                                        @endcan
                                                        @can('learning_syllabus_delete')
                                                            <form
                                                                action="{{ route('learning-design.learning-syllabus.job-families.syllabuses.destroy', [$jobFamily->id, $syllabus_jf->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item "
                                                                    data-method="delete">Delete</button>
                                                            </form>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach --}}
                                {{-- @foreach ($subJobFamily->syllabuses as $syllabus)
                                    <tr>
                                        <td>
                                            {{ $syllabus->syllabus_code }}
                                        </td>
                                        <td><a
                                                href="{{ route('learning-design.learning-syllabus.job-families.sub-job-families.syllabuses.show', [$jobFamily->id, $subJobFamily->id, $syllabus->id]) }}">
                                                {{ $syllabus->training_name }}</a>
                                        </td>
                                        <td>
                                            @if ($syllabus->is_approved == 0 && $syllabus->is_active == 0)

                                                Rejected
                                            @endif
                                            @if ($syllabus->is_approved == 0 && $syllabus->is_active == 1)

                                                Pending
                                            @endif

                                            @if ($syllabus->is_approved == 1 && $syllabus->is_active == 1)

                                                Active
                                            @endif

                                            @if ($syllabus->is_approved == 1 && $syllabus->is_active == 0)

                                                Deactive
                                            @endif
                                        </td>
                                        @if (auth()->user()->can('learning_syllabus_edit') ||
    auth()->user()->can('learning_syllabus_delete'))
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @can('learning_syllabus_edit')
                                                            <a class="dropdown-item"
                                                                href="{{ route('learning-design.learning-syllabus.job-families.sub-job-families.syllabuses.edit', [$jobFamily->id, $subJobFamily->id, $syllabus->id]) }}">Edit</a>
                                                        @endcan
                                                        @can('learning_syllabus_delete')
                                                            <form
                                                                action="{{ route('learning-design.learning-syllabus.job-families.sub-job-families.syllabuses.destroy', [$jobFamily->id, $subJobFamily->id, $syllabus->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item "
                                                                    data-method="delete">Delete</button>
                                                            </form>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><select data-column="2" class="form-control filter-select">
                                            <option value="">Select Status..</option>
                                            @foreach ($syllabuseStatuses as $syllabuseStatus)
                                                <option value="{{ $syllabuseStatus->id }}">{{ $syllabuseStatus->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
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
                        var table = $('#example').DataTable({
                            responsive: true,
                            processing: true,
                            serverSide: true,
                            "pagingType": "numbers",
                            "ajax": "{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.getAjaxSyllabus', [$jobFamily->id, $subJobFamily->id]) }}",
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
