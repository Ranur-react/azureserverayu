@extends('layouts.app', ['pagename' => 'Daftar Karyawan'])

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
                                <h3 class="mb-0">Daftar Karyawan</h3>
                            </div>
                            @can('user_create')
                                <div class="col-4 text-right">
                                    <a href="/super-admin/create-karyawan" class="btn btn-sm btn-primary">Add user</a>
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
                                        <th scope="col" class="sort" data-sort="title">Title</th>
                                        <th scope="col" class="sort" data-sort="organization">Organization</th>
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
                                            Senior Learning Architect
                                        </td>
                                        <td>
                                            Talent and Learning Expert Team
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

@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
