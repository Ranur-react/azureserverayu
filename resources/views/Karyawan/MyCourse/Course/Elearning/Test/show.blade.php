@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'My Course'
=>'/my-course', $elearning->name => '']])

@section('content')
    @include('layouts.headers.auth')

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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h3>{{ $type }}</h3>
                            </div>
                            @if (count($test_answers))
                                <div class="col-4">
                                    <p class="mb-0 text-right">
                                        Score: <span
                                            class="h4 ml-2 mb-0 bg-primary p-2 text-white rounded-sm">{{ $type == 'Pre Test' ? $score->score_pretest : $score->score_posttest }}/100</span>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (count($test_answers))
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
                                                    @if ($test_option->id == $test_answers[$key_test]->option_id && $test_answers[$key_test]->is_correct == false)
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-2 p-1 bg-light-danger rounded-sm">
                                                        @elseif ($test_option->id == $test_answers[$key_test]->option_id
                                                            && $test_answers[$key_test]->is_correct == true)
                                                            <div
                                                                class="d-flex align-items-center justify-content-between mb-2 p-1 bg-light-success rounded-sm">
                                                            @else
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-2 p-1">
                                                    @endif
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="input-{{ $test_option->id }}"
                                                            name="jawaban[{{ $test->id }}]"
                                                            value="{{ $test_option->id }}" class="custom-control-input"
                                                            {{ $test_option->id == $test_answers[$key_test]->option_id ? 'checked' : '' }}
                                                            disabled>
                                                        <label class="custom-control-label"
                                                            for="input-{{ $test_option->id }}">
                                                            <p class="mb-0 text-sm font-weight-normal">
                                                                {{ $test_option->option }}</p>
                                                        </label>
                                                    </div>
                                                    {{-- <i class="fas fa-times mr-2 text-danger"></i> --}}
                                                    @if ($test_option->id == $test_answers[$key_test]->option_id && $test_answers[$key_test]->is_correct == false)
                                                        <i class="fas fa-times mr-2 text-danger"></i>
                                                    @elseif($test_option->id == $test_answers[$key_test]->option_id &&
                                                        $test_answers[$key_test]->is_correct == true)
                                                        <i class="fas fa-check mr-2 text-success"></i>
                                                    @endif
                                            </div>
                                @endforeach
                        </div>
                </div>
                </li>
                @endforeach
                </ol>
            </div>
        @else
            <div class="card-body">
                @if ($type == 'Pre Test')
                    <form action="{{ route('elearning.pretest.store', $elearning->id) }}" method="POST"
                        class="mb-4">
                    @else
                        <form action="{{ route('elearning.posttest.store', $elearning->id) }}" method="POST"
                            class="mb-4">
                @endif
                @csrf
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
                                            <input type="radio" id="input-{{ $test_option->id }}"
                                                name="jawaban[{{ $test->id }}]" value="{{ $test_option->id }}"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="input-{{ $test_option->id }}">
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

                <div class="text-center">
                    <button type="submit" class="btn btn-success submit-save">
                        Submit
                    </button>
                </div>
                </form>
            </div>
            @endif
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
                            <p class="text-xxs text-uppercase font-weight-normal text-muted mb-1 d-inline-block mb-0">
                                Section
                                {{ $key + 1 }}
                            </p>
                        </div>
                        <a href="{{ route('elearning.showModule', [$elearning->id, $elearningmodule->section]) }}">
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
    <script type="text/javascript">
        $('.submit-save').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to submit this test?`,
                    text: "If you submit this, you can't change it later.",
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
