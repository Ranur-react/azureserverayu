@extends('layouts.app', ['pagename' => 'Request User Needs'])

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
                                <h3 class="mb-0">Request User Needs</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Syllabus Name</th>
                                        <th scope="col" class="sort" data-sort="job-family">Job Family</th>
                                        <th scope="col" class="sort" data-sort="category">Category</th>
                                        <th scope="col" class="sort" data-sort="created-at">Created At</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                        <th class="text-center" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="text-wrap">
                                            <a href="">
                                                Marketing Analytics
                                            </a>
                                        </td>
                                        <td class="text-wrap">
                                            Product & Marketing Management
                                        </td>
                                        <td>
                                            Technical Skill
                                        </td>
                                        <td>
                                            27 September 2021
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-muted mb-1 mr-1">Pending</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary btn-icon mr-2" type="button"
                                                data-toggle="modal" data-target="#exampleModal">
                                                <i class="far fa-eye"></i>
                                            </button>
                                            <a href="#">
                                                <button class="btn btn-sm btn-success btn-icon mr-2" type="button">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-sm btn-danger btn-icon" type="button">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-wrap">
                                            <a href="">
                                                Marketing Analytics
                                            </a>
                                        </td>
                                        <td class="text-wrap">
                                            Product & Marketing Management
                                        </td>
                                        <td>
                                            Technical Skill
                                        </td>
                                        <td>
                                            27 September 2021
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-success mb-1 mr-1">Approved</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary btn-icon mr-2" type="button"
                                                data-toggle="modal" data-target="#exampleModal">
                                                <i class="far fa-eye"></i>
                                            </button>
                                            <a href="#">
                                                <button class="btn btn-sm btn-success btn-icon mr-2" disabled type="button">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-sm btn-danger btn-icon" type="button">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-wrap">
                                            <a href="">
                                                Marketing Analytics
                                            </a>
                                        </td>
                                        <td class="text-wrap">
                                            Product & Marketing Management
                                        </td>
                                        <td>
                                            Technical Skill
                                        </td>
                                        <td>
                                            27 September 2021
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-danger mb-1 mr-1">Rejected</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary btn-icon mr-2" type="button"
                                                data-toggle="modal" data-target="#exampleModal">
                                                <i class="far fa-eye"></i>
                                            </button>
                                            <a href="#">
                                                <button class="btn btn-sm btn-success btn-icon mr-2" type="button">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-sm btn-danger btn-icon" disabled type="button">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </a>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Needs Summary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <h3 class="mb-4">Daftar Karyawan</h3>
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
                                </tr>
                            </thead>
                            <tbody class="list">
                                @for ($i = 0; $i < 20; $i++)

                                    <tr>
                                        <td>12429</td>
                                        <td>Nahdatul Choir</td>
                                        <td>Senior Learning Architect</td>
                                        <td>Learning Architect Team</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
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
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
