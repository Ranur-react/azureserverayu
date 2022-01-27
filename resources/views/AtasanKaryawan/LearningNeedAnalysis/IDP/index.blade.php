@extends('layouts.app', ['pagename' => 'List Karyawan'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">List Karyawan</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="email">Title</th>
                                        <th scope="col" class="sort" data-sort="email">Organization</th>
                                        <th class="text-right" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td>
                                            Mas Choi
                                        </td>
                                        <td class="text-wrap">
                                            Staff Training Operations
                                        </td>
                                        <td class="text-wrap">
                                            Human Capital Management Directorate
                                        </td>
                                        <td class="text-right">
                                            <a href="/atasan-karyawan/learning-need-analysis/idp/1"
                                                class="btn btn-sm btn-primary" type="button">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mas Satya
                                        </td>
                                        <td class="text-wrap">
                                            Staff Training Operations
                                        </td>
                                        <td class="text-wrap">
                                            Human Capital Management Directorate
                                        </td>
                                        <td class="text-right">
                                            <a href="/atasan-karyawan/learning-need-analysis/idp/1"
                                                class="btn btn-sm btn-primary" type="button">Lihat</a>
                                        </td>
                                    </tr>
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
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
