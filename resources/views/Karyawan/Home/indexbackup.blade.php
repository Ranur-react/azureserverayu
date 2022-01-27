@extends('layouts.app', ['pagename' => 'Dashboard'])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold">What will you learn today?</h1>
                {{-- @php
                    echo $elearnings;
                @endphp --}}
                <div class="row my-4">
                    <div class="col-lg-9">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($elearnings as $key => $elearning)
                                    <div class="carousel-item {{ $key == '0' ? 'active' : '' }}">
                                        <div class="card shadow mb-3 h-100">
                                            <img src="{{ asset('telkomsel') }}/img/default-cover.png"
                                                class="card-img-top img-fluid" alt="..."
                                                style="height: 10rem; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                                            <div class="card-body">
                                                <h3 class="card-title mb-2">{{ $elearning->name }}</h3>
                                                <p class="card-text text-sm" style="height: 100%">
                                                    {{ \Illuminate\Support\Str::limit($elearning->description, 150, $end = '...') }}
                                                </p>
                                                <button class="btn btn-primary">Learn More</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                {{-- <div class="bg-dark opacity-3 p-3 rounded"> --}}
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                {{-- </div> --}}
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                {{-- <div class="bg-dark opacity-3 p-3 rounded"> --}}
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                {{-- </div> --}}
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <h3 class="font-weight-extrabold mt-4 mb-3">Your Learning Path</h3>
                        @php
                            $courses = ['Project Management', 'Network Management', 'Sales & Customer Management', 'Business Planning', 'Marketing Strategy', 'Marketing Analysis', 'Java Programming'];
                        @endphp
                        <div class="row">
                            @foreach ($elearnings as $elearning)
                                <div class="col-4 mb-4">
                                    <a href="{{ route('elearning.view', $elearning->id) }}" class="card shadow h-100">
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
                    <div class="col-lg-3">
                        <div class="card shadow sticky-top" style="z-index: 0">
                            <div class="card-header">
                                <div class="d-flex justify-content-center">
                                    <span class="d-flex align-items-center pr-3">
                                        <i class="far fa-calendar-alt mr-2" style="color: rgba(209, 213, 219, 1);"></i>
                                        <h5 class="font-weight-normal text-xs mb-0 date-day"></h5>
                                    </span>
                                    <span class="d-flex align-items-center pl-3">
                                        <i class="far fa-clock mr-2" style="color: rgba(209, 213, 219, 1);"></i>
                                        <h5 class="font-weight-normal text-xs mb-0 date-time"></h5>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-sm font-weight-bold mb-3">Announcement</h5>
                                    <div class="border rounded border-primary bg-secondary p-3">
                                        <p class="mb-0 text-xs font-weight-normal">Lorem, ipsum dolor sit amet consectetur
                                            adipisicing elit. Ex nisi eius dicta,
                                            debitis, officiis in inventore illum illo fugit ab minima. Voluptates alias enim
                                            dolorum itaque perferendis incidunt non. Aut.</p>
                                    </div>
                                    <hr class="my-4">
                                </div>
                                <div class="widget-calendar">
                                    <h5 class="text-sm font-weight-bold mb-3">Calendar Training</h5>
                                    <!-- Card header -->
                                    <div class="card-header p-0">
                                        <div class="h4 widget-calendar-month"></div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body p-0">
                                        <div data-toggle="widget-calendar" class="calendar-widget"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
