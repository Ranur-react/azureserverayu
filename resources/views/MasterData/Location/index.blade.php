@extends('layouts.app', ['pagename' => 'Locations'])

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
                            <h3 class="mb-0">List Locations</h3>
                            <div class="text-right">
                                <a href="{{ route('master-data.locations.export') }}" class="btn btn-icon btn-3 btn-primary">Export Excel</a>
                                @can('master_data_create')
                                <button class="btn btn-icon btn-3 btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Import Excel</button>
                                    <a href="{{ route('master-data.locations.create') }}" class="btn btn-icon btn-3 btn-primary">Add Location</a>
                                </button>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1">
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="location_code">
                                        Location Code</th>
                                    <th scope="col" class="sort" data-sort="description">
                                        Description</th>
                                    <th scope="col" class="sort" data-sort="address_line_1">
                                        Address Line 1</th>
                                    <th scope="col" class="sort" data-sort="town_or_city">
                                        Town Or City</th>
                                    @if (auth()->user()->can('master_data_edit') || auth()->user()->can('master_data_delete'))
                                        <th class="text-right" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    @else
                                        <th class="text-right" scope="col" class="sort" data-sort="name">

                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($locations as $data)
                                    <tr>
                                        <td>
                                            <a href="{{ route('learning-design.master-data.locations.syllabuses.index', $data->id) }}">
                                            {{ $data->name }}
                                            </a>
                                        </td>
                                        @if (auth()->user()->can('master_data_edit') || auth()->user()->can('master_data_delete'))
                                            <td class="text-right">
                                                <div class="d-flex justify-content-end">
                                                    @can('master_data_edit')
                                                        <a href="{{ route('learning-design.master-data.locations.edit', $data->id) }}"
                                                            class="btn btn-sm btn-primary btn-icon" type="button" >Edit
                                                        </a>
                                                    @endcan
                                                    @can('master_data_edit')
                                                    <form action="{{ route('learning-design.master-data.locations.destroy', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                    </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @can('master_data_create')
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Location Excel
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('master-data.locations.import') }}"
                        enctype="multipart/form-data"
                        method="post">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-control-label" for="input-import-file">Excel Format</label>
                                <br>
                                <a href="{{ route('master-data.locations.downloadFormat') }}">Click here to download excel format</a>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-import-file">Choose Excel File</label>
                                <input type="file" name="import_file" id="input-import-file" class="form-control" placeholder="" required autofocus>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan
@endsection
@push('js')
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            "pagingType": "numbers",
            "ajax": "{{ route('master-data.locations.getAjaxLocations') }}",
            "columns": [
                {
                    data: 'location_code',
                    name: 'location_code'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'address_line_1',
                    name: 'address_line_1'
                },
                {
                    data: 'town_or_city',
                    name: 'town_or_city'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
@endpush
