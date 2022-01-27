@extends('layouts.app', ['pagename' => 'Periode IDP'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow-lg">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">List Karyawan</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body pt-1">
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
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>
                                                    {{ $employee->name }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $employee->title }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $employee->directorate }}
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('learning-design.learning-need-analysis.idp.karyawan.show', $employee->person_id) }}"
                                                        class="btn btn-sm btn-primary" type="button">Lihat</a>
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
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
