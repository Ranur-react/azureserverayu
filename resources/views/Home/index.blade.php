@extends('layouts.app', ['pagename' => 'Dashboard'])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7">
        <div class="row">
            @hasanyrole('Learning Design|Atasan Learning Design')
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <a href="{{ route('learning-design.learning-syllabus.job-families.index') }}">
                    <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                        <div class="card-body shadow-lg">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0">Learning Syllabus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <a href="{{ route('learning-design.learning-need-analysis.home.index') }}">
                    <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0">Learning Need Analysis</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                                    <i class="fas fa-pencil-ruler"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0">Learning Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endhasanyrole
            @role('Learning Operations')
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0">Delivery Plan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0">Learning Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="icon icon-shape bg-purple text-white rounded-circle shadow">
                                    <i class="fas fa-ruler"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0">Learning Measurement</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="icon icon-shape bg-indigo text-white rounded-circle shadow">
                                    <i class="fas fa-video"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0">Content Management</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endrole
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="icon icon-shape bg-brown text-white rounded-circle shadow">
                                    <i class="fas fa-database"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <span class="h2 font-weight-bold mb-0">Data & Report</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
