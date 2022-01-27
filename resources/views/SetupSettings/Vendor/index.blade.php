@extends('layouts.app', ['pagename' => 'Vendors'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">

        <div class="card shadow rounded">
            <div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h3 class="mb-0">List Vendor</h3>
                            @can('vendor_create')
                            <div class="text-right">
                                <a href="{{ route('setup-settings.vendors.create') }}"
                                    class="btn btn-primary">Add Vendor</a>
                            </div>
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
                                        PT Name</th>
                                    <th scope="col" class="sort" data-sort="name">
                                        Partner Name</th>
                                    <th scope="col" class="sort" data-sort="name">
                                        Status</th>
                                    @if (auth()->user()->can('vendor_edit') || auth()->user()->can('vendor_delete'))
                                        <th class="text-center" scope="col" class="sort" data-sort="name">
                                        Action
                                    @else
                                        <th class="text-center" scope="col" class="sort" data-sort="action">

                                        </th>
                                    @endif
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($vendors as $vendor)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="{{ $vendor->getFirstMediaUrl('vendor_logo', 'avatar') }}">
                                                </a>
                                                <a href="{{ route('setup-settings.vendors.syllabuses.index', $vendor->id) }}"
                                                    class="media-body">
                                                    <span class="name mb-0 text-sm">{{ $vendor->partner_name }} </span>
                                                </a>
                                            </div>
                                        </th>
                                        <td>
                                            {{ $vendor->pt_name }}
                                        </td>
                                        <td>
                                            {{ $vendor->address }}
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item"
                                                        href="{{ route('setup-settings.vendors.edit', $vendor->id) }}">Edit</a>
                                                    <form
                                                        action="{{ route('setup-settings.vendors.destroy', $vendor->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item"
                                                            data-method="delete">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">Select Status..</option>
                                            @foreach ($vendorStatuses as $vendorStatus)
                                                <option value="{{ $vendorStatus->id }}">{{ $vendorStatus->name }}</option>
                                            @endforeach
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
            "ajax": "{{ route('setup-settings.vendors.getAjaxVendors') }}",
            "columns":[
                { data: 'pt_name', name: 'pt_name' },
                { data: 'partner_name', name: 'partner_name'},
                {
                        data: 'status_id',
                        name: 'vendorStatus.id'
                },
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
