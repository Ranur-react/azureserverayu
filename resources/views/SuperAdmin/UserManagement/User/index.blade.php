@extends('layouts.app', ['pagename' => 'Users List'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        @if (session('delete_user_message_success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">{!! session('delete_user_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        @if (session('restore_user_message_success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">{!! session('restore_user_message_success') !!}</span>
                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="bg-darker">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">User Management</h3>
                            </div>
                            @can('user_create')
                                <div class="col-4 text-right">
                                    <a href="{{ route('super-admin.user-management.users.create') }}"
                                        class="btn btn-sm btn-primary">Add user</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="email">Email</th>
                                    <th scope="col" class="sort" data-sort="role">Role</th>
                                    <th scope="col" class="sort" data-sort="created_at">Created At</th>
                                    <th scope="col" class="sort" data-sort="updated_at">Last Update</th>
                                    <th class="text-right" scope="col" class="sort" data-sort="name">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                {{ $role->name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $user->created_at }}
                                        </td>
                                        <td>
                                            {{ $user->updated_at->diffForHumans() }}
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @can('user_edit')
                                                        <a class="dropdown-item"
                                                            href="{{ route('super-admin.user-management.users.edit', [$user->id]) }}">Edit</a>
                                                    @endcan
                                                    @can('user_delete')
                                                        <form
                                                            action="{{ route('super-admin.user-management.users.destroy', [$user->id]) }}"
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    Try this
    <script> if (window.performance) { var navEntries = window.performance.getEntriesByType('navigation'); if (navEntries.length > 0 && navEntries[0].type === 'back_forward') { console.log('As per API lv2, this page is load from back/forward'); } else if (window.performance.navigation && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) { console.log('As per API lv1, this page is load from back/forward'); } else { console.log('This is normal page load'); @if (Session::has('sweet_alert.alert')) swal( {!! Session::get('sweet_alert.alert') !!} ); {{ Session::forget('sweet_alert.alert') }} // This will forget the alert data after displaying it :) @endif } } else { console.log("Unfortunately, your browser doesn't support this API"); } </script>
@endpush
