@extends('layouts.app', ['pagedirectory' => 
['IDP' =>'/learning-need-analysis/idp',
'Training Plan' => '/learning-need-analysis/idp/'. $employee->nik, 
'Add IDP' => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="p-md-2 p-1">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-sm text-muted mb-0">NIK {{ $employee->nik }}</h5>
                                            <h2 class="text-xl font-weight-extrabold">{{ $employee->name }}</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Title :
                                                </span>{{ $employee->title }}</p>
                                            <p class="text-sm font-weight-normal text-muted mb-0"><span
                                                    class="font-weight-bold text-uppercase">Organization :
                                                </span>{{ $employee->organization }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="font-weight-bold mb-2">Sasaran Kerja Yang Diambil</h3>
                                    <p class="text-sm font-weight-bold text-uppercase text-muted">Periode 2021 - 2022</p>
                                </div>

                                <div class="col-4">
                                    <button type="button"
                                        class="float-right btn btn-sm bg-yellow icon icon-shape text-white rounded-circle shadow-lg"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <span><i class="fas fa-shopping-cart"></i></span>
                                        <span class="cart-badge">{{ $cart_idp->count() }}</span>
                                    </button>
                                </div>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div>{{$error}}</div>
                                    @endforeach
                                @endif
                           
                            </div>
                            <div class="table-responsive">
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
                                                                    <p class="text-xs">
                                                                        Customer Insight, Market
                                                                        Insight,
                                                                        {{ $syllabus->training_summary }}
                                                                    </p>
                                                                    @if ($cart_idp->where('id', $syllabus->id)->count())
                                                                        In Cart
                                                                    @else
                                                                        <form method="POST"
                                                                            action="{{ route('learning-design.learning-need-analysis.carts-idp.store', [$user->id, $idpPeriod->id]) }}">
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
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Training Plan Summary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <ol class="pl-0" id="simpleList">
                        @forelse ($cart_idp as $row)
                            <li class="list-group-item border-top mb-3 bg-secondary" data-id="{{ $row->id }}">
                                <div class="row mt-2 p-2">
                                    <div class="col">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="mb-0">{{ $row->name }}</h4>
                                            <form method="POST"
                                                action="{{ route('learning-need-analysis.carts-idp.destroy', [$employee->nik, $idpPeriod->id, $row->rowId]) }}"
                                                class="mb-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                        class="fas fa-minus text-xxs"></i></button>
                                            </form>
                                        </div>
                                        <p class="text-xxs text-muted font-weight-normal mb-1">
                                            {{ \App\Models\Syllabus::where(['id' => $row->id])->value('syllabus_code') }}
                                            {{-- {{ $row->model->syllabus_code ?? '' }} --}}
                                        </p>
                                        <p class="text-xs mb-0">
                                            {{ \App\Models\Syllabus::where(['id' => $row->id])->value('training_summary') }}
                                            {{-- {{ $row->model->training_summary ?? '' }} --}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <div class="row justify-content-center mt-1">
                                <img src="https://img.icons8.com/external-bearicons-outline-color-bearicons/64/000000/external-empty-cart-essential-collection-bearicons-outline-color-bearicons.png"/>
                            </div>       
                            <div class="row justify-content-center mt-2 ml-2">
                                <p class="text-lg">Cart is empty.</p>
                            </div>  
                        @endforelse
                    </ol>
                </div>
                @if ($cart_idp->count() > 0)
                    <form method="POST" action="{{ route('learning-need-analysis.idp.store') }}">
                        @csrf
                        <div class="modal-footer pt-0">
                            <div class="custom-control custom-checkbox mb-5">
                                <input class="custom-control-input" id="customCheck1" type="checkbox" required>
                                <label class="custom-control-label" for="customCheck1">Dengan ini saya menyatakan bahwa training
                                    plan yang dipilih telah melalui diskusi dengan pihak karyawan.</label>
                            </div>
                            <input type="hidden" name="test" id="idp">
                            <input type="hidden" name="nik" value="{{ $employee->nik }}">
                            <input type="hidden" name="idp_period_id" value="{{ $idpPeriod->id }}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @endif
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

@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $("form").submit(function () {
                if ($(this).valid()) {
                    $(this).submit(function () {
                        return false;
                    });
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": ({
                    url: "{{ route('learning-need-analysis.idp.showIdpSyllabus') }}",
                    data: {
                        "nik": {{ $employee->nik }},
                        "idp_period_id": {{ $idpPeriod->id }}
                    },
                }),
                "columns": [
                    { data: 'competencies', name: 'prf_competency_catalog.name'}, 
                    { data: 'syllabuses', name: 'syllabuses.training_name', 
                    searchable: true, sortable : true, visible:false },
                ]
            });
        });
    </script>
    <script>
        Sortable.create(simpleList, {
            group: "localStorage-example",
            store: {
                /**
                 * Get the order of elements. Called once during initialization.
                 * @param   {Sortable}  sortable
                 * @returns {Array}
                 */
                get: function(sortable) {
                    var order = localStorage.getItem(sortable.options.group.name);
                    return order ? order.split('|') : [];
                },

                /**
                 * Save the order of elements. Called onEnd (when the item is dropped).
                 * @param {Sortable}  sortable
                 */
                set: function(sortable) {
                    var order = sortable.toArray();
                    localStorage.setItem(sortable.options.group.name, order.join('|'));
                    console.log(order);
                    document.getElementById("idp").value = order;
                }
            }
        })
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
                                <div class="col-lg-12">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Level</h4>
                                            ` + levels_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Status</h4>
                                            ` + statuses_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Location</h4>
                                            ` + locations_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
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
