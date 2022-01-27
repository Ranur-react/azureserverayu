@extends('layouts.app', ['pagename' => 'Dashboard'])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold">What will you learn today?</h1>
                <div class="row my-4">
                    <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($carousel_elearnings as $key => $carousel_elearning)
                                    <div class="carousel-item {{ $key == '0' ? 'active' : '' }}">
                                        <div class="card shadow mb-3 h-100">
                                            <img src="{{ asset('telkomsel') }}/img/default-cover.png"
                                                class="card-img-top img-fluid" alt="..."
                                                style="height: 10rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                            <div class="card-body">
                                                <h3 class="card-title mb-2">{{ $carousel_elearning->name }}</h3>
                                                <p class="card-text text-sm" style="height: 100%">
                                                    {{ \Illuminate\Support\Str::limit($carousel_elearning->description, 150, $end = '...') }}
                                                </p>
                                                <a href="{{ route('elearning.view', $carousel_elearning->id) }}"
                                                    class="btn btn-primary text-white">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <h2 class="font-weight-extrabold mt-4 mb-3">Your Learning Path</h2>
                        <form action="{{ route('home') }}" method="get" class="navbar-search navbar-search-light mb-4">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Search" type="text" name="keyword"
                                        autocomplete="off" value="{{ request('keyword') }}">
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div id="elearning-section">

                            </div>
                            @foreach ($elearnings as $elearning)
                                <div class="col-4 mb-4">
                                    <a href="{{ in_array($elearning->id, $enrolled_ids) ? route('elearning.show', $elearning->id) : route('elearning.view', $elearning->id) }}"
                                        class="card shadow h-100">
                                        <img src="{{ asset('telkomsel') }}/img/default-cover.png" alt="..."
                                            style="height: 12rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                        <div class="card-body p-3">
                                            <h4 class="card-title mb-1">{{ $elearning->name }}</h4>
                                        </div>
                                        <div class="card-footer p-3 text-right">
                                            <span class="badge badge-pill badge-primary text-xxs">
                                                {{ $elearning->count ? $elearning->count : '0' }} Modules
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>Course In Progress</h4>
                        @foreach ($elearning_in_progress as $elearning)
                            <div class="row mb-2">
                                <div class="col">
                                    <a href="{{ route('elearning.show', $elearning->id) }}" class="card p-3 shadow">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-sm icon-shape bg-green text-white rounded-circle mr-3">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <h4 class="mb-0">{{ $elearning->name }}</h4>
                                            </div>
                                            <div class="icon-sm icon-shape">
                                                <i class="fas fa-chevron-right"></i>
                                            </div>
                                            {{-- <div class="progress-info justify-content-end">
                                                <div class="progress-percentage">
                                                    <span class="text-xs">60%</span>
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="progress mb-2">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div> --}}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
