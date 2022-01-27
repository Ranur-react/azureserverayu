@extends('layouts.app', ['pagedirectory' => [
'Vendors' =>'/setup-settings/vendors',
$vendor->pt_name => '',
'Syllabuses' => ''
]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt-lg--7 mt--8 mb-5">
        @if ($errors->any())
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Whoops, there is some errors!!</h4>
                @foreach ($errors->all() as $error)
                    <span class="alert-icon"><i class="ni ni-fat-delete"></i></span>
                    <span class="alert-text">{{ $error }}</span><br>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card shadow rounded">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Syllabus {{ $vendor->name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1">
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="code">
                                        Code</th>
                                    <th scope="col" class="sort" data-sort="name">
                                        Name</th>
                                    <th scope="col" class="sort" data-sort="status">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($levels as $data)
                                    <tr>
                                        <td>
                                            {{ $data->name }}
                                        </td>
                                        <td>
                                            @if ($data->category == 1)
                                                Location
                                            @endif
                                            @if ($data->category == 2)
                                                Unit
                                            @endif
                                            @if ($data->category == 3)
                                                Status
                                            @endif
                                            @if ($data->category == 4)
                                                Level
                                            @endif
                                        </td>
                                        @if (auth()->user()->can('master_data_edit') || auth()->user()->can('master_data_delete'))
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @can('master_data_edit')
                                                            <a class="dropdown-item"
                                                                href="{{ route('learning-design.master-data.levels.edit', $data->id) }}">Edit</a>
                                                        @endcan
                                                        @can('master_data_delete')
                                                            <form
                                                                action="{{ route('learning-design.master-data.levels.destroy', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item submit-delete"
                                                                    data-method="delete">Delete</button>
                                                            </form>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">Select Status..</option>
                                            @foreach ($status_syllabuses as $status_syllabus )
                                                <option value="{{ $status_syllabus->id }}">{{ $status_syllabus->name }}</option>
                                            @endforeach
                                        </select>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
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
    $(document).ready( function() {
        var table = $('#example').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        "pagingType": "numbers",
        "ajax": "{{ route('setup-settings.vendors.syllabuses.getAjaxVendorSyllabuses', $vendor->id) }}",
        "columns":[
            { data: 'syllabus_code', name: 'syllabus_code' },
            { data: 'training_name', name: 'training_name'  },
            { data: 'status_name', name: 'syllabuses_statuses.id'},
            ]
        });

        $('.filter-select').change(function() {
            table.column( $(this).data('column'))
                .search( $(this).val() )
                .draw();
        });
    });
</script>
<script>
    $("body").on("click", "a.modal-global", function (e) {
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
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + vendor['partner_name'] + `</span>
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
                                <div class="col-12">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Level</h4>
                                            ` + levels_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Status</h4>
                                            ` + statuses_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Location</h4>
                                            ` + locations_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
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
                            
                            <div class="border p-3">
                            ` + vendors_section + `
                            </div>
                        </div>
                    </div>
                </div>
            `)
            });
    });
</script>
@endpush
