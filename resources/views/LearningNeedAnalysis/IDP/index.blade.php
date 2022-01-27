@extends('layouts.app', ['pagename' => 'Individual Development Plan'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow-lg">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col d-flex justify-content-start">
                                    <h3 class="mb-0">Employee IDP</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body pt-1">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="nik">NIK</th>
                                            <th scope="col" class="sort" data-sort="name">Nama
                                                Karyawan</th>
                                            <th scope="col" class="sort" data-sort="title">Title
                                            </th>
                                            <th scope="col" class="sort" data-sort="organization">
                                                Organization</th>
                                                <th class="text-right" scope="col" class="sort" data-sort="name">
                                                    Action
                                                </th>    
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>
                                                    {{ $employee->nik }}
                                                </td>
                                                <td>
                                                    {{ $employee->name }}
                                                </td>
                                                <td>
                                                    {{ $employee->title }}
                                                </td>
                                                <td>
                                                    {{ $employee->organization }}
                                                </td>
                                               
                                                <td class="text-right">
                                                    <a href="{{ route('learning-need-analysis.idp.show', $employee->nik) }}"
                                                        class="btn btn-sm btn-primary btn-icon" type="button" >View
                                                    </a>
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

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pagingType": "numbers",
                "columnDefs": [
                    { "orderable": false, "targets": 4 },
                ]
            });
        });
    </script>
@endpush