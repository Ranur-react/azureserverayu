@extends('layouts.app', ['pagedirectory' => [
'IDP' =>'/learning-need-analysis/idp',
'Training Plan' => '/learning-need-analysis/idp/'. $employee->nik, 
$idp_user->idpPeriod->name . ' - '. \Carbon\Carbon::createFromFormat('Y-m-d', $idp_user->idpPeriod['start_date'])->format('Y') => '', ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="p-md-2 p-1">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-sm text-muted mb-0">NIK {{ $employee->nik }}</h5>
                                            <h2 class="text-xl font-weight-extrabold">{{ $employee->name }}</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Title :
                                                </span>{{ $employee->title }}</p>
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Organization :
                                                </span>{{ $employee->organization }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="text-uppercase">Sasaran Kerja Yang Diambil</h4>
                                    <p class="text-sm font-weight-bold text-uppercase text-muted">Periode
                                        {{ $idp_user->idpPeriod->name }} -
                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idp_user->idpPeriod['start_date'])->format('Y') }}
                                    </p>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-flush align-items-center" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="no">Priority</th>
                                            <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                            <th scope="col" class="sort" data-sort="desc">Deskripsi Syllabus
                                            </th>
                                            <th scope="col" class="sort" data-sort="competency">Kompetensi
                                                Yang
                                                Dicapai</th>
                                            {{-- <th class="text-right" scope="col" class="sort" data-sort="name">
                                                Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($idp_user->syllabuses as $syllabus)
                                            <tr>
                                                <td>
                                                    {{ $syllabus->pivot->priority }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $syllabus->training_name }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $syllabus->training_summary }}
                                                </td>
                                                <td class="text-wrap">
                                                    <ul>
                                                        @foreach ($syllabus->prfCompetencyCatalog as $competency)
                                                            <li>{{ $competency->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                {{-- <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <form action="#" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item submit-delete"
                                                                    data-method="delete">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td> --}}
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
@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
