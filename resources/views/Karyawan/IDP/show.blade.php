@extends('layouts.app', ['pagedirectory' => 
['Individual Development Plan' =>'/individual-development-plan',
'Show' => '']])

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
                                            <h5 class="text-sm text-muted mb-0">NIK {{ Auth::user()->employee->nik }}</h5>
                                            <h2 class="text-xl font-weight-extrabold">{{ Auth::user()->employee->name }}</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                      ss="font-weight-bold text-uppercase">Title :
                                                </span>{{ Auth::user()->employee->title }}</p>
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Organization :
                                                </span>{{ Auth::user()->employee->organization }}</p>
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
                                        {{ $idpUser->idpPeriod->name }} -
                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idpUser->idpPeriod['start_date'])->format('Y') }}
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
                                        @foreach ($idpUser->syllabuses as $syllabus)
                                            <tr>
                                                <td>
                                                    {{ $syllabus->pivot->priority }}
                                                </td>
                                                <td class="text-wrap">
                                                    <a href="{{ route('api.v1.syllabuses-ajax.show', $syllabus->id) }}"
                                                        class="pe-auto modal-global">{{ $syllabus->training_name }}</a>
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

     <!-- Modal -->
     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">Syllabus Detail</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body pt-2">

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
@endsection
@push('js')
    <script>
       $('.modal-global').click(function(){
            event.preventDefault();
            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(response) {
                var competencies_section = ''
                var vendors_section = ''
                var levels_section = ''
                var statuses_section = ''
                var locations_section = ''
                var units_section = ''

                for (let index = 0; index < response['competencies'].length; index++) {
                    const competency = response['competencies'][index];
                    competencies_section +=
                        `<span class="badge badge-pill badge-muted mb-1 mr-1">` + competency['name'] +
                        `</span>`
                }
                for (let index = 0; index < response['vendors'].length; index++) {
                    const vendor = response['vendors'][index];
                    vendors_section += `
                        <li>
                            <p class="text-sm font-weight-normal mb-0">
                                ` + vendor['partner_name'] + `
                            </p>
                        </li>
                    `
                }
                for (let index = 0; index < response['levels'].length; index++) {
                    const level = response['levels'][index];
                    levels_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + level['name'] + `</span>
                    `
                }
                for (let index = 0; index < response['statuses'].length; index++) {
                    const status = response['statuses'][index];
                    statuses_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + status['name'] + `</span>
                    `
                }
                for (let index = 0; index < response['locations'].length; index++) {
                    const location = response['locations'][index];
                    locations_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + location['location_code'] + `</span>
                    `
                }
                for (let index = 0; index < response['units'].length; index++) {
                    const unit = response['units'][index];
                    units_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + unit['name'] + `</span>
                    `
                }
                // console.log(response[0].description)
                $("#exampleModalLong").find('.modal-body').html(`
                <div>
                    <div class="mb-4">
                        <h3 class="text-lg">` + response['syllabus']['training_name'] + `</h3>
                        <p class="text-xs font-weight-normal text-muted mb-2">
                            ` + response['syllabus']['syllabus_code'] + `</p>
                        <p class="text-sm mb-0 font-weight-normal">` + response['syllabus']['training_summary'] + `</p>
                    </div>

                    <div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Skills Will You Gain
                            </h4>
                            <div class="border p-3">
                                <div>
                                    ` + competencies_section + `
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Who is This Course For
                            </h4>
                            <div class="row mt-2">
                                <div class="col-lg-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Level</h4>
                                            ` + levels_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Status</h4>
                                            ` + statuses_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Location</h4>
                                            ` + locations_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Unit</h4>
                                            ` + units_section + `
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Training Description
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                                ` + response['syllabus']['training_description'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Training Background
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['training_background'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Learning Scope
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['learning_scope'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Partner Recommendation
                            </h4>
                            <ul>
                            ` + vendors_section + `
                            </ul>
                        </div>
                    </div>
                </div>
            `)
            });
        });
    </script>
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
