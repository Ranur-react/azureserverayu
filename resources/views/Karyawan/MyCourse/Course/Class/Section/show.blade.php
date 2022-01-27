@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'My Course'
=>'/my-course', $trainingclass->name => '/class/'.$trainingclass->id, $section->name =>'' ]])

@section('content')
    @include('layouts.headers.auth')

    @php
    $type = 'vidcon';
    @endphp

    <div class="container-fluid mt--9">
        <div class="row mb-4">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mb-0">{{ $trainingclass->name }}</h3>
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
                        <h3 class="mb-3">{{ $section->name }}</h3>
                        <span class="text-sm mr-4">
                            <i class="fas fa-calendar-alt mr-2 text-muted"></i>
                            {{ \Carbon\Carbon::parse($section->date_time)->format('d F Y') }}
                        </span>
                        <span class="text-sm">
                            <i class="fas fa-clock mr-2 text-muted"></i>
                            {{ \Carbon\Carbon::parse($section->date_time)->format('H:i') }}
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($section->video_conference)
                            <div class="mb-4">
                                <h4 class="mb-3">Video Conference</h4>
                                <div class="border rounded p-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            @if ($section->video_conference->platform == 'Zoom')
                                                <img src="{{ asset('telkomsel') }}/img/zoom-logo.png"
                                                    class="img-fluid mr-3" style="height: 2.25rem">
                                            @endif
                                            @if ($section->video_conference->platform == 'Google Meet')
                                                <img src="{{ asset('telkomsel') }}/img/google-meet-logo.png"
                                                    class="img-fluid mr-3" style="height: 2.25rem">
                                            @endif
                                            @if ($section->video_conference->platform == 'Teams')
                                                <img src="{{ asset('telkomsel') }}/img/teams-logo.png"
                                                    class="img-fluid mr-3" style="height: 2.25rem">
                                            @endif
                                            @if ($section->video_conference->platform == 'CloudX')
                                                <img src="{{ asset('telkomsel') }}/img/cloudx-logo.png"
                                                    class="img-fluid mr-3" style="height: 2.25rem">
                                            @endif
                                            <h4 class="mb-0">{{ $section->video_conference->name }}</h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ $section->video_conference->url }}" target="_blank">
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
                            <div class="embed-responsive embed-responsive-16by9 mb-5">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hjJWUjLC4Jc"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        @endif

                        @if ($section->text)
                            <div class="mb-4">
                                <h4 class="mb-3">{{ $section->text->name }}</h4>
                                <div class="border rounded p-4 text-sm" id="text-container">
                                    <div class="d-none" id="text-content">
                                        {{ $section->text->text }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div>
                            <h4 class="mb-3">Files Attachment</h4>
                            <div class="border rounded p-4">

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
                            <a href="{{ route('class.show', $trainingclass->id) }}">
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
                                        {{ $key + 1 }}
                                    </p>
                                </div>
                                <a href="{{ route('class.showSession', [$trainingclass->id, $classsection->section]) }}">
                                    <p class="text-sm font-weight-bold mb-0">{{ $classsection->name }}</p>
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

@push('js')
    <script>
        var text = $("#text-content").text()
        $("#text-container").append(text);
    </script>
    <script>
        function copyLink() {
            var copyText = document.getElementById('copy')
            console.log(copyText)
            copyText.select()
            copyText.setSelectionRange(0, 99999)
            navigator.clipboard.writeText(copyText.value)

            alert("Copied Text: " + copyText.value)
        }
    </script>
@endpush
