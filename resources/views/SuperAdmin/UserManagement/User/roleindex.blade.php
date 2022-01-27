@extends('layouts.app', ['pagename' => 'Daftar Role'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        @if (session('delete_user_message_success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">{!! session('delete_user_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        @if (session('restore_user_message_success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">{!! session('restore_user_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Daftar Role</h3>
                            </div>
                            @can('user_create')
                                <div class="col-4 text-right">
                                    <a href="/super-admin/daftar-role/create" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">Assign Role</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="nik">NIK</th>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="email">Email</th>
                                        <th scope="col" class="sort" data-sort="title">Role</th>
                                        <th class="text-right" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td>
                                            81029
                                        </td>
                                        <td>
                                            Nahdatul Choir
                                        </td>
                                        <td>
                                            nahdatul_choir@telkomsel.co.id
                                        </td>
                                        <td>
                                            Learning Design Team
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assign Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form method="post" action="{{ route('learning-design.setup-settings.master-data.store') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="input-name">Name</label>
                        <input type="text" name="name" id="input-name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="input-category">Role</label>
                        <select class="form-control" name="role" id="input-role">
                            <option value="">Select role...</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Learning Design Team</option>
                            <option value="3">Learning Operation Team</option>
                        </select>
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

@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
