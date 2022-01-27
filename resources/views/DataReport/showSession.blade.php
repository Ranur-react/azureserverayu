@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Data & Report'
=>'/data-report',$training->name =>
'/data-report/class/'.$training->id, 'Attendance' => '']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Daftar Attendance - {{ $session->name }}</h3>
                            <div>
                                <button data-toggle="modal" data-target="#importExcel" class="btn btn-success">
                                    Import Excel
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post"
                            action="{{ route('data-report.class.session.attendance', [$training->id, $session->id]) }}">
                            {{ csrf_field() }}
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="tableKaryawan">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="nik">NIK</th>
                                            <th scope="col" class="sort" data-sort="name">Nama
                                                Karyawan</th>
                                            <th scope="col" class="sort" data-sort="title">Title
                                            </th>
                                            <th scope="col" class="sort" data-sort="organization">
                                                Organization</th>
                                            <th class="text-center" scope="col" class="sort" data-sort="name">
                                                Attend?
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->nik }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td class="text-wrap">{{ $user->title }}</td>
                                                <td class="text-wrap">{{ $user->organization }}</td>
                                                <td class="text-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="enrollId{{ $user->enrollment_id }}"
                                                            value="{{ $user->enrollment_id }}" name="enrollattend_ids[]"
                                                            {{ in_array($user->enrollment_id, $attendances) ? 'checked' : '' }}>
                                                        <label class=" custom-control-label"
                                                            for="enrollId{{ $user->enrollment_id }}"></label>
                                                    </div>
                                                </td>
                                                <input type="hidden" value="{{ $user->enrollment_id }}"
                                                    name="enroll_ids[]">
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <input type="hidden" value="{{ $training->id }}" name="class_id">
                            <div class=" card-footer text-right pb-0 pt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Import Excel -->
    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="importExcellLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importExcelLabel">Import Enrollment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post"
                    action="{{ route('data-report.class.session.attendance.import', [$training->id, $session->id]) }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body pt-1">
                        <div class="row">
                            <div class="col-12">
                                {{-- <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Select file</label>
                                </div> --}}
                                <div class="mb-3">
                                    <label for="formFile" class="form-control-label">Import Enrollment Excel</label>
                                    <input class="form-control" name="file" type="file" id="formFile">
                                </div>

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                @endif
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
        $('#tableKaryawan').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
