@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'User Needs'
=>'']])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8">
        <div class="row mt-5">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">User Needs - List Training Syllabus</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('learning-design.learning-need-analysis.request-syllabuses.index') }}"
                                    class="btn btn-icon btn-sm btn-3 btn-primary" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                                    <span class="btn-inner--text">Request Syllabus</span>
                                </a>
                                <button type="button"
                                    class="btn btn-sm bg-yellow icon icon-shape text-white rounded-circle shadow-lg"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="cart-badge">{{ $cart_user_need_count }}</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive p-4">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Daftar Training</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($competencies as $competency)
                                    <tr>
                                        <td>
                                            <a class="d-flex justify-content-between" data-toggle="collapse"
                                                href="#collapse{{ $competency->id }}" role="button"
                                                aria-expanded="false" aria-controls="collapseMenu1">
                                                <div>{{ $competency->name }}</div>
                                                <div class="text-right"><i class="fas fa-chevron-down"></i>
                                                </div>
                                            </a>
                                            @forelse($competency->syllabuses as $syllabus)
                                                <div class="collapse" id="collapse{{ $competency->id }}">
                                                    <div class="row p-2">
                                                        <div class="col bg-secondary p-3">
                                                            <a href="{{ route('api.syllabuses.show', $syllabus->id) }}"
                                                                class="pe-auto modal-global">
                                                                <h4 class="mb-0">
                                                                    {{ $syllabus->training_name }}</h4>
                                                            </a>
                                                            <p class="text-xs">Customer Insight, Market
                                                                Insight,
                                                                {{ $syllabus->training_summary }}
                                                            </p>
                                                            @if ($cart_user_need->where('id', $syllabus->id)->count())
                                                                In Cart
                                                            @else
                                                                <form method="POST"
                                                                    action="{{ route('learning-design.learning-need-analysis.carts-user-needs.store') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="syllabus_id"
                                                                        value="{{ $syllabus->id }}">
                                                                    <button type="submit"
                                                                        class="btn btn-icon btn-sm btn-3 btn-primary mb-2">
                                                                        Add to Cart
                                                                    </button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="collapse" id="collapse{{ $competency->id }}">
                                                    <div class="row p-2">
                                                        <div class="col bg-secondary p-3">
                                                            Syllabus Not Found.
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">History User Needs</h3>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive p-4">
                        <table class="table align-items-center table-flush" id="exampleHistory">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Syllabus Name</th>
                                    <th scope="col" class="sort" data-sort="request">Jumlah karyawan yang didaftarkan </th>
                                    <th scope="col" class="sort" data-sort="action">Status</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>

                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($user_needs_history as $user_need_history)
                                    <tr>
                                        <td>{{ $user_need_history->training_name }}  </td>
                                        <td>{{ $user_need_history->count }}  </td>
                                        <td>{{ $user_need_history->status_name }}  </td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-primary btn-icon text-center"
                                                id="button1" onclick="showModal({{ $user_need_history->syllabus_id }})">
                                                Lihat
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
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
                <div class="px-4">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                    href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                    aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Syllabus Summary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                    href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                    aria-selected="false"><i class="fas fa-user mr-2"></i>Daftar Karyawan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <h3 class="mb-4">Syllabus Summary</h3>
                            <ol class="pl-0" id="simpleList">
                                @foreach ($cart_user_need as $key => $row)
                                    <li class="list-group-item border-top mb-3 bg-secondary"
                                        data-id="{{ $row->model->id }}">
                                        <div class="row mt-2 p-2">
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="mb-0">{{ $row->name }}</h4>
                                                    <form method="POST"
                                                        action="{{ route('learning-design.learning-need-analysis.carts-user-needs.destroy', $row->rowId) }}"
                                                        class="mb-0" id="formCart">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn badge badge-circle badge-circle-custom badge-danger">
                                                            <i class="fas fa-minus text-xxs"></i></button>
                                                    </form>
                                                </div>
                                                <p class="text-xxs text-muted font-weight-normal mb-1">
                                                    {{ $row->model->syllabus_code ?? '' }}
                                                </p>
                                                <p class="text-xs mb-0">
                                                    {{ $row->model->training_summary ?? '' }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <form id="form" action="{{ route('learning-design.learning-need-analysis.user-needs.store') }}" method="POST">
                                {{ csrf_field() }}
                            <h3 class="mb-4">Daftar Karyawan</h3>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="user">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="nik">NIK</th>
                                            <th scope="col" class="sort" data-sort="name">Nama
                                                Karyawan</th>
                                            <th scope="col" class="sort" data-sort="title">Title
                                            </th>
                                            <th scope="col" class="sort" data-sort="organization">
                                                Organization</th>
                                            <th class="text-center">
                                                    <div class="custom-control custom-checkbox ml-2">
                                                        <input type="checkbox" id="selectAll" class="custom-control-input"
                                                            name="selectAll">
                                                        <label class="custom-control-label" for="selectAll"></label>
                                                    </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach (auth()->user()->userAtasan as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->nik }}
                                                </td>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $user->title }}
                                                </td>
                                                <td class="text-wrap">
                                                    {{ $user->organization }}
                                                </td>
                                                <td class="text-center">
                                                    @if(in_array($user->id, $userEnroll))
                                                       <!-- Button trigger modal -->
                                                       <p>User telah di assign pada syllabus yang ada pilih</p>
                                                    @else
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                class="users-class custom-control-input"
                                                                value="{{ $user->id }}" name="users[]"
                                                                id="customCheck1.{{ $loop->index }}">
                                                            <label class="custom-control-label"
                                                                for="customCheck1.{{ $loop->index }}"></label>
                                                        </div>  
                                                    @endif  
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</a>
                </div>
                </form>
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
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalKaryawan" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="tableKaryawan">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nik">NIK</th>
                                    <th scope="col" class="sort" data-sort="name">Nama
                                        Karyawan</th>
                                    <th scope="col" class="sort" data-sort="title">Title
                                    </th>
                                    <th scope="col" class="sort" data-sort="organization">
                                        Organization</th>
                                    <th scope="col" class="sort" data-sort="action">
                                            Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": ({
                    url: "{{ route('learning-design.learning-need-analysis.user-needs.showUserNeedSyllabus') }}",
                }),
                "columns": [
                    { data: 'competencies', name: 'competencies.name'}, 
                    { data: 'syllabuses', name: 'syllabuses.training_name', searchable: true, sortable : true, visible:false },
                ]
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('#exampleHistory').DataTable({
                "pagingType": "numbers",
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": ({
                    url: "{{ route('learning-design.learning-need-analysis.user-needs.historyAtasanUserNeeds') }}",
                }),
                "columns": [
                    { data: 'training_name', name: 'syllabuses.training_name'}, 
                    { data: 'count', name: 'count', "orderable": false,
    "searchable": false}, 
                    { data: 'status_id', name: 'status_id'}, 
                    { data: 'action', name: 'action'}, 
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#user').DataTable({
                "pagingType": "numbers",
                "columnDefs": [
                    { "orderable": false, "targets": 4 },
                ]
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#formCart").submit(function() {
                $(this).submit(function() {
                    return false;
                });
                return true;
            });
        });
    </script>

    <script>
        $("body").on("click", "a.modal-global", function(e) {
            event.preventDefault();

            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(response) {
                var competencies_section = ``
                var vendors_section = ``
                var levels_section = ``
                var statuses_section = ``
                var locations_section = ``
                var units_section = ``

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
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + location['name'] + `</span>
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
      $("body").on("click", "a.modal-karyawan", function (e) {
        event.preventDefault();

        var url = $(this).attr('href');

        $("#exampleModalKaryawan").modal('show');
      
        $('#tableKaryawan').DataTable({
            "bDestroy": true,
            "pagingType": "numbers",
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url,
            },
            "columns": [
                {
                    data: 'nik',
                    name: 'users.nik'
                },
                {
                    data: 'name',
                    name: 'users.name'
                },
                {
                    data: 'title',
                    name: 'users.title'
                },
                {
                    data: 'organization',
                    name: 'users.organization'
                },
            ]
        });
    });
    </script>
    <script>
        $(function() {
            $('#selectAll').click(function() {
                if ($(this).prop('checked')) {
                    $('.users-class').prop('checked', true);
                } else {
                    $('.users-class').prop('checked', false);
                }
            });

        });
    </script>
@endpush
