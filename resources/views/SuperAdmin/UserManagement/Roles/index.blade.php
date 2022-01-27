@extends('layouts.app', ['pagename' => 'Roles List'])

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
                                <h3 class="mb-0">Role Management</h3>
                            </div>
                            @can('role_create')
                                <div class="col-4 text-right">
                                    <a href="{{ route('super-admin.user-management.roles.create') }}"
                                        class="btn btn-sm btn-primary">Add role</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Roles Name</th>
                                    <th scope="col" class="sort" data-sort="name">Permission</th>
                                    <th class="text-right" scope="col" class="sort" data-sort="name">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @foreach ($role->permissions as $permission)
                                                <span class="badge badge-primary mb-1 mr-1">{{ $permission->name }}</span>
                                                @if ($count == 8)
                                                    <br>
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                @else
                                                    @php
                                                        $count++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @can('role_edit')
                                                        <a class="dropdown-item"
                                                            href="{{ route('super-admin.user-management.roles.edit', [$role->id]) }}">Edit</a>
                                                    @endcan
                                                    @can('role_delete')
                                                        <form
                                                            action="{{ route('super-admin.user-management.roles.destroy', [$role->id]) }}"
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
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script type="text/javascript">
        $('.submit-delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this role?`,
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
