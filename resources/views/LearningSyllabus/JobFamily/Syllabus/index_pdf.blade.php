<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('telkomsel') }}/img/telkomsel-rejuve-logo.png" rel="icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@creative-tim-official/argon-dashboard-free@1.2.0/assets/css/argon.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@creative-tim-official/argon-dashboard-free@1.2.0/assets/css/argon.min.css">
    <link type="text/css" href="{{ asset('telkomsel') }}/css/app.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
    /*
    Custom CSS
*/

    /* Background Color */
    .bg-red-telkomsel {
        background-color: #ee1d2e;
    }

    .bg-gradient-red-telkomsel {
        background: linear-gradient(90deg, #f01326 0, #f06d34 100%) !important;
    }

    .bg-brown {
        background-color: #5c330a;
    }

    .bg-light-yellow {
        background-color: #fff2cc;
    }

    /* Text Color */
    .text-black {
        color: #001a41;
    }

    .text-red-telkomsel {
        color: #ee1d2e;
    }

    /* Button Color */
    .btn-red-telkomsel {
        color: #fff;
        background-color: #ee1d2e;
        border-color: #ee1d2e;
    }

    /* Text Size */
    .text-2xl {
        font-size: 1.875rem;
    }

    .text-3xl {
        font-size: 2.25rem;
    }

    .text-4xl {
        font-size: 3rem;
    }

    /* Custom */
    .footer {
        padding: 0.5rem 0;
        background: #ffffff;
    }

    .card-hover:hover {
        transform: translateY(-3px);
    }

</style>

<body>


    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Syllabus Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 d-none d-md-block">
                                    <img src="{{ public_path('storage/telkomsel-logo-symbol.png') }}" alt="">
                                </div>
                                <div class="col-lg-4 px-0">
                                    <div class="border border-dark border-lg p-0">
                                        <div class="border-bottom border-dark border-lg bg-red-telkomsel">
                                            <h3 class="text-uppercase text-center mb-0 p-1 text-white font-italic">
                                                Training
                                                Syllabus</h3>
                                        </div>
                                        <div class="border-bottom border-dark border-lg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-5 col-4 px-0">
                                                        <div class="bg-light-yellow h-100">
                                                            <h5 class="text-uppercase mb-0 p-1 text-center">Job
                                                                Family</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-8 px-0">
                                                        <div class="bg-white">
                                                            <p class=" mb-0 p-1 text-xs font-weight-normal">
                                                                Name</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-5 col-4 px-0">
                                                    <div class="bg-light-yellow h-100">
                                                        <h5 class="text-uppercase mb-0 p-1 text-center">Sub Job
                                                            Family</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-8 px-0">
                                                    <div class="bg-white">
                                                        <p class=" mb-0 p-1 text-xs font-weight-normal">Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 px-0">
                                    <div class="border border-bottom-0 border-dark border-lg p-0">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col px-0">
                                                    <div class="border-bottom border-dark border-lg bg-red-telkomsel">
                                                        <h3
                                                            class="text-uppercase text-center mb-0 p-1 text-white font-italic">
                                                            Training</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col px-0">
                                                    <p class=" mb-0 p-1 text-center font-weight-bold">Name</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 px-0">
                                    <div class="border border-dark border-lg p-0">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col px-0">
                                                    <div class="border-bottom border-dark border-lg bg-red-telkomsel">
                                                        <h3
                                                            class="text-uppercase text-center mb-0 p-1 text-white font-italic">
                                                            Training Summary</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col px-0">
                                                    <p class=" mb-0 p-1 text-xs font-weight-normal">Customer Insight,
                                                        Market
                                                        Name
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-lg-12 px-0">
                                    <div class=" p-0">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col px-0">
                                                    <div class="border border-dark border-lg bg-red-telkomsel">
                                                        <h3
                                                            class="text-uppercase text-center mb-0 text-white font-italic">
                                                            Who is This Course For</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3 px-0">
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <div class="bg-light-yellow">
                                                                    <h5 class="text-uppercase mb-0 p-1 text-center">
                                                                        Level
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <p
                                                                    class=" mb-0 p-1 text-xs text-center font-weight-normal">
                                                                    Level
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 px-0">
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <div class="bg-light-yellow">
                                                                    <h5 class="text-uppercase mb-0 p-1 text-center">
                                                                        Status
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <p
                                                                    class=" mb-0 p-1 text-xs text-center font-weight-normal">
                                                                    Status
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 px-0">
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <div class="bg-light-yellow">
                                                                    <h5 class="text-uppercase mb-0 p-1 text-center">
                                                                        Location
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <p
                                                                    class=" mb-0 p-1 text-xs text-center font-weight-normal">
                                                                    Lokasi
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 px-0">
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <div class="bg-light-yellow">
                                                                    <h5 class="text-uppercase mb-0 p-1 text-center">
                                                                        Unit
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row border border-dark border-lg">
                                                            <div class="col px-0">
                                                                <p
                                                                    class=" mb-0 p-1 text-xs text-center font-weight-normal">
                                                                    Unit
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 px-0">
                                    <div class="border border-top-0 border-dark border-lg p-0">
                                        <div class="border-bottom border-dark border-lg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3 px-0">
                                                        <div class="bg-red-telkomsel h-100">
                                                            <h4
                                                                class="p-2 text-uppercase text-center mb-0 text-white font-italic">
                                                                Training Background</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 px-0">
                                                        <p class=" mb-0 p-2 text-xs font-weight-normal bg-white">
                                                            Background</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 px-0">
                                    <div class="border border-top-0 border-dark border-lg p-0">
                                        <div class="border-bottom border-dark border-lg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3 px-0">
                                                        <div class="bg-red-telkomsel h-100">
                                                            <h4
                                                                class="p-2 text-uppercase text-center mb-0 text-white font-italic">
                                                                Training Description</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 px-0">
                                                        <p class=" mb-0 p-2 text-xs font-weight-normal bg-white">
                                                            Deskripsi </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 px-0">
                                    <div class="border border-top-0 border-dark border-lg p-0">
                                        <div class="border-bottom border-dark border-lg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3 px-0">
                                                        <div class="bg-red-telkomsel h-100">
                                                            <h4
                                                                class="p-2 text-uppercase text-center mb-0 text-white font-italic">
                                                                Skills Will You Gain</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 px-0">
                                                        <p class=" mb-0 p-2 text-xs font-weight-normal bg-white">Skills
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 px-0">
                                    <div class="border border-top-0 border-dark border-lg p-0">
                                        <div class="border-bottom border-dark border-lg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3 px-0">
                                                        <div class="bg-red-telkomsel h-100">
                                                            <h4
                                                                class="p-2 text-uppercase text-center mb-0 text-white font-italic">
                                                                Learning Scope</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 px-0">
                                                        <p class=" mb-0 p-2 text-xs font-weight-normal bg-white">Scope
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 px-0">
                                    <div class="border border-top-0 border-dark border-lg p-0">
                                        <div class="border-bottom border-dark border-lg">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3 px-0">
                                                        <div class="bg-red-telkomsel h-100">
                                                            <h4
                                                                class="p-2 text-uppercase text-center mb-0 text-white font-italic">
                                                                Partner Recommendation</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 px-0">
                                                        <p class=" mb-0 p-2 text-xs font-weight-normal bg-white">
                                                            Rekomendasi</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
