@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Delivery Plan'
=>'/learning-operation/delivery-plan', $trainingclass->name =>
'/learning-operation/delivery-plan/'.$trainingclass->id, 'Edit' =>'' ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--9">
        <div class="row mb-4">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h3 class="mb-0">{{ $trainingclass->name }}</h3>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="d-flex justify-content-end">
                                    <form
                                        action="{{ route('learning-operation.delivery-plan.destroy', $trainingclass->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mr-2 delete-class">
                                            <i class="fas fa-trash mr-1"></i>Hapus
                                        </button>
                                    </form>
                                    <a href="{{ route('learning-operation.delivery-plan.show', $trainingclass->id) }}">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="far fa-eye mr-1"></i>
                                            View Mode
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-9">
                <div class="card shadow-sm">
                    <div class="card-header">
                        @if ($trainingclass->is_active)
                            <form method="POST" id="change-state"
                                action="{{ route('learning-operation.delivery-plan.deactivate', $trainingclass->id) }}">
                            @else
                                <form method="POST" id="change-state"
                                    action="{{ route('learning-operation.delivery-plan.activate', $trainingclass->id) }}">
                        @endif
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <div class="d-flex justify-content-between">
                                <h3>Introduction</h3>
                                <div class="d-flex justify-content-end">
                                    <label class="form-control-label mr-2"
                                        id="toggle-course-label">{{ $trainingclass->is_active ? 'Active' : 'Deactive' }}</label>
                                    <label class="custom-toggle">
                                        <input type="checkbox" {{ $trainingclass->is_active ? 'checked' : '' }}>
                                        <span class="custom-toggle-slider rounded-circle" id="toggle-course"
                                            data-label="Active"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="card-body pt-3">
                        <div class="mb-4">
                            <form method="POST"
                                action="{{ route('learning-operation.delivery-plan.update', $trainingclass->id) }}">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-syllabus">Syllabus
                                                Kurikulum</label>
                                            <select class="form-control" name="syllabus" id="input-syllabus">
                                                <option selected disabled>Select Syllabus...</option>
                                                <option value="">Marketing Management</option>
                                                <option value="">Marketing Strategy</option>
                                                <option value="">Marketing Analaytics</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-name">Class Name</label>
                                            <input type="text" class="form-control" id="input-name" name="name"
                                                value="{{ $trainingclass->name }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-description">Description</label>
                                            <textarea class="form-control" id="input-description" name="description"
                                                rows="15"
                                                style="resize: none;">{{ $trainingclass->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-level">Level Kompetensi</label>
                                            <select class="form-control" name="level" id="input-level">
                                                <option selected disabled>Select Level Kompetensi...</option>

                                                <option value="Basic"
                                                    {{ $trainingclass->level == 'Basic' ? 'selected' : '' }}>
                                                    Basic
                                                </option>
                                                <option value="Intermediate"
                                                    {{ $trainingclass->level == 'Intermediate' ? 'selected' : '' }}>
                                                    Intermediate
                                                </option>
                                                <option value="Advance"
                                                    {{ $trainingclass->level == 'Advance' ? 'selected' : '' }}>
                                                    Advance
                                                </option>

                                                <option value="Master"
                                                    {{ $trainingclass->level == 'Master' ? 'selected' : '' }}>
                                                    Master
                                                </option>
                                            </select>
                                        </div>
                                    </div>
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
                                                    type="text" required value="{{ $trainingclass->start_date }}">
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
                                                    type="text" required value="{{ $trainingclass->end_date }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-pic-name">Nama PIC</label>
                                            <input type="text" class="form-control" id="input-pic-name" name="pic_name"
                                                value="{{ $trainingclass->pic_name }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-vendor">Nama Vendor</label>
                                            <input type="text" class="form-control" id="input-vendor" name="vendor">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-3">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-header">
                        <h5 class="text-muted text-uppercase mb-0">Table of Content</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="{{ route('learning-operation.delivery-plan.show', $trainingclass->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Introduction</p>
                            </a>
                            <hr class="my-3">
                        </div>
                        @foreach ($trainingclass->sections as $key => $classsection)
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p
                                        class="text-xxs text-uppercase font-weight-normal text-muted mb-1 d-inline-block mb-0">
                                        Section
                                        {{ $key + 1 }}</p>
                                    @if ($classsection->is_active)
                                        <span class="badge badge-pill badge-success text-3xs">Active</span>
                                    @else
                                        <span class="badge badge-pill badge-danger text-3xs">Deactive</span>
                                    @endif
                                </div>
                                <a
                                    href="{{ route('learning-operation.delivery-plan.section.edit', [$trainingclass->id, $classsection->section]) }}">
                                    <p class="text-sm font-weight-bold mb-0">{{ $classsection->name }}</p>
                                </a>
                                <hr class="my-3">
                            </div>
                        @endforeach
                        <div class="text-center">
                            <button class="btn btn-outline-primary btn-block" data-toggle="modal"
                                data-target="#add-section">
                                Add Section
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Section --}}
    <div class="modal fade" id="add-section" tabindex="-1" role="dialog" aria-labelledby="add-section-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Add New Section</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post"
                    action="{{ route('learning-operation.delivery-plan.section.store', $trainingclass->id) }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-name">Section Name</label>
                                    <input type="text" class="form-control" id="input-name" name="name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-delivery-method">
                                        Delivery Method
                                    </label>
                                    <select class="form-control" name="delivery_method" id="input-delivery-method">
                                        <option value="">Select Delivery Method...</option>
                                        <option value="Instructor Led Training">Instructor Led Training</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Sharing Session">Sharing Session</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-end-date">End Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input
                                            class="form-control bg-white {{ $errors->has('date_time') ? ' is-invalid' : '' }}"
                                            name="date_time" id="input-date-time" placeholder="Select date time"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
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
        $("#toggle-course").click(function() {
            $("#change-state").submit();
        })
    </script>

    <script type="text/javascript">
        $('.delete-class').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this class?`,
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
        var date_time = flatpickr("#input-date-time", {
            altInput: true,
            altFormat: "j F Y , H:i",
            dateFormat: "Y-m-d H:i:s",
            minDate: "{{ $trainingclass->start_date }}",
            enableTime: true,
            time_24hr: true
        });

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
            minDate: "{{ $trainingclass->start_date }}",
            onChange: function(selectedDates, dateStr, instance) {
                start_date.set('maxDate', dateStr)
            }
        });
    </script>
@endpush
