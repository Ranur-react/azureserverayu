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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 text-center text-black">Request for Information</h3>
                                <h3 class="mb-0 text-center text-black">Pengadaan Jasa Konsultan Pelatihan Marketing
                                    Analytics</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col border border-dark">
                                <h4 class="mb-1 text-black">Latar Belakang</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border border-dark p-3">
                                {{-- Training Background --}}
                                <p class="text-sm mb-1 text-black font-weight-normal">
                                   {{ $syllabus->training_background }}</p>
                                {{-- Tujuan --}}
                                <p class="text-sm mb-1 text-black font-weight-normal">
                                    Untuk memenuhi kebutuhan akan kemampuan tersebut adalah dengan pelatihan Marketing
                                    Analytics yang ditujukan
                                    kepada Karyawan fungsi Sales di Area/Regional yang memiliki tanggung jawab untuk
                                    menganalisa market, customer
                                    behavior, dan kompetitor, selanjutnya dapat digunakan dalam memberikan rekomendasi
                                    untuk membangun strategi
                                    pemasaran dan penjualan.
                                </p>

                                <p class="text-sm mb-1 text-black font-weight-normal">
                                    Adapun materi yang disampaikan adalah :
                                </p>
                                <ul class="text-sm mb-1 text-black font-weight-normal">
                                    @foreach($syllabus->competencies as $competency)
                                    <li>
                                        {{ $competency->name }}
                                    </li>
                                    @endforeach
                                </ul>

                                {{-- Ruang Lingkup --}}
                                <p class="text-sm mb-0 text-black font-weight-bold mt-3">
                                    Ruang lingkup pekerjaan ini adalah sebagai berikut:
                                </p>
                                <p class="text-sm mb-1 text-black font-weight-normal">
                                    Melakukan tahapan yang meliputi:
                                </p>
                                <ol class="text-sm mb-1 text-black font-weight-normal pl-3">
                                    <li>
                                        {{ $syllabus->learning_scope }}
                                    </li>
                                </ol>

                                {{-- Jumlah Peserta --}}
                                <p class="text-sm mb-1 text-black font-weight-normal mt-3">
                                    <span class="font-weight-bold">Jumlah peserta per batch : </span> {{ $batch }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border border-dark">
                                <h4 class="mb-1 text-black">Tujuan Pengadaan:</h4>
                                <p class="text-sm mb-1 text-black font-weight-normal">
                                    Agar peserta dapat mengimplementasikan teknik market research dan menganalisa
                                    kebutuhan customer dimasing2
                                    segmen pasar, competitor, serta kondisi perusahaan sehingga dapat memberikan
                                    rekomendasi untuk
                                    mengembangkan strategi pemasaran dan penjualan.
                                </p>
                            </div>
                        </div>

                        {{-- Dasar Pengadaan --}}
                        <div class="row">
                            <div class="col border border-dark">
                                <h4 class="mb-1 text-black">Dasar Pengadaan:</h4>
                                <div class="row">
                                    {{-- Justifikasi Pengadaan --}}
                                    <div class="col-6 border border-dark">
                                        <p class="text-sm mb-1 text-black font-weight-normal">
                                            Justifikasi Pengadaan Pelatihan Marketing Analytics
                                        </p>
                                    </div>
                                    {{-- Estimasi Pengadaan --}}
                                    <div class="col-6 border border-dark">
                                        <p class="text-sm mb-1 text-black font-weight-normal">
                                            Estimasi Nilai Pengadaan:
                                            <br>
                                            Rp {{ $estimasi }},-
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Kandidat Peserta Tender --}}
                        <div class="row">
                            <div class="col border border-dark">
                                <h4 class="mb-1 text-black">Kandidat Peserta Tender:</h4>
                                <ol type="a" class="text-sm mb-1 text-black font-weight-normal">
                                    <li>
                                        {{ $syllabus->partner_recommendation }}
                                    </li>
                                </ol>
                            </div>
                        </div>

                        {{-- Usulan Peserta Tender --}}
                        <div class="row">
                            <div class="col border border-dark">
                                <h4 class="mb-1 text-black">Usulan Peserta Tender:</h4>
                                <ol type="a" class="text-sm mb-1 text-black font-weight-normal">
                                    <li>
                                        PPM Management
                                    </li>
                                    <li>
                                        MarkPlus
                                    </li>
                                    <li>
                                        Lingkaran
                                    </li>
                                    <li>
                                        Purwadhika
                                    </li>
                                    <li>
                                        D’beyond
                                    </li>
                                </ol>
                            </div>
                        </div>

                        {{-- Alasan Pemilihan Peserta Tender --}}
                        <div class="row">
                            <div class="col border border-dark">
                                <h4 class="mb-1 text-black">Alasan Pemilihan Peserta Tender:</h4>
                                <ol type="a" class="text-sm mb-1 text-black font-weight-normal">
                                    <li>
                                        Dapat menyelenggarakan pelatihan Marketing Analytics
                                    </li>
                                    <li>
                                        Memiliki framework pelatihan yang sesuai dengan kebutuhan program Marketing
                                        Analytics
                                    </li>
                                    <li>
                                        Memahami Culture & Capability yang ada saat ini di Telkomsel
                                    </li>
                                    <li>
                                        Memiliki pengalaman dan keahlian dalam implementasi New Ways of Working di Era
                                        Digital
                                    </li>
                                    <li>
                                        Memiliki pengalaman dalam menyusun program secara tailor-made sesuai dengan
                                        kebutuhan Telkomsel
                                    </li>
                                </ol>
                            </div>
                        </div>

                        {{-- Tanda Tangan --}}
                        <div class="row mt-4">
                            <div class="col-6 border border-dark">
                                <div class="row">
                                    <div class="col-lg-6 border-right border-dark">
                                        <div class="row">
                                            <div class="col border-bottom border-dark text-center">
                                                <p class="text-sm mb-1 text-black font-weight-normal">
                                                    <i>Diajukan oleh,</i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col border-bottom border-dark text-center">
                                                <p class="text-sm mb-1 text-black font-weight-normal">
                                                    Tanggal: {{ date('d M Y') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col border-bottom border-dark d-flex align-items-end justify-content-center"
                                                style="height: 8rem">
                                                <p class="text-sm mb-1 text-black font-weight-bold">
                                                    {{ auth()->user()->name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="text-sm mb-1 text-black font-weight-normal">
                                                    Senior Learning Architect
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col border-bottom border-dark text-center">
                                                <p class="text-sm mb-1 text-black font-weight-normal">
                                                    <i>Diajukan oleh,</i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col border-bottom border-dark text-center">
                                                <p class="text-sm mb-1 text-black font-weight-normal">
                                                    Tanggal: {{ date('d M Y') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col border-bottom border-dark d-flex align-items-end justify-content-center"
                                                style="height: 8rem">
                                                <p class="text-sm mb-1 text-black font-weight-bold text-center">
                                                    Fithri Novida
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="text-sm mb-1 text-black font-weight-normal">
                                                    Principal Talent Learning
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
    </div>
</body>

</html>
