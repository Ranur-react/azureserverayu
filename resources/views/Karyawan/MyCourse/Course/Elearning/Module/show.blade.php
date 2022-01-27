@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'My Course'
=>'/my-course', $elearning->name =>
'/elearning/'.$elearning->id, $module->name =>'' ]])

@section('content')
    @include('layouts.headers.auth')

    @php
    $type = 'video';
    @endphp

    <div class="container-fluid mt--9">
        <div class="row mb-4">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mb-0">{{ $elearning->name }}</h3>
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
                        // echo $elearning;
                        // var_dump($text);
                    @endphp
                    <div class="card-header">
                        <h3>{{ $module->name }}</h3>

                    </div>
                    <div class="card-body">
                        @if ($type == 'video')
                            <div class="embed-responsive embed-responsive-16by9 mb-5">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hjJWUjLC4Jc"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        @endif

                        @if ($module->text)
                            <div class="mb-4">
                                <h4 class="mb-3">{{ $module->text->name }}</h4>
                                <div class="border rounded p-4 text-sm" id="text-container">
                                    <div class="d-none" id="text-content">
                                        {{ $module->text->text }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($type == 'file')
                            <div>
                                <h4 class="mb-3">Files Attachment</h4>
                                <div class="border rounded p-4">

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="text-muted text-uppercase mb-0">Table of Content</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="{{ route('elearning.show', $elearning->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Introduction</p>
                            </a>
                            <hr class="my-3">
                            <a href="{{ route('elearning.pretest.show', $elearning->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Pre Test</p>
                            </a>
                            <hr class="my-3">
                        </div>
                        @foreach ($elearning->modules as $key => $elearningmodule)
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p
                                        class="text-xxs text-uppercase font-weight-normal text-muted mb-1 d-inline-block mb-0">
                                        Section
                                        {{ $key + 1 }}
                                    </p>
                                </div>
                                <a
                                    href="{{ route('elearning.showModule', [$elearning->id, $elearningmodule->section]) }}">
                                    <p class="text-sm font-weight-bold mb-0">{{ $elearningmodule->name }}</p>
                                </a>
                                <hr class="my-3">
                            </div>
                        @endforeach
                        <div>
                            <a href="{{ route('elearning.posttest.show', $elearning->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Post Test</p>
                            </a>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var text = $("#text-content").text()
        $("#text-container").append(text);
    </script>
@endpush
