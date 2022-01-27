@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Enrollment'
=>'/learning-operation/enrollment', $training->name =>
'']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Daftar Enrollment - {{ $training->name }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="tableKaryawan">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="nik">
                                            NIK
                                        </th>
                                        <th scope="col" class="sort" data-sort="name">
                                            Nama Karyawan</th>
                                        <th scope="col" class="sort" data-sort="title">
                                            Title
                                        </th>
                                        <th scope="col" class="sort" data-sort="organization">
                                            Organization
                                        </th>
                                        @if ($type == 'elearning')
                                            <th scope="col" class="sort" data-sort="start_date">
                                                Start Date
                                            </th>
                                            <th scope="col" class="sort" data-sort="end_date">
                                                End Date
                                            </th>
                                        @endif
                                        <th scope="col" class="sort" data-sort="status">
                                            Status
                                        </th>
                                        <th class="text-center" scope="col" class="sort" data-sort="name">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->nik }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td class="text-wrap">{{ $user->title }}</td>
                                            <td class="text-wrap">{{ $user->organization }}</td>
                                            @if ($type == 'elearning')
                                                <td>{{ \Carbon\Carbon::parse($user->start_date)->format('d M Y') }}</td>
                                                <td>{{ $user->end_date ? \Carbon\Carbon::parse($user->end_date)->format('d M Y') : '-' }}
                                                </td>
                                            @endif
                                            <td>{{ $user->status }}</td>
                                            <td class="text-center">
                                                <form
                                                    action="{{ route('learning-operation.enrollment.destroy', $user->enroll_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger btn-icon text-center submit-delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
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
@endsection


@push('js')
    <script>
        $('#tableKaryawan').DataTable({
            "pagingType": "numbers"
        });
    </script>

    <script>
        $('.submit-delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this enrollment?`,
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
