@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Data & Report'
=>'/data-report', $training->name =>
'']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Data & Report - {{ $training->name }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('data-report.export', [$type, $training->id]) }}" class="mr-2">
                                    <button class="btn btn-primary text-center">
                                        Export
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="tableKaryawan">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="nik">
                                            NIK
                                        </th>
                                        <th scope="col" class="sort" data-sort="name">
                                            Nama Karyawan
                                        </th>
                                        <th scope="col" class="sort" data-sort="title">
                                            Title
                                        </th>
                                        <th scope="col" class="sort" data-sort="organization">
                                            Organization
                                        </th>
                                        <th scope="col" class="sort" data-sort="score_pretest">
                                            Score Pre Test
                                        </th>
                                        <th scope="col" class="sort" data-sort="score_pretest">
                                            Score Post Test
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->nik }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td class="text-wrap">{{ $user->title }}</td>
                                            <td class="text-wrap">{{ $user->organization }}</td>
                                            <td>{{ $user->score_pretest ? $user->score_pretest : '-' }}</td>
                                            <td>{{ $user->score_posttest ? $user->score_posttest : '-' }}</td>
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
@endsection


@push('js')
    <script>
        $('#tableKaryawan').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
