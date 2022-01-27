@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'My Course'
=>'']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold mb-3">My Course</h1>

                <div class="row mb-2">
                    <div class="col">
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                        href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                        aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Active Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                        href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                        aria-selected="false"><i class="fas fa-history mr-2"></i>Inactive Courses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                        aria-labelledby="tabs-icons-text-1-tab">
                        <div class="row">
                            @foreach ($active_elearnings as $elearning)
                                <div class="col-3 mb-5">
                                    <a href="{{ route('elearning.show', $elearning->id) }}" class="card shadow h-100">
                                        <img src="{{ asset('telkomsel') }}/img/default-cover.png" alt="..."
                                            style="height: 12rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                        <div class="card-body p-3">
                                            <h5 class="text-xs font-weight-semibold text-muted mb-1">E-Learning</h5>
                                            <h4 class="card-title mb-1">{{ $elearning->name }}</h4>
                                        </div>
                                        <div class="card-footer p-3">
                                            <div class="progress-info">
                                                <span
                                                    class="badge badge-pill badge-primary text-xxs">{{ $elearning->count ? $elearning->count : '0' }}
                                                    Modules</span>
                                                <div class="progress-percentage">
                                                    <span class="text-xs">60%</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            @foreach ($active_trainingclasses as $trainingclass)
                                <div class="col-3 mb-5">
                                    <a href="{{ route('class.show', $trainingclass->id) }}" class="card shadow h-100">
                                        <img src="{{ asset('telkomsel') }}/img/default-cover.png" alt="..."
                                            style="height: 12rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                        <div class="card-body p-3">
                                            <h5 class="text-xs font-weight-semibold text-muted mb-1">Class</h5>
                                            <h4 class="card-title mb-1">{{ $trainingclass->name }}</h4>
                                        </div>
                                        <div class="card-footer p-3">
                                            <div class="progress-info">
                                                <span
                                                    class="badge badge-pill badge-primary text-xxs">{{ $trainingclass->count ? $trainingclass->count : '0' }}
                                                    Modules</span>
                                                {{-- <h5 class="text-xs mb-0"><span class="text-success">222</span> students</h5> --}}
                                                <div class="progress-percentage">
                                                    <span class="text-xs">60%</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                        aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                            @foreach ($inactive_elearnings as $elearning)
                                <div class="col-3 mb-5">
                                    <a href="{{ route('elearning.show', $elearning->id) }}" class="card shadow h-100">
                                        <img src="{{ asset('telkomsel') }}/img/default-cover.png" alt="..."
                                            style="height: 12rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                        <div class="card-body p-3">
                                            <h5 class="text-xs font-weight-semibold text-muted mb-1">E-Learning</h5>
                                            <h4 class="card-title mb-1">{{ $elearning->name }}</h4>
                                        </div>
                                        <div class="card-footer p-3">
                                            <div class="progress-info">
                                                <span
                                                    class="badge badge-pill badge-primary text-xxs">{{ $elearning->count ? $elearning->count : '0' }}
                                                    Modules</span>
                                                {{-- <h5 class="text-xs mb-0"><span class="text-success">222</span> students</h5> --}}
                                                <div class="progress-percentage">
                                                    <span class="text-xs">60%</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            @foreach ($inactive_trainingclasses as $trainingclass)
                                <div class="col-3 mb-5">
                                    <a href="{{ route('class.show', $trainingclass->id) }}" class="card shadow h-100">
                                        <img src="{{ asset('telkomsel') }}/img/default-cover.png" alt="..."
                                            style="height: 12rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                        <div class="card-body p-3">
                                            <h5 class="text-xs font-weight-semibold text-muted mb-1">Class</h5>
                                            <h4 class="card-title mb-1">{{ $trainingclass->name }}</h4>
                                        </div>
                                        <div class="card-footer p-3">
                                            <div class="progress-info">
                                                <span
                                                    class="badge badge-pill badge-primary text-xxs">{{ $trainingclass->count ? $trainingclass->count : '0' }}
                                                    Modules</span>
                                                {{-- <h5 class="text-xs mb-0"><span class="text-success">222</span> students</h5> --}}
                                                <div class="progress-percentage">
                                                    <span class="text-xs">60%</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
