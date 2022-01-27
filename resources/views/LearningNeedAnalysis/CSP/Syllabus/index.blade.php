@extends('layouts.app', ['pagedirectory' => [
'CSP' =>'/learning-need-analysis/csp',
$csp->name => '',
'List Syllabus' => '' ]])


@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">

        <div class="card shadow rounded">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Syllabus {{ $csp->name }}</h3>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="example">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">
                                    Code</th>
                                <th scope="col" class="sort" data-sort="name">
                                    Name</th>
                                <th scope="col" class="sort" data-sort="name">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($csp->syllabuses as $syllabus)
                                <tr>
                                    <td>
                                        {{ $syllabus->syllabus_code }}
                                    </td>
                                    <td><a href="">
                                            {{ $syllabus->training_name }}</a></td>
                                    <td>
                                        @if ($syllabus->is_approved == 0 && $syllabus->is_active == 0)
                                            <span class="badge badge-pill badge-danger">Rejected</span>
                                        @endif
                                        @if ($syllabus->is_approved == 0 && $syllabus->is_active == 1)
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        @endif

                                        @if ($syllabus->is_approved == 1 && $syllabus->is_active == 1)
                                            <span class="badge badge-pill badge-success">Active</span>
                                        @endif

                                        @if ($syllabus->is_approved == 1 && $syllabus->is_active == 0)
                                            <span class="badge badge-pill badge-muted">Deactive</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                {{-- <div class="card-footer py-4 text-right">
                                                {{ $permissions->links() }}
                                            </div> --}}
            </div>
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
