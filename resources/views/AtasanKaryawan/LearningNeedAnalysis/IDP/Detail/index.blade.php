@extends('layouts.app', ['pagename' => 'Training Plan'])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="p-md-2 p-1">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h5 class="text-sm text-muted mb-0">NIK 92101</h5>
                                    <h2 class="text-xl font-weight-extrabold">Satya Wicaksana Mukhlisin</h2>
                                    <p class="text-sm font-weight-normal text-muted mb-0"><span
                                            class="font-weight-bold text-uppercase">Title :</span> Training and Knowledge
                                        System Operations Officer</p>
                                    <p class="text-sm font-weight-normal text-muted mb-0"><span
                                            class="font-weight-bold text-uppercase">Organization :</span> Training and
                                        Knowledge System Operations Department</p>
                                </div>
                                <div class="col-lg-2">
                                    <img src="{{ asset('telkomsel') }}/img/mountain2.jpg" alt="..."
                                        style="height: 8rem; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="mb-5">
                                <h2 class="font-weight-bold mb-3">Training Plan</h2>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">#</th>
                                                <th scope="col" class="sort" data-sort="name">Year</th>
                                                <th scope="col" class="sort" data-sort="name">Period</th>
                                                <th scope="col" class="sort" data-sort="name">Title</th>
                                                <th scope="col" class="sort" data-sort="name">Organization</th>
                                                <th scope="col" class="sort" data-sort="name">Status</th>
                                                <th scope="col" class="sort" data-sort="name">Training</th>
                                                <th class="text-right" scope="col" class="sort"
                                                    data-sort="status">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <th scope="row">
                                                    NEW
                                                </th>
                                                <td>
                                                    2021
                                                </td>
                                                <td>
                                                    Semester 2 - 2021
                                                </td>
                                                <td class="text-wrap">
                                                    Staff Training Operations
                                                </td>
                                                <td class="text-wrap">
                                                    Human Capital Management Directorate
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-muted mb-1 mr-1">Empty</span>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td class="td-actions text-center">
                                                    <a href="/atasan-karyawan/learning-need-analysis/idp/1/detail"
                                                        class="btn btn-sm btn-success btn-icon" type="button"><i
                                                            class="fas fa-plus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    1
                                                </th>
                                                <td>
                                                    2019
                                                </td>
                                                <td>
                                                    Semester 2 - 2019
                                                </td>
                                                <td class="text-wrap">
                                                    Staff Training Operations
                                                </td>
                                                <td class="text-wrap">
                                                    Human Capital Management Directorate
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-success mb-1 mr-1">Approved</span>
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td class="td-actions text-center">
                                                    <a href="/atasan-karyawan/learning-need-analysis/idp/1/detail"
                                                        class="btn btn-sm btn-primary btn-icon" type="button"><i
                                                            class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    2
                                                </th>
                                                <td>
                                                    2019
                                                </td>
                                                <td>
                                                    Semester 2 - 2019
                                                </td>
                                                <td class="text-wrap">
                                                    Officer Technical Skill Learning
                                                </td>
                                                <td class="text-wrap">
                                                    Technical Skill Learning Team
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-danger mb-1 mr-1">Rejected</span>
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td class="td-actions text-center">
                                                    <a href="/atasan-karyawan/learning-need-analysis/idp/1/detail"
                                                        class="btn btn-sm btn-primary btn-icon" type="button"><i
                                                            class="fas fa-eye"></i></a>
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
        </div>
    </div>
@endsection
