@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Delivery Plan'
=>'/learning-operation/delivery-plan', $trainingclass->name =>
'/learning-operation/delivery-plan/'.$trainingclass->id, $section->name
=>'/learning-operation/delivery-plan/'.$trainingclass->id.'/section/'.$section->section, 'Edit' => '' ]])

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
                                <h3 class="mb-0">{{ $trainingclass->name }}</h3>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="d-flex justify-content-end">
                                    <form
                                        action="{{ route('learning-operation.delivery-plan.section.destroy', [$trainingclass->id, $section->section]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mr-2 delete-section">
                                            <i class="fas fa-trash mr-1"></i>Hapus
                                        </button>
                                    </form>
                                    <a
                                        href="{{ route('learning-operation.delivery-plan.section.show', [$trainingclass->id, $section->section]) }}">
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
                    @php
                    @endphp
                    <div class="card-header pb-0">
                        @if ($section->is_active)
                            <form method="POST" id="change-state"
                                action="{{ route('learning-operation.delivery-plan.section.deactivate', [$trainingclass->id, $section->section]) }}">
                            @else
                                <form method="POST" id="change-state"
                                    action="{{ route('learning-operation.delivery-plan.section.activate', [$trainingclass->id, $section->section]) }}">
                        @endif
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <div class="d-flex justify-content-between">
                                <h3>{{ $section->name }}</h3>
                                <div class="d-flex justify-content-end">
                                    <label class="form-control-label mr-2"
                                        id="toggle-course-label">{{ $section->is_active ? 'Active' : 'Deactive' }}</label>
                                    <label class="custom-toggle">
                                        <input type="checkbox" {{ $section->is_active ? 'checked' : '' }}>
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
                                        action="{{ route('learning-operation.delivery-plan.section.update', [$trainingclass->id, $section->section]) }}">
                                        @method('PUT')
                                        {{ csrf_field() }}
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-pt-name">Nama Modul</label>
                                            <input type="text" name="name" id="input-module-name" class="form-control"
                                                value="{{ $section->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-end-date">End Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input
                                                    class="form-control bg-white {{ $errors->has('date_time') ? ' is-invalid' : '' }}"
                                                    name="date_time" id="edit-date-time" placeholder="Select date time"
                                                    type="text" value="{{ $section->date_time }}">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success mt-3">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            @if ($vidcon)
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-3 align-items-center">
                                        <h4 class="mb-0">Video Conference</h4>
                                        <div class="d-flex">
                                            <form
                                                action="{{ route('learning-operation.delivery-plan.section.video-conference.destroy', [$trainingclass->id, $section->section, $vidcon->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger mr-2 delete-vidcon">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <button data-toggle="modal" data-target="#edit-vidcon"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="border rounded p-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                @if ($vidcon->platform == 'Zoom')
                                                    <img src="{{ asset('telkomsel') }}/img/zoom-logo.png"
                                                        class="img-fluid mr-3" style="height: 2.25rem">
                                                @endif
                                                @if ($vidcon->platform == 'Google Meet')
                                                    <img src="{{ asset('telkomsel') }}/img/google-meet-logo.png"
                                                        class="img-fluid mr-3" style="height: 2.25rem">
                                                @endif
                                                @if ($vidcon->platform == 'Teams')
                                                    <img src="{{ asset('telkomsel') }}/img/teams-logo.png"
                                                        class="img-fluid mr-3" style="height: 2.25rem">
                                                @endif
                                                @if ($vidcon->platform == 'CloudX')
                                                    <img src="{{ asset('telkomsel') }}/img/cloudx-logo.png"
                                                        class="img-fluid mr-3" style="height: 2.25rem">
                                                @endif
                                                <h4 class="mb-0">{{ $vidcon->name }}</h4>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ $vidcon->url }}" target="_blank">
                                                    <button class="btn btn-sm btn-primary">
                                                        Join Meeting
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

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
                                                action="{{ route('learning-operation.delivery-plan.section.text.destroy', [$trainingclass->id, $section->section, $text->id]) }}"
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
                                @if (!$vidcon)
                                    <div class="col px-2">
                                        <button data-toggle="modal" data-target="#add-vidcon"
                                            class="btn btn-block btn-outline-primary">
                                            <i class="fas fa-video mr-2"></i>
                                            Vidcon
                                        </button>
                                    </div>
                                @endif
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
                            <a href="{{ route('learning-operation.delivery-plan.edit', $trainingclass->id) }}">
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
                    action="{{ route('learning-operation.delivery-plan.section.text.store', [$trainingclass->id, $section->id]) }}">
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
                        action="{{ route('learning-operation.delivery-plan.section.text.update', [$trainingclass->id, $section->section, $text->id]) }}">
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
                <form
                    action="{{ route('learning-operation.delivery-plan.section.file.store', [$trainingclass->id, $section->id]) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- Modal Add Vidcon --}}
    <div class="modal fade" id="add-vidcon" tabindex="-1" role="dialog" aria-labelledby="new-event-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Video Conference</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post"
                    action="{{ route('learning-operation.delivery-plan.section.video-conference.store', [$trainingclass->id, $section->id]) }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-conference-title">Conference Title</label>
                                    <input type="text" name="name" id="input-conference-title" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="form-control-label" for="input-conference-url">Conference URL</label>
                                <div class="row">
                                    <div class="col-lg-3 pr-2">
                                        <select class="form-control" data-toggle="select" name="platform">
                                            <option>Select platform</option>
                                            <option value="Google Meet">Google Meet</option>
                                            <option value="CloudX">CloudX</option>
                                            <option value="Zoom">Zoom</option>
                                            <option value="Teams">Microsoft Teams</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-9 pl-2">
                                        <input type="text" name="url" id="input-conference-url" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Edit Vidcon --}}
    <div class="modal fade" id="edit-vidcon" tabindex="-1" role="dialog" aria-labelledby="new-event-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h4>Video Conference</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                @if ($vidcon)
                    <form method="post"
                        action="{{ route('learning-operation.delivery-plan.section.video-conference.update', [$trainingclass->id, $section->id, $vidcon->id]) }}">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-conference-title">Conference
                                            Title</label>
                                        <input type="text" name="name" id="input-conference-title" class="form-control"
                                            value="{{ $vidcon->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-control-label" for="input-conference-url">Conference URL</label>
                                    <div class="row">
                                        <div class="col-lg-3 pr-2">
                                            <select class="form-control" data-toggle="select" name="platform">
                                                <option>Select platform</option>
                                                <option value="Google Meet"
                                                    {{ $vidcon->platform == 'Google Meet' ? 'selected' : '' }}>Google
                                                    Meet</option>
                                                <option value="CloudX"
                                                    {{ $vidcon->platform == 'CloudX' ? 'selected' : '' }}>
                                                    CloudX
                                                </option>
                                                <option value="Zoom" {{ $vidcon->platform == 'Zoom' ? 'selected' : '' }}>
                                                    Zoom
                                                </option>
                                                <option value="Teams"
                                                    {{ $vidcon->platform == 'Teams' ? 'selected' : '' }}>
                                                    Microsoft
                                                    Teams</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-9 pl-2">
                                            <input type="text" name="url" id="input-conference-url" class="form-control"
                                                value="{{ $vidcon->url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                @endif
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
            $("#input-text").val(quillAdd.container.firstChild.innerHTML);
        })

        $("#btn-edit-text").on('click', function() {
            $("#update-text").val(quillEdit.container.firstChild.innerHTML);
        })
    </script>

    <script type="text/javascript">
        $('.delete-section').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this session?`,
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
        $('.delete-vidcon').click(function(event) {
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

    <script>
        var date_time = flatpickr("#input-date-time", {
            altInput: true,
            altFormat: "j F Y , H:i",
            dateFormat: "Y-m-d H:i:s",
            minDate: new Date(),
            enableTime: true,
            time_24hr: true
        });

        var edit_date_time = flatpickr("#edit-date-time", {
            altInput: true,
            altFormat: "j F Y , H:i",
            dateFormat: "Y-m-d H:i:s",
            minDate: "{{ $trainingclass->start_date }}",
            enableTime: true,
            time_24hr: true
        });
    </script>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        });

        $('#uploadFile').click(function() {
            myDropzone.processQueue();
        });
    </script>
@endpush
