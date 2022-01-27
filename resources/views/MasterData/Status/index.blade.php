@extends('layouts.app', ['pagename' => 'Statuses'])

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
                            <h3 class="mb-0">List Statuses</h3>
                            @can('master_data_create')
                            <button class="btn btn-icon btn-3 btn-primary" type="button" data-toggle="modal"
                                data-target="#exampleModal">Add Status
                            </button>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1">
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">
                                        Name</th>
                                    @if (auth()->user()->can('master_data_edit') || auth()->user()->can('master_data_delete'))
                                        <th class="text-right" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($statuses as $data)
                                    <tr>
                                        @can('master_data_syllabus_access')
                                            <td>
                                                <a href="{{ route('master-data.statuses.syllabuses.index', $data->id) }}">
                                                {{ $data->name }}
                                                </a>
                                            </td>
                                        @else
                                            <td>
                                                {{ $data->name }}
                                            </td>
                                        @endcan
                                        @if (auth()->user()->can('master_data_edit') || auth()->user()->can('master_data_delete'))
                                            <td class="text-right">
                                                <div class="d-flex justify-content-end">
                                                    @can('master_data_edit')
                                                        <a href="{{ route('master-data.statuses.edit', $data->id) }}"
                                                            class="btn btn-sm btn-primary btn-icon" type="button" >Edit
                                                        </a>

                                                    @endcan
                                                    @can('master_data_edit')
                                                    <form action="{{ route('master-data.statuses.destroy', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                    </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Status
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ route('master-data.statuses.store') }}">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-name">Name</label>
                                <input type="text" name="name" id="input-name" class="form-control" placeholder="" required autofocus>
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
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
