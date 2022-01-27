@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Content Management'
=>'/learning-operation/content-management', $elearning->name =>
'/learning-operation/content-management/'.$elearning->id, $module->name =>'' ]])

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
                            <div class="col-lg-7 col-12">
                                <h3 class="mb-0">{{ $elearning->name }}</h3>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="d-flex justify-content-end">
                                    <a
                                        href="{{ route('learning-operation.content-management.module.edit', [$elearning->id, $module->section]) }}">
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

                        @if ($type == 'feedback')
                            <div>
                                <h3 class="mb-3">Evaluation Form</h4>
                                    <div>
                                        @php
                                            $questions = ['Trainer membangun suasana kelas dengan interaksi yang kondusif bersama peserta.', 'Trainer menguasai materi beserta wawasan yang terkait dengan baik.', 'Trainer menggunakan pemilihan kata yang mudah dimengerti dalam menyampaikan materi', 'Trainer responsif terhadap kebutuhan (tanya jawab, use case, pendalaman materi, dll) peserta.', 'Kualitas materi pelatihan dapat menambah tingkat keterampilan dan pengetahuan Saya.', 'Materi mudah dipahami dan atau mudah diterapkan.', 'Materi program ini bermanfaat untuk Saya dalam hal pengembangan diri.', 'Materi program ini sesuai dengan harapan Saya.', "Materi sesuai dengan role (peran) Saya dalam pekerjaan. Jika jawabannya 'Sangat tidak dan Tidak setuju', maka materi yang tidak sesuai? alasannya?", 'Metodologi (role play, use case, action plan, dll) yang digunakan membantu Saya memahami materi yang disampaikan.', 'Berapa nilai yang mewakili tingkat kepuasan Anda dalam pelatihan ini.', 'Testimoni'];
                                        @endphp
                                        <ol class="mb-0 font-weight-normal text-sm">
                                            @foreach ($questions as $question)
                                                @php
                                                    $uid = uniqid();
                                                @endphp
                                                <li class="mb-4">
                                                    <div class="pl-2">
                                                        <p class="mb-0 font-weight-normal text-sm">
                                                            {{ $question }}
                                                        </p>
                                                        @if ($question == 'Testimoni')
                                                            <textarea class="form-control mt-2" style="resize: none"
                                                                rows="7"></textarea>
                                                        @else
                                                            <div>
                                                                <div class="form-check form-check-inline mt-2">
                                                                    <p class="mb-0 text-sm font-weight-normal mr-4">
                                                                        Sangat
                                                                        Tidak
                                                                        Setuju
                                                                    </p>
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio"
                                                                            id="pertanyaan-{{ $uid }}-choice-1"
                                                                            name="pertanyaan-{{ $uid }}"
                                                                            class="custom-control-input">
                                                                        <label class="custom-control-label"
                                                                            for="pertanyaan-{{ $uid }}-choice-1"></label>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio"
                                                                            id="pertanyaan-{{ $uid }}-choice-2"
                                                                            name="pertanyaan-{{ $uid }}"
                                                                            class="custom-control-input">
                                                                        <label class="custom-control-label"
                                                                            for="pertanyaan-{{ $uid }}-choice-2"></label>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio"
                                                                            id="pertanyaan-{{ $uid }}-choice-3"
                                                                            name="pertanyaan-{{ $uid }}"
                                                                            class="custom-control-input">
                                                                        <label class="custom-control-label"
                                                                            for="pertanyaan-{{ $uid }}-choice-3"></label>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio"
                                                                            id="pertanyaan-{{ $uid }}-choice-4"
                                                                            name="pertanyaan-{{ $uid }}"
                                                                            class="custom-control-input">
                                                                        <label class="custom-control-label"
                                                                            for="pertanyaan-{{ $uid }}-choice-4"></label>
                                                                    </div>
                                                                    <p class="mb-0 text-sm font-weight-normal mr-4">
                                                                        Sangat
                                                                        Setuju
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </li>
                                            @endforeach
                                            <li>
                                                <div class="pl-2">
                                                    <p class="mb-0 font-weight-normal text-sm">
                                                        Mana jawaban yang betul?
                                                    </p>
                                                    <div class="mt-2">
                                                        <div class="custom-control custom-radio mb-2">
                                                            <input type="radio" id="customRadio1" name="customRadio"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio1">
                                                                <p class="mb-0 text-sm font-weight-normal">Jawaban A</p>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio2">
                                                                <p class="mb-0 text-sm font-weight-normal">Jawaban B</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                                    </div>
                            </div>
                        @endif

                        @if ($text)
                            <div class="mb-4">
                                <h4 class="mb-3">{{ $text->name }}</h4>
                                <div class="border rounded p-4 text-sm" id="text-container">
                                    <div class="d-none" id="text-content">
                                        {{ $text->text }}
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

@push('js')
    <script>
        var text = $("#text-content").text()
        $("#text-container").append(text);
    </script>
@endpush
