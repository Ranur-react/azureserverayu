<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Telkomsel LMS') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('telkomsel') }}/img/telkomsel-rejuve-logo.png" rel="icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css') }}/app.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets') }}/css/argon.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <link type="text/css" href="{{ asset('telkomsel') }}/css/app.css" rel="stylesheet">

    {{-- CURRENT ( DAFFA) --}}
    <link type="text/css" href="{{ asset('telkomsel') }}/css/datatable.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('telkomsel') }}/vendor/fullcalendar/main.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Script -->
    =======
    {{-- INCOMING (MALVIN) --}}
    <link type="text/css" href="{{ asset('css') }}/all.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" rel="stylesheet">
    =========
    <script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
        rel="stylesheet" />

    @stack('styles')
</head>

<body class="{{ $class ?? '' }}">
    @include('sweetalert::alert')

    @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @include('layouts.navbars.sidebar')
    @endauth

    <div class="main-content">
        @include('layouts.navbars.navbar', ['pagename' => $pagename ?? '', 'pagedirectory' => $pagedirectory ?? ''])
        @yield('content')
    </div>

    @guest()
        @include('layouts.footers.guest')
    @endguest

    <!-- Script -->
    <script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js') }}/all.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

    <script type="text/javascript"
        src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

    {{-- <script src="{{ asset('assets') }}/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script  src="{{ asset('assets') }}/vendor/datatables.net/js/jquery.dataTables.min.js">
    </script>
    <script  src="{{ asset('assets') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <!-- Latest Sortable -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <!-- Laravel Javascript Validation -->
    <!-- Argon JS -->
    <script src="{{ asset('assets') }}/vendor/moment/min/moment.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="{{ asset('telkomsel') }}/vendor/fullcalendar/main.js"></script>
    {{-- <script src="{{ asset('assets') }}/vendor/sweetalert2/dist/sweetalert2.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/quill/dist/quill.min.js"></script> --}}


    <script src="{{ asset('assets') }}/js/argon.js?v=1.0.0"></script>
    @stack('js')
</body>

</html>
