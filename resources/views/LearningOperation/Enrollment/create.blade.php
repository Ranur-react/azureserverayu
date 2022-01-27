@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Enrollment'
=>'/learning-operation/enrollment', $training->name => '/learning-operation/enrollment/' . $type . '/'
.$training->id, 'Create' => '']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Daftar Enrollment - {{ $training->name }}</h3>
                            <div>
                                <button data-toggle="modal" data-target="#importExcel" class="btn btn-success">
                                    Import Excel
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('learning-operation.enrollment.store') }}">
                            {{ csrf_field() }}
                            @if ($type == 'elearning')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-start-date">Start Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input
                                                    class="form-control bg-white  {{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                                                    name="start_date" id="input-start-date" placeholder="Select start date"
                                                    type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-end-date">End Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input
                                                    class="form-control bg-white {{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                                    name="end_date" id="input-end-date" placeholder="Select end date"
                                                    type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                                                Enroll?
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
                                                            id="trainingEnroll{{ $user->id }}"
                                                            {{ in_array($user->id, $enrolled_ids) ? 'disabled checked' : '' }}
                                                            value="{{ $user->id }}" name="users[]">
                                                        <label class="custom-control-label"
                                                            for="trainingEnroll{{ $user->id }}"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <input type="hidden" id="training-id"
                                name="{{ $type == 'class' ? 'class_id' : 'elearning_id' }}"
                                value="{{ $training->id }}">
                            <div class=" card-footer text-right pb-0 pt-3">
                                <button type="submit" class="btn btn-primary">Enroll</button>
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

                <form method="post" action="{{ route('learning-operation.enrollment.import', [$type, $training->id]) }}"
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

    <script>
        var start_date = flatpickr("#input-start-date", {
            altInput: true,
            altFormat: "j F Y",
            dateFormat: "Y-m-d",
            minDate: new Date(),
            onChange: function(selectedDates, dateStr, instance) {
                end_date.set('minDate', dateStr)
            }
        });

        var end_date = flatpickr("#input-end-date", {
            altInput: true,
            altFormat: "j F Y",
            dateFormat: "Y-m-d",
            minDate: new Date(),
            onChange: function(selectedDates, dateStr, instance) {
                start_date.set('maxDate', dateStr)
            }
        });
    </script>
@endpush
