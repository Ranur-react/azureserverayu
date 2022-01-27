@extends('layouts.app', ['pagename' => 'Competency'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt-lg--7 mt--8 mb-5">
        <div class="card shadow rounded">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Competency</h3>
                            @can('competency_create')
                                <div class="text-right">
                                    <a href="{{ route('setup-settings.competencies.create') }}"
                                        class="btn btn-primary">Add Competency</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1">
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">
                                        Name</th>
                                    <th scope="col" class="sort" data-sort="type">
                                        Competency Type</th>
                                    <th scope="col" class="sort" data-sort="status">
                                            Competency Status</th>
                                    @if (auth()->user()->can('competency_edit') || auth()->user()->can('competency_delete'))
                                        <th class="text-center" scope="col" class="sort" data-sort="action">
                                            Action
                                        </th>
                                    @else
                                        <th class="text-center" scope="col" class="sort" data-sort="action">

                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($competencies as $competency)
                                    <tr>
                                        <td>
                                            <a
                                                href="{{ route('learning-design.setup-settings.competencies.syllabuses.index', $competency->id) }}">{{ $competency->name }}</a>
                                        </td>
                                        <td>
                                           {{ $competency->type }}
                                        </td>
                                        <td>
                                            @if ($competency->status == 0)
                                                Deactive
                                            @endif
                                            @if ($competency->status == 1)
                                                Active
                                            @endif
                                         </td>
                                        @if (auth()->user()->can('competency_edit') || auth()->user()->can('competency_delete'))
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @can('competency_edit')
                                                            <a class="dropdown-item"
                                                                href="{{ route('learning-design.setup-settings.competencies.edit', $competency->id) }}">Edit</a>
                                                        @endcan
                                                        @can('competency_delete')
                                                            <form
                                                                action="{{ route('learning-design.setup-settings.competencies.destroy', $competency->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item submit-delete"
                                                                    data-method="delete">Delete</button>
                                                            </form>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <select data-column="1" class="form-control filter-select">
                                            <option value="">Select Type..</option>
                                            @foreach ($competency_types as $competency_type )
                                                <option value="{{ $competency_type }}">{{ $competency_type }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">Select Status..</option>
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    $(document).ready( function() {
        var table = $('#example').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        "pagingType": "numbers",
        "ajax": "{{ route('setup-settings.competencies.getAjaxCompetencies') }}",
        "columns":[
            { data: 'name', name: 'name' },
            { data: 'type', name: 'type'},
            { data: 'status_id', name: 'status'},
            { data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('.filter-select').change(function() {
            table.column( $(this).data('column'))
                .search( $(this).val() )
                .draw();
        });
    });
</script>
@endpush
