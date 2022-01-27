@extends('layouts.app', ['pagename' => 'Dashboard'])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7">
        <div class="row">
            @hasanyrole('Learning Design| Atasan Learning Design')
                <div class="col-xl-3 col-lg-6 mb-lg-4">
                    <a href="{{ route('learning-design.learning-need-analysis.csp.index') }}">
                        <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                            <div class="card-body shadow-lg">
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-bullseye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">CSP</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endrole
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <a href="{{ route('learning-design.learning-need-analysis.idp.index') }}">
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
                                    <span class="h2 font-weight-bold mb-0">IDP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 mb-lg-4">
                <a href='/learning-design/learning-need-analysis/user-needs'>
                    <div class="card card-hover card-stats mb-4 mb-xl-0 shadow-lg">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0">User Needs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
