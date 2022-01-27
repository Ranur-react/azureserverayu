@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Content Management'
=>'/learning-operation/content-management', $elearning->name => '']])

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
                                    <a
                                        href="{{ route('learning-operation.content-management.test.show', $elearning->id) }}">
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
                <div class="card">
                    <div class="card-header">
                        <h3>Test - {{ $elearning->name }}</h3>
                    </div>
                    <div class="card-body pt-3">
                        <form action="{{ route('learning-operation.content-management.test.store', $elearning->id) }}"
                            method="POST" class="mb-4">
                            @csrf
                            <div class="pertanyaan-section">
                                @if ($elearning->test)
                                    @foreach ($elearning->test as $key_soal => $test)
                                        @php
                                            $name = uniqid();
                                        @endphp
                                        <div class="mb-4 pertanyaan">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h4>Pertanyaan</h4>
                                                <button type="button" class="btn btn-sm btn-danger btn-delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control pertanyaan-name"
                                                    id="{{ $name }}" autocomplete="off" placeholder="Pertanyaan"
                                                    name="pertanyaan[soal][{{ $name }}]" required
                                                    value="{{ $test->pertanyaan }}">
                                            </div>
                                            <div class="jawaban-section">
                                                <div class="add-choice-section">
                                                    <h5 class="text-xs">Pilih jawaban benar</h5>
                                                    @foreach ($test->test_option as $key_jawaban => $test_option)
                                                        @php
                                                            $uniqid = uniqid();
                                                        @endphp
                                                        <div class="custom-control custom-radio mb-3 align-items-center">
                                                            <input type="radio" id="{{ $uniqid }}"
                                                                name="pertanyaan[is_correct][{{ $name }}][]"
                                                                value="{{ $uniqid }}" class="custom-control-input"
                                                                {{ $test_option->id == $test->option_correct_id ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="{{ $uniqid }}"
                                                                style="display: block !important;"></label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="pertanyaan[jawaban][{{ $name }}][{{ $uniqid }}]"
                                                                placeholder="Opsi 1" required
                                                                value="{{ $test_option->option }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <span class="d-flex mb-3">
                                                    <i class="fas fa-plus-circle text-primary text-lg add-choice mr-2"></i>
                                                    <h4 class="font-weight-normal">Tambah opsi</h4>
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-block add-question mb-4">
                                Add Pertanyaan
                            </button>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success submit-save">
                                    Save
                                </button>
                            </div>
                        </form>
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
        $("body").on("click", ".add-choice", function() {
            var name = $(this).closest(".pertanyaan").find('.pertanyaan-name').attr('id');

            console.log(name);

            var uuid = Math.random().toString(16).slice(2)

            $(this).closest(".jawaban-section").find(".add-choice-section").append(`
                <div class="custom-control custom-radio mb-3 align-items-center">
                    <input type="radio" id="` + uuid + `" name="pertanyaan[is_correct][` + name + `][]" value="` +
                uuid + `" class="custom-control-input">
                    <label class="custom-control-label" for="` + uuid + `" style="display: block !important;"></label>
                    <input type="text" class="form-control form-control-sm" name="pertanyaan[jawaban][` + name +
                `][` + uuid + `]" placeholder="Opsi 2" required>
                </div>
            `)
        });

        var countPertanyaan = 1;

        $(".add-question").on("click", function() {
            var name = Math.random().toString(16).slice(8)

            console.log(name)

            var uuid1 = Math.random().toString(16).slice(2)
            var uuid2 = Math.random().toString(16).slice(2)
            $(".pertanyaan-section").append(`
                <div class="mb-4 pertanyaan">
                    <div class="d-flex justify-content-between mb-3">
                        <h4>Pertanyaan</h4>
                        <button type="button" class="btn btn-sm btn-danger btn-delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control pertanyaan-name" id="` + name +
                `" autocomplete="off" placeholder="Pertanyaan" name="pertanyaan[soal][` + name + `]" required>
                    </div>
                    <div class="jawaban-section">
                        <div class="add-choice-section">
                            <h5 class="text-xs">Pilih jawaban benar</h5>
                            <div class="custom-control custom-radio mb-3 align-items-center">
                                <input type="radio" id="` + uuid1 + `" name="pertanyaan[is_correct][` + name +
                `][]" value="` +
                uuid1 + `" class="custom-control-input" required>
                                <label class="custom-control-label" for="` + uuid1 + `"
                                    style="display: block !important;"></label>
                                <input type="text" class="form-control form-control-sm" name="pertanyaan[jawaban][` +
                name + `][` + uuid1 + `]"
                                    placeholder="Opsi 1" required>
                            </div>
                            <div class="custom-control custom-radio mb-3 align-items-center">
                                <input type="radio" id="` + uuid2 + `" name="pertanyaan[is_correct][` + name +
                `][]" value="` +
                uuid2 + `" class="custom-control-input">
                                <label class="custom-control-label" for="` + uuid2 + `"
                                    style="display: block !important;"></label>
                                <input type="text" class="form-control form-control-sm" name="pertanyaan[jawaban][` +
                name + `][` + uuid2 + `]"
                                    placeholder="Opsi 2" required>
                            </div>
                        </div>
                        <span class="d-flex mb-3">
                            <i class="fas fa-plus-circle text-primary text-lg add-choice mr-2"></i>
                            <h4 class="font-weight-normal">Tambah opsi</h4>
                        </span>
                    </div>
                </div>
            `)
            countPertanyaan++;
        });


        $("body").on("click", '.btn-delete', function(e) {
            $(e.target).closest(".pertanyaan").remove();
            countPertanyaan--;
        });
    </script>

    <script type="text/javascript">
        $('.submit-save').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to create this test?`,
                    text: "Recheck the questions above.",
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
