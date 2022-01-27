@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Deivery Plan'
=>'']])

@section('content')

    @include('layouts.headers.auth')

    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold mb-3">Delivery Plan</h1>
                <div class="card shadow-lg mb-5 mt-4">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Daftar Kelas</h3>
                            <div>
                                <button data-toggle="modal" data-target="#addClass" class="btn btn-primary">
                                    Add Class
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-1">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="tableKelas">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="nama">Nama Kelas
                                        </th>
                                        <th scope="col" class="sort" data-sort="level">
                                            Level
                                        </th>
                                        <th scope="col" class="sort" data-sort="start-date">
                                            Start Date
                                        </th>
                                        <th scope="col" class="sort" data-sort="end-date">
                                            End Date
                                        </th>
                                        <th scope="col" class="sort" data-sort="vendor">
                                            Vendor
                                        </th>
                                        <th class="text-right" scope="col" class="sort">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($trainingclasses as $trainingclass)
                                        <tr>
                                            <td class="text-wrap"><a
                                                    href="{{ route('learning-operation.delivery-plan.show', $trainingclass->id) }}">{{ $trainingclass->name }}</a>
                                            </td>
                                            <td>{{ $trainingclass->level }}</td>
                                            <td>{{ \Carbon\Carbon::parse($trainingclass->start_date)->format('d M Y') }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($trainingclass->end_date)->format('d M Y') }}
                                            </td>
                                            <td>Telkomsel</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item"
                                                            href="{{ route('learning-operation.delivery-plan.edit', $trainingclass->id) }}">Edit</a>
                                                        <form
                                                            action="{{ route('learning-operation.delivery-plan.destroy', $trainingclass->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit delete-class" class="dropdown-item "
                                                                data-method="delete">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Class -->
    <div class="modal fade" id="addClass" tabindex="-1" role="dialog" aria-labelledby="addClasslLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClassLabel">Add Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="{{ route('learning-operation.delivery-plan.store') }}">
                    {{ csrf_field() }}
                    <div class="modal-body pt-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-syllabus">Syllabus
                                        Kurikulum</label>
                                    <select class="form-control" name="syllabus" id="input-syllabus">
                                        <option value="">Select Syllabus...</option>
                                        <option value="">Marketing Management</option>
                                        <option value="">Marketing Strategy</option>
                                        <option value="">Marketing Analaytics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-name">Nama Kelas</label>
                                    <input type="text" name="name" id="input-name" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-description">Deskripsi</label>
                                    <textarea class="form-control" id="input-description" name="description" rows="5"
                                        style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-level">Level Kompetensi</label>
                                    <select class="form-control" name="level" id="input-level">
                                        <option value="">Select Level Kompetensi...</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Intermediate">Intermediate </option>
                                        <option value="Advance">Advance</option>
                                        <option value="Master">Master</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-start-date">Start Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
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
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input
                                            class="form-control bg-white {{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                            name="end_date" id="input-end-date" placeholder="Select end date" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-name">Nama PIC</label>
                                    <input type="text" class="form-control" id="input-pic-name" name="pic_name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-vendor">Nama Vendor</label>
                                    <input type="text" class="form-control" id="input-vendor" name="vendor">
                                </div>
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
        $('#tableKelas').DataTable({
            "pagingType": "numbers"
        });
    </script>

    <script type="text/javascript">
        $('.delete-class').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this video conference?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
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
