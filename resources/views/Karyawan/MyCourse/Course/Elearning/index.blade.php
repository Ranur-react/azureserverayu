@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'E-Learning'
=>'', $elearning->name => '']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--9 mb-5">
        <div class="card shadow-lg rounded">
            <div class="p-md-3 p-1">
                <div class="card-header position-relative">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class=" text-xl mb-3">{{ $elearning->name }}</h1>
                            <p class="mb-3 text-sm font-weight-normal">
                                {{ $elearning->description }}
                            </p>
                            @if ($enroll_status)
                                <a href="{{ route('elearning.show', $elearning->id) }}">
                                    <button class="btn btn-primary mt-3">Open Elearning</button>
                                </a>
                            @else
                                <form action="{{ route('elearning.selfEnroll', $elearning->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mt-3">Enroll Now</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-lg rounded mt-5">
            <div class="p-md-3 p-1">
                <div class="card-body">
                    <div class="row justify-content-center mt--5-5">
                        <div class="col-lg-6">
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                            data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                            aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                class="fas fa-info-circle mr-2"></i>About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                            href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                            aria-selected="false"><i class="fas fa-user-tie mr-2"></i>Instructors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                            href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                            aria-selected="false"><i class="fas fa-video mr-2"></i>Course</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Skills Will You Gain
                                </h3>
                                <div class="border p-3">
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing Strategy and
                                        Planning</span>
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing
                                        Research</span>
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing Trend
                                        Analysis</span>
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing Strategy and
                                        Planning</span>
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing
                                        Research</span>
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing Trend
                                        Analysis</span>
                                    <span class="badge badge-pill badge-muted mb-2 mr-1">Marketing Strategy and
                                        Planning</span>
                                    <span class="badge badge-pill badge-muted mb-1 mr-1">Marketing
                                        Research</span>
                                    <span class="badge badge-pill badge-muted mb-1 mr-1">Marketing Trend
                                        Analysis</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Who is This Course For
                                </h3>
                                <div class="row mt-2">
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Level</h4>
                                                <span class="badge badge-pill badge-muted mb-1 mr-1">Level 1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Status</h4>
                                                <span class="badge badge-pill badge-muted mb-1 mr-1">Kontrak</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Location</h4>
                                                <span class="badge badge-pill badge-muted mb-1 mr-1">Area</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Unit</h4>
                                                <span class="badge badge-pill badge-muted mb-1 mr-1">Management Unit</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Course Background
                                </h3>
                                <div class="border p-3">
                                    <p class="text-sm font-weight-normal mb-0">Marketing analytics terdiri dari market
                                        research,
                                        customer
                                        insight,
                                        dan market insight. Market research
                                        yang kuat akan menjadi suatu keunggulan bagi perusahaan karena kemampuannya melihat
                                        potensi
                                        pasar,
                                        karakteristik pasar dan perilaku customer yang nantinya digunakan untuk membangun
                                        marketing
                                        strategy
                                        yang tepat. Selain itu, sangat penting untuk setiap perusahaan memahami kebutuhan
                                        dan
                                        keinginan
                                        customer-nya agar perusahaan dapat menyesuaikan strateginya. Dan pada penyusunan
                                        strategi
                                        bisnis,
                                        perusahaan membutuhkan informasi tentang market,
                                        diantaranya tentang market size, pesaing utama, dan tren industri.

                                        Untuk memenuhi kebutuhan akan kemampuan tersebut adalah dengan pelatihan Marketing
                                        Analytics
                                        yang
                                        ditujukan kepada Karyawan fungsi Sales di Area/Regional yang memiliki tanggung jawab
                                        untuk
                                        menganalisa
                                        market, customer behavior, dan kompetitor, selanjutnya dapat digunakan dalam
                                        memberikan
                                        rekomendasi
                                        untuk membangun strategi
                                        pemasaran dan penjualan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3
                                        class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                        Informasi Vendor
                                    </h3>
                                    <div class="mt-4 d-flex">
                                        <img src="{{ asset('telkomsel') }}/img/telkomsel-logo-only.png"
                                            class="" alt=" ..." style="height: 6rem; width: 6rem;">
                                        <div class="ml-4">
                                            <h2 class="mb-1">Telkomsel</h2>
                                            <p class="text-sm font-weight-normal mb-1">PT Telekomunikasi Selular</p>
                                            <p class="text-sm font-weight-normal">The Telkom Hub, Jl. Gatot Subroto No.Kav.
                                                52,
                                                RT.6/RW.1, Kuningan Bar., Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah
                                                Khusus
                                                Ibukota Jakarta 12710</p>
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-user-tie"></i>
                                                <p class="ml-2 mr-5 text-sm font-weight-normal mb-0">Mas Choi</p>
                                                <i class="fas fa-phone"></i>
                                                <p class="ml-2 text-sm font-weight-normal mb-0">Mas Choi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                            aria-labelledby="tabs-icons-text-3-tab">
                            <h3
                                class="my-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Course Content
                            </h3>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Daftar Modul</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($elearning->modules as $modul)
                                            <tr>
                                                <td>
                                                    <div class="row p-1">
                                                        <div class="col d-flex justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <i class="mr-3 fas fa-play-circle"></i>
                                                                <p class="text-sm font-weight-normal mb-0">
                                                                    {{ $modul->name }}
                                                                </p>
                                                            </div>
                                                            <p class="text-sm text-muted font-weight-normal mb-0">3:33</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
