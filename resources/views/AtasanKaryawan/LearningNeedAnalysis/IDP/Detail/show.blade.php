@extends('layouts.app', ['pagename' => 'Training Plan Semester 2 - 2021'])

@section('content')

    @php
    $training = true;
    @endphp

    @include('layouts.headers.auth')

    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="p-md-2 p-1">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-sm text-muted mb-0">NIK 92101</h5>
                                            <h2 class="text-xl font-weight-extrabold">Satya Wicaksana Mukhlisin</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Title :</span> Training and
                                                Knowledge
                                                System Operations Officer</p>
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Organization :</span> Training
                                                and
                                                Knowledge System Operations Department</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Assessor :</span> A'an Nawang
                                                Wulan</p>
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Reviewer :</span> Ina
                                                Patmintarti C. W.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="text-uppercase">Sasaran Kerja Yang Diambil</h4>
                                    <p class="text-sm font-weight-bold text-uppercase text-muted">Periode 2021 - 2022</p>
                                </div>
                                @if (!$training)
                                    <div class="d-sm-none d-block col-4">
                                        <button type="button"
                                            class="float-right btn btn-sm bg-yellow icon icon-shape text-white rounded-circle shadow-lg"
                                            data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            @if ($training)
                                <div class="table-responsive">
                                    <table class="table table-flush align-items-center ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="no">#</th>
                                                <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                                <th scope="col" class="sort" data-sort="desc">Deskripsi Syllabus
                                                </th>
                                                <th scope="col" class="sort" data-sort="competency">Kompetensi
                                                    Yang
                                                    Dicapai</th>
                                                <th class="text-right" scope="col" class="sort"
                                                    data-sort="name">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td class="text-wrap">
                                                    Marketing Analytics
                                                </td>
                                                <td class="text-wrap">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in nulla
                                                    sed nunc convallis rutrum quis ac orci. Cras tempus lectus in tellus
                                                    feugiat tempus. Mauris aliquet sit amet lacus quis semper. Quisque
                                                    rutrum, velit viverra pulvinar efficitur, lectus dui pellentesque velit,
                                                    nec efficitur tortor felis sit amet risus. Duis efficitur nisl nec sem
                                                    interdum, vel dapibus nulla elementum. Vestibulum elementum sem
                                                    vestibulum, facilisis quam aliquam, venenatis ipsum. Cras id elementum
                                                    massa, vel tincidunt velit.
                                                </td>
                                                <td class="text-wrap">
                                                    <ul>

                                                        <li>Marketing Strategy</li>
                                                        <li>Marketing Management</li>
                                                        <li>Marketing Plan</li>
                                                        <li>Marketing Basic</li>
                                                    </ul>
                                                </td>
                                                <td class="text-right">
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
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Daftar Training</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>
                                                    <a class="d-flex justify-content-between" data-toggle="collapse"
                                                        href="#collapseMenu1" role="button" aria-expanded="false"
                                                        aria-controls="collapseMenu1">
                                                        <div>Product & Marketing Management</div>
                                                        <div class="text-right"><i class="fas fa-chevron-down"></i>
                                                        </div>
                                                    </a>
                                                    <div class="collapse" id="collapseMenu1">
                                                        <div class="row p-2">
                                                            <div class="col bg-secondary p-3">
                                                                <h4 class="mb-0">Marketing Analysis</h4>
                                                                <p class="text-xxs text-muted font-weight-normal mb-1">
                                                                    General
                                                                    Knowledge
                                                                </p>
                                                                <p class="text-xs">Customer Insight, Market Insight,
                                                                    Applied Market Research, Marketing data, and
                                                                    Professional
                                                                    Analytics based from data research.
                                                                </p>
                                                                <button type="button"
                                                                    class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                                                                    Add to Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row p-2">
                                                            <div class="col bg-secondary p-3">
                                                                <h4 class="mb-0">Marketing Analysis</h4>
                                                                <p class="text-xxs text-muted font-weight-normal mb-1">
                                                                    Technical
                                                                    Competency
                                                                </p>
                                                                <p class="text-xs">Customer Insight, Market Insight,
                                                                    Applied Market Research, Marketing data, and
                                                                    Professional
                                                                    Analytics based from data research.
                                                                </p>
                                                                <button type="button"
                                                                    class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                                                                    Add to Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="d-flex justify-content-between" data-toggle="collapse"
                                                        href="#collapseMenu2" role="button" aria-expanded="false"
                                                        aria-controls="collapseMenu2">
                                                        <div>Human Capital Management</div>
                                                        <div class="text-right"><i class="fas fa-chevron-down"></i>
                                                        </div>
                                                    </a>
                                                    <div class="collapse" id="collapseMenu2">
                                                        <div class="row p-2">
                                                            <div class="col bg-secondary p-3">
                                                                <h4 class="mb-0">Marketing Analysis</h4>
                                                                <p class="text-xxs text-muted font-weight-normal mb-1">
                                                                    ABC123
                                                                </p>
                                                                <p class="text-xs">Customer Insight, Market Insight,
                                                                    Applied Market Research, Marketing data, and
                                                                    Professional
                                                                    Analytics based from data research.
                                                                </p>
                                                                <button type="button"
                                                                    class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                                                                    Add to Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row p-2">
                                                            <div class="col bg-secondary p-3">
                                                                <h4 class="mb-0">Marketing Analysis</h4>
                                                                <p class="text-xxs text-muted font-weight-normal mb-1">
                                                                    ABC123
                                                                </p>
                                                                <p class="text-xs">Customer Insight, Market Insight,
                                                                    Applied Market Research, Marketing data, and
                                                                    Professional
                                                                    Analytics based from data research.
                                                                </p>
                                                                <button type="button"
                                                                    class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                                                                    Add to Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Training Plan Summary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <ol class="pl-4">
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row mt-2 p-2">
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Marketing Analysis</h4>
                                        <span class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                class="fas fa-minus text-xxs"></i></span>
                                    </div>
                                    <p class="text-xxs text-muted font-weight-normal mb-1">ABC123
                                    </p>
                                    <p class="text-xs mb-0">Customer Insight, Market Insight,
                                        Applied Market Research, Marketing data, and Professional
                                        Analytics based from data research.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <div class="custom-control custom-checkbox mb-5">
                        <input class="custom-control-input" id="customCheck1" type="checkbox">
                        <label class="custom-control-label" for="customCheck1">Dengan ini saya menyatakan bahwa training
                            plan yang dipilih telah melalui diskusi dengan pihak karyawan.</label>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
