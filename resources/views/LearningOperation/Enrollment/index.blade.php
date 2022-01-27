@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Enrollment'
=>'']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold mb-3">Enrollment</h1>

                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Enrollment Training Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>Enrollment E-Learning</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Daftar Class</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="tableElearning">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Nama Training</th>
                                                <th class="text-right" scope="col" class="sort">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($trainingclasses as $trainingclass)
                                                <tr>
                                                    <td>
                                                        <a
                                                            href="{{ route('learning-operation.enrollment.class.show', $trainingclass->id) }}">{{ $trainingclass->name }}</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{ route('learning-operation.enrollment.class.show', $trainingclass->id) }}"
                                                            class="mr-2">
                                                            <button class="btn btn-sm btn-primary btn-icon text-center">
                                                                <i class="far fa-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a
                                                            href="{{ route('learning-operation.enrollment.class.create', $trainingclass->id) }}">
                                                            <button
                                                                class="btn btn-sm btn-success btn-icon text-center enroll-class-btn">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Daftar Elearning</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="tableClass">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Nama Training</th>
                                                <th class="text-right" scope="col" class="sort">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($elearnings as $elearning)
                                                <tr>
                                                    <td><a
                                                            href="{{ route('learning-operation.enrollment.elearning.show', $elearning->id) }}">{{ $elearning->name }}</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{ route('learning-operation.enrollment.elearning.show', $elearning->id) }}"
                                                            class="mr-2">
                                                            <button class="btn btn-sm btn-primary btn-icon text-center">
                                                                <i class="far fa-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a
                                                            href="{{ route('learning-operation.enrollment.elearning.create', $elearning->id) }}">
                                                            <button
                                                                class="btn btn-sm btn-success btn-icon text-center enroll-elearning-btn">
                                                                <i class="  fas fa-plus"></i>
                                                            </button>
                                                        </a>
                                                    </td>
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
    </div>

@endsection


@push('js')
    <script>
        $('#tableClass').DataTable({
            "pagingType": "numbers"
        });
        $('#tableElearning').DataTable({
            "pagingType": "numbers"
        });
    </script>

    <script>
        $('.enroll-elearning-btn').on('click', function() {
            $('#elearning-id').val($(this).data("elearning-id"))
        })
        $('.enroll-class-btn').on('click', function() {
            $('#class-id').val($(this).data("class-id"))
        })
    </script>
@endpush
