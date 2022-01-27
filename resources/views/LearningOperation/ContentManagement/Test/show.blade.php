@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Content Management'
=>'/learning-operation/content-management', $elearning->name => '']])

@section('content')
    @include('layouts.headers.auth')

    @php
    $type = 'vidcon';
    // echo $vidcon;
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
                                    <a
                                        href="{{ route('learning-operation.content-management.test.edit', $elearning->id) }}">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="far fa-edit mr-1"></i>
                                            Edit Mode
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
                        <h3>PreTest / PostTest</h3>
                    </div>
                    <div class="card-body">
                        <ol class="mb-5 font-weight-normal text-sm">
                            @foreach ($elearning->test as $key_test => $test)
                                <li class="mb-4">
                                    <div class="pl-2">
                                        <p class="mb-2 font-weight-normal text-sm">
                                            {{ $test->pertanyaan }}
                                        </p>
                                        <div class="mt-2">
                                            @foreach ($test->test_option as $key_jawaban => $test_option)
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" id="input-{{ $key_test }}-{{ $key_jawaban }}"
                                                        name="correct" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="input-{{ $key_test }}-{{ $key_jawaban }}">
                                                        <p class="mb-0 text-sm font-weight-normal">
                                                            {{ $test_option->option }}</p>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
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
                            <a href="{{ route('learning-operation.content-management.show', $elearning->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Introduction</p>
                            </a>
                            <hr class="my-3">
                            <a href="{{ route('learning-operation.content-management.test.show', $elearning->id) }}">
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
                                    href="{{ route('learning-operation.content-management.module.show', [$elearning->id, $elearningmodule->section]) }}">
                                    <p class="text-sm font-weight-bold mb-0">{{ $elearningmodule->name }}</p>
                                </a>
                                <hr class="my-3">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
