@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Content Management'
=>'/learning-operation/content-management', $elearning->name =>
'/learning-operation/content-management/'.$elearning->id, $module->name
=>'/learning-operation/content-management/'.$elearning->id.'/module/'.$module->section, 'Edit' => '' ]])

@section('content')
    @include('layouts.headers.auth')

    @php
    $type = 'add_module';
    @endphp

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
                                        action="{{ route('learning-operation.content-management.module.destroy', [$elearning->id, $module->section]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mr-2 delete-module">
                                            <i class="fas fa-trash mr-1"></i>Hapus
                                        </button>
                                    </form>
                                    <a
                                        href="{{ route('learning-operation.content-management.module.show', [$elearning->id, $module->section]) }}">
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
                    <div class="card-header pb-0">
                        @if ($module->is_active)
                            <form method="POST" id="change-state"
                                action="{{ route('learning-operation.content-management.module.deactivate', [$elearning->id, $module->section]) }}">
                            @else
                                <form method="POST" id="change-state"
                                    action="{{ route('learning-operation.content-management.module.activate', [$elearning->id, $module->section]) }}">
                        @endif
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <div class="d-flex justify-content-between">
                                <h3>{{ $module->name }}</h3>
                                <div class="d-flex justify-content-end">
                                    <label class="form-control-label mr-2"
                                        id="toggle-course-label">{{ $module->is_active ? 'Active' : 'Deactive' }}</label>
                                    <label class="custom-toggle">
                                        <input type="checkbox" {{ $module->is_active ? 'checked' : '' }}>
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
                            <div class="row mb-3">
                                <div class="col">
                                    <form method="POST"
                                        action="{{ route('learning-operation.content-management.module.update', [$elearning->id, $module->section]) }}">
                                        @method('PUT')
                                        {{ csrf_field() }}
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-pt-name">Nama Modul</label>
                                            <input type="text" name="name" id="input-module-name" class="form-control"
                                                value="{{ $module->name }}">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success mt-3">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            @if ($type == 'video')
                                <div class="mb-4">
                                    <h4 class="mb-3">Description</h4>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/hjJWUjLC4Jc" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endif

                            @if ($text)
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-3 align-items-center">
                                        <h4 class="mb-0">{{ $text->name }}</h4>
                                        <div class="d-flex">
                                            <form
                                                action="{{ route('learning-operation.content-management.module.text.destroy', [$elearning->id, $module->section, $text->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger mr-2 delete-text">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <button data-toggle="modal" data-target="#edit-text"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="border rounded p-4 text-sm" id="text-container">
                                        {!! $text->text !!}
                                    </div>
                                </div>
                            @endif
                            @if ($type == 'file')
                                <div>
                                    <h4 class="mb-3">Download Files</h4>
                                    <div class="border rounded p-4">

                                    </div>
                                </div>
                            @endif

                            <div class="row mb-4">
                                @if (!$text)
                                    <div class="col pr-2">
                                        <button data-toggle="modal" data-target="#add-text"
                                            class="btn btn-block btn-outline-primary">
                                            <i class="fas fa-pencil-alt mr-1"></i>
                                            Text
                                        </button>
                                    </div>
                                @endif
                                <div class="col px-2">
                                    <button data-toggle="modal" data-target="#file"
                                        class="btn btn-block btn-outline-primary">
                                        <i class="fas fa-file-alt mr-2"></i>
                                        File
                                    </button>
                                </div>
                                {{-- @if (!$video) --}}
                                <div class="col px-2">
                                    <button data-toggle="modal" data-target="#video"
                                        class="btn btn-block btn-outline-primary">
                                        <i class="fas fa-file-video mr-2"></i>
                                        Video
                                    </button>
                                </div>
                                {{-- @endif --}}
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-3">Save</button>
                            </div>
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

    {{-- Modal Add Text --}}
    <div class="modal fade" id="add-text" tabindex="-1" role="dialog" aria-labelledby="new-event-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Text</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post"
                    action="{{ route('learning-operation.content-management.module.text.store', [$elearning->id, $module->id]) }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-conference-title">Text Title</label>
                                    <input type="text" name="name" id="input-conference-title" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="form-group mb-3">
                                    <div id="add-text-container">

                                    </div>
                                    <input type="hidden" id="input-text" name="text_content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="btn-add-text">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Edit Text --}}
    <div class="modal fade" id="edit-text" tabindex="-1" role="dialog" aria-labelledby="new-event-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Text</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                @if ($text)
                    <form method="post"
                        action="{{ route('learning-operation.content-management.module.text.update', [$elearning->id, $module->section, $text->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-conference-title">Text Title</label>
                                        <input type="text" name="name" id="input-conference-title" class="form-control"
                                            value="{{ $text->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <div id="edit-text-container">
                                            {!! $text->text !!}
                                        </div>
                                        <input type="hidden" id="update-text" name="text_content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="btn-edit-text">Edit</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>

    {{-- Modal File --}}
    <div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>File Attachment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple
                            data-dropzone-url="http://">
                            <div class="fallback">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="dropzoneMultipleUpload" multiple>
                                    <label class="custom-file-label" for="dropzoneMultipleUpload">Choose
                                        file</label>
                                </div>
                            </div>
                            <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar">
                                                <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail>
                                            </div>
                                        </div>
                                        <div class="col ml--3">
                                            <h4 class="mb-1" data-dz-name>...</h4>
                                            <p class="small text-muted mb-0" data-dz-size>...</p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-dz-remove>
                                                        Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Add</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Video --}}
    <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="new-event-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Video</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <div class="dropzone dropzone-single" data-toggle="dropzone" data-dropzone-url="http://">
                            <div class="fallback">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="dropzoneBasicUpload">
                                    <label class="custom-file-label" for="dropzoneBasicUpload">Choose
                                        file</label>
                                </div>
                            </div>

                            <div class="dz-preview dz-preview-single">
                                <div class="dz-preview-cover">
                                    <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Add</button>
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

    <script>
        var quillAdd = new Quill('#add-text-container', {
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                ]
            },
            placeholder: '...',
            theme: 'snow'
        });

        var quillEdit = new Quill('#edit-text-container', {
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                ]
            },
            placeholder: '...',
            theme: 'snow'
        });

        $("#btn-add-text").on('click', function() {
            $("#input-text").val(quillAdd.root.innerHTML);
        })

        $("#btn-edit-text").on('click', function() {
            $("#update-text").val(quillEdit.container.firstChild.innerHTML);
        })
    </script>

    <script type="text/javascript">
        $('.delete-module').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this module?`,
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

    <script type="text/javascript">
        $('.delete-text').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this text?`,
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
