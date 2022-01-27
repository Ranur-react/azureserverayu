@extends('layouts.app', ['pagename' => 'Request Training'])


@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8">
        @can('training_request_access')
            <div class="row mt-5">
                <div class="col">
                    <div class="card shadow-lg mb-5">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="mb-0">List Request Training</h3>
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
                                                <a href="{{ route('learning-need-analysis.user-needs.request-training.edit', $user_need->id) }}"
                                                    class="btn btn-sm btn-primary btn-icon" type="button" >View
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
        @endcan

        @if ($hcbp_count > 0)
        <div class="row mt-5">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 class="mb-0">List Request Training</h3>
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
                                @foreach ($user_needs_hcbp as $user_need_hcbp)
                                    <tr>
                                        <td>{{ $user_need_hcbp->name_of_program }}</td>
                                        <td>{{ $user_need_hcbp->userNeedStatus->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user_need_hcbp->date)->format('d F Y') }} ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($user_need_hcbp->created_at))->diffForHumans() }})</td>
                                        <td class="text-center">
                                            <a href="{{ route('learning-need-analysis.user-needs.request-training.edit', $user_need_hcbp->id) }}"
                                                class="btn btn-sm btn-primary btn-icon" type="button" >View
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
        @endif
    </div>
@endsection


@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
