@extends('layouts.app', ['pagedirectory' => ['Home' =>'/learning-design/home',
'Job Family Directory' =>'/learning-design/learning-syllabus/job-families', $jobFamily->name =>
'/learning-design/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families', $competency->name => '']])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt-lg--7 mt--8 mb-5">

        <div class="card shadow rounded">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Syllabus {{ $competency->name }}</h3>
                            <div class="text-right">
                                <a href="{{ route('learning-design.learning-syllabus.job-families.competencies.syllabuses.create', [$jobFamily->id, $competency->id]) }}"
                                    class="btn btn-sm btn-primary">Add Syllabus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="example">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">
                                    Name</th>
                                <th scope="col" class="sort" data-sort="name">
                                    Status</th>
                                @if(auth()->user()->can('vendor_edit') || auth()->user()->can('vendor_delete'))
                                <th class="text-right" scope="col" class="sort" data-sort="name">
                                    Action
                                </th>
                                    @endif
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($competency->syllabuses as $syllabus)
                                <tr>
                                    <td><a
                                            href="{{ route('learning-design.learning-syllabus.job-families.syllabuses.show', [$jobFamily->id, $competency->id, $syllabus->id]) }}">
                                            {{ $syllabus->syllabus_code }}</a></td>
                                    <td>
                                        @if ($syllabus->status_syllabus == 'approved')
                                            <span class="badge badge-pill badge-success">Approved</span>
                                        @endif
                                        @if ($syllabus->status_syllabus == 'pending')
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    @if(auth()->user()->can('vendor_edit') || auth()->user()->can('vendor_delete'))
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                @can('vendor_edit')
                                                <a class="dropdown-item"
                                                    href="{{ route('learning-design.learning-syllabus.job-families.competencies.syllabuses.edit', [$jobFamily->id, $competency->id, $syllabus->id]) }}">Edit</a>
                                                @endcan
                                                    @can('vendor_delete')
                                                <form
                                                    action="{{ route('learning-design.learning-syllabus.job-families.competencies.syllabuses.destroy', [$jobFamily->id, $competency->id, $syllabus->id]) }}"
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
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
@push('js')
    <script>
        $('#example').DataTable( {
            "pagingType": "numbers"
        } );
    </script>
@endpush

