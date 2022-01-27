@extends('layouts.app', ['pagename' => 'Permissions List'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col d-flex justify-content-between">
                                {{-- <div class="col-8"> --}}
                                <h3 class="mb-0">Permission Management</h3>
                                {{-- </div> --}}
                                @can('permission_create')
                                    <div class="text-right">
                                        <a href="{{ route('super-admin.user-management.permissions.create') }}"
                                            class="btn btn-sm btn-primary">Add Permission</a>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Permission Name</th>
                                    <th class="text-right" scope="col" class="sort" data-sort="name">Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody class="list">
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>
                                            {{ $permission->name }}
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @can('permission_edit')
                                                        <a class="dropdown-item"
                                                            href="{{ route('super-admin.user-management.permissions.edit', [$permission->id]) }}">Edit</a>
                                                    @endcan
                                                    @can('permission_delete')
                                                        <form
                                                            action="{{ route('super-admin.user-management.permissions.destroy', [$permission->id]) }}"
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4 text-right">
                        {{ $permissions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $('.submit-delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this permission?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
