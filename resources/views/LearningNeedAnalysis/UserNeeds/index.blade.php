@extends('layouts.app', ['pagename' => 'User Needs'])


@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8">
        <div class="row mt-5">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 class="mb-0">History User Needs</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('learning-need-analysis.user-needs.create') }}"
                                    class="btn btn-icon btn btn-3 btn-primary">
                                    <span class="btn-inner--text">Add User Needs</span>
                                </a>
                                {{-- <a href="{{ route('learning-need-analysis.request-syllabuses.index') }}"
                                    class="btn btn-icon btn-sm btn-3 btn-primary">
                                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                                    <span class="btn-inner--text">Request Syllabus</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive p-4">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Name Of Program</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th scope="col" class="sort" data-sort="created_at">Created At</th>
                                    <th class="text-center" scope="col" class="sort" data-sort="name">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($user_needs as $user_need)
                                    <tr>
                                        <td>{{ $user_need->name_of_program }}</td>
                                        <td>{{ $user_need->userNeedStatus->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user_need->date)->format('d F Y') }} ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($user_need->created_at))->diffForHumans() }})</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('learning-need-analysis.user-needs.show', $user_need->id) }}"
                                                    class="btn btn-sm btn-primary btn-icon" type="button" >View
                                                </a>
                                                <form action="{{ route('learning-need-analysis.user-needs.destroy', $user_need->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                </form>
                                            </div>
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

@endsection


@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers",
            "order": [[ 3, "desc" ]]
        });
    </script>
@endpush
