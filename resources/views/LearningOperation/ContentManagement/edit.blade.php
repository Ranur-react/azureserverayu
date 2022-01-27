@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Content Management'
=>'/learning-operation/content-management', $elearning->name =>
'/learning-operation/content-management/'.$elearning->id, 'Edit' =>'' ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--9">
        <div class="row mb-4">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h3 class="mb-0">{{ $elearning->name }}</h3>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="d-flex justify-content-end">
                                    <form
                                        action="{{ route('learning-operation.content-management.destroy', $elearning->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mr-2 delete-elearning">
                                            <i class="fas fa-trash mr-1"></i>Hapus
                                        </button>
                                    </form>
                                    <a href="{{ route('learning-operation.content-management.show', $elearning->id) }}">
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
                        @if ($elearning->is_active)
                            <form method="POST" id="change-state"
                                action="{{ route('learning-operation.content-management.deactivate', $elearning->id) }}">
                            @else
                                <form method="POST" id="change-state"
                                    action="{{ route('learning-operation.content-management.activate', $elearning->id) }}">
                        @endif
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <div class="d-flex justify-content-between">
                                <h3>Introduction</h3>
                                <div class="d-flex justify-content-end">
                                    <label class="form-control-label mr-2"
                                        id="toggle-course-label">{{ $elearning->is_active ? 'Active' : 'Deactive' }}</label>
                                    <label class="custom-toggle">
                                        <input type="checkbox" {{ $elearning->is_active ? 'checked' : '' }}>
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
                                action="{{ route('learning-operation.content-management.update', $elearning->id) }}">
                                @method('PUT')
                                {{ csrf_field() }}
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
                                            <label class="form-control-label" for="input-name">Course Name</label>
                                            <input type="text" class="form-control" id="input-name" name="name"
                                                value="{{ $elearning->name }}">
                                            {{-- @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-description">Description</label>
                                            <textarea class="form-control" id="input-description" name="description"
                                                rows="15" style="resize: none;">{{ $elearning->description }}</textarea>
                                            {{-- @error('description')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror --}}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-category">Kategori
                                                Training</label>
                                            <select class="form-control" id="input-category" name="category">
                                                <option value="">Select Kategori Training...</option>
                                                <option value="General Training"
                                                    {{ $elearning->category == 'General Training' ? 'selected' : '' }}>
                                                    General Training
                                                </option>
                                                <option value="Critical Capability"
                                                    {{ $elearning->category == 'Critical Capability' ? 'selected' : '' }}>
                                                    Critical Capability
                                                </option>
                                                <option value="Regular Capability"
                                                    {{ $elearning->category == 'Regular Capability' ? 'selected' : '' }}>
                                                    Regular Capability
                                                </option>
                                            </select>
                                            {{-- @error('category')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-pic-name">Nama PIC</label>
                                            <input type="text" class="form-control" id="input-pic-name" name="pic_name"
                                                value="{{ $elearning->pic_name }}">
                                            {{-- @error('pic_name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror --}}
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
                            <a href="{{ route('learning-operation.content-management.edit', $elearning->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Introduction</p>
                            </a>
                            <hr class="my-3">
                            <a href="{{ route('learning-operation.content-management.test.edit', $elearning->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Test</p>
                            </a>
                            <hr class="my-3">
                        </div>
                        @foreach ($elearning->modules as $key => $elearningmodule)
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p
                                        class="text-xxs text-uppercase font-weight-normal text-muted mb-1 d-inline-block mb-0">
                                        Section
                                        {{ $key + 1 }}</p>
                                    @if ($elearningmodule->is_active)
                                        <span class="badge badge-pill badge-success text-3xs">Active</span>
                                    @else
                                        <span class="badge badge-pill badge-danger text-3xs">Deactive</span>
                                    @endif
                                </div>
                                <a
                                    href="{{ route('learning-operation.content-management.module.edit', [$elearning->id, $elearningmodule->section]) }}">
                                    <p class="text-sm font-weight-bold mb-0">{{ $elearningmodule->name }}</p>
                                </a>
                                <hr class="my-3">
                            </div>
                        @endforeach
                        <div class="text-center">
                            <button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#add-module">
                                Add Module
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Module --}}
    <div class="modal fade" id="add-module" tabindex="-1" role="dialog" aria-labelledby="add-module-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Add New Module</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post"
                    action="{{ route('learning-operation.content-management.module.store', $elearning->id) }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-name">Module Name</label>
                                    <input type="text" class="form-control" id="input-name" name="name">
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
        $('.delete-elearning').click(function(event) {
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
@endpush
