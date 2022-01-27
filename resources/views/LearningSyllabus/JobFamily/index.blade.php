@extends('layouts.app', ['pagename' => 'Job Family Directory'])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8 mb-5">
        {{-- <div class="row">
            <div class="col">
                <h1 class="font-weight-bold text-3xl">Job Family Directory</h1>
            </div>
        </div> --}}
        @if (session('delete_job_family_message_success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                <span class="alert-text">{!! session('delete_job_family_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        <div class="row justify-content-end">
            <div class="text-right mr-3">
                <a href="{{ route('learning-syllabus.job-families.archive') }}"
                    class="btn btn-secondary">Archive</a>
            </div>
            @can('learning_syllabus_create')
                <div class="text-right">
                    <a href="{{ route('learning-syllabus.job-families.create') }}" class="btn btn-primary">
                        Add Job Family
                    </a>
                </div>
            @endcan
        </div>
        <div class="row mt-4">
            @foreach ($jobFamilies as $jobFamily)
                <div class="col-xl-2 col-lg-6 mb-4 mb-lg-5">
                    <div href="#" class="card card-hover card-stats shadow-lg h-100">
                        @if ($jobFamily->pending_syllabuses_count != 0)
                            <span class="card-badge text-sm text-white">{{ $jobFamily->pending_syllabuses_count }}</span>
                        @endif
                        <div class="dropdown text-right rounded-top">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            @if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    @can('learning_syllabus_edit')
                                        <a class="dropdown-item"
                                            href="{{ route('learning-syllabus.job-families.edit', $jobFamily->id) }}">Edit</a>
                                    @endcan
                                    @can('learning_syllabus_delete')
                                        <form
                                            action="{{ route('learning-syllabus.job-families.destroy', $jobFamily->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item submit-delete"
                                                data-method="delete">Delete</button>
                                        </form>
                                    @endcan
                                </div>
                            @endif
                        </div>
                        <a class="p-2 pb-4"
                            href="{{ route('learning-syllabus.job-families.sub-job-families.index', $jobFamily->id) }}">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-folder"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col">
                                    <span class="h4 font-weight-bold mb-0">{{ $jobFamily->name }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
