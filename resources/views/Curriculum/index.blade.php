@extends('layouts.app', ['pagename' => 'Curriculum'])
@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8 mb-5">
        @if (session('delete_curriculum_message_success'))
            <div class="alert alert-default alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-archive-2"></i></span>
                <span class="alert-text">{!! session('delete_curriculum_message_success') !!}</span>
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
                            <div class="col d-flex justify-content-between">
                                <h3 class="mb-0">List Curriculum</h3>
                                <div class="text-right">
                                    <a href="{{ route('curriculum.archive') }}"
                                            class="btn btn-primary">Archive</a>
                                        @can('curriculum_create')
                                             <a href="{{ route('curriculum.create') }}" class="btn btn-primary">Add Curriculum</a>
                                        @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="card-body pt-1">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Year</th>
                                        <th scope="col" class="sort" data-sort="email">Start Date</th>
                                        <th scope="col" class="sort" data-sort="email">End Date</th>
                                        <th scope="col" class="sort" data-sort="email">Status</th>
                                        @if (auth()->user()->can('curriculum_edit') || auth()->user()->can('curriculum_delete'))
                                            <th class="text-right" scope="col" class="sort" data-sort="name">
                                                Action
                                            </th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($curriculum as $row)
                                    <tr>
                                        <td>
                                            <a href="{{ route('curriculum.syllabuses.index', $row->id) }}">
                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row['start_date'])->format('Y') }}
                                            </a>
                                           
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($row->start_date)->format('d F Y') }}
                                            ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->start_date))->diffForHumans() }})
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($row->end_date)->format('d F Y') }}
                                            ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->end_date))->diffForHumans() }})
                                        </td>
                                        <td>
                                            @if ($row->status_id == 1)
                                                <span class="badge badge-pill badge-success">{{ $row->curriculumStatus->name }}</span>
                                            @elseif ($row->status_id == 2)
                                                <span class="badge badge-pill badge-muted">{{ $row->curriculumStatus->name }}</span>
                                            @elseif ($row->status_id == 3)
                                                <span class="badge badge-pill badge-warning">{{ $row->curriculumStatus->name }}</span>
                                            @elseif ($row->status_id == 4)
                                                <span class="badge badge-pill badge-danger">{{ $row->curriculumStatus->name }}</span>
                                            @endif
                                        </td>
                                        @if (auth()->user()->can('curriculum_edit') || auth()->user()->can('curriculum_delete'))
                                        <td class="text-right">
                                            <div class="d-flex justify-content-end">
                                                @can('curriculum_edit')
                                                    <a href="{{ route('curriculum.edit', $row->id) }}"
                                                        class="btn btn-sm btn-primary btn-icon" type="button" >Edit
                                                    </a>
                                                @endcan
                                                @can('curriculum_delete')
                                                <form action="{{ route('curriculum.destroy', $row->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger btn-icon" data-method="delete">Delete</button>
                                                </form>
                                                @endcan
                                            </div>
                                        </td>
                                        @endif
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
    </div>
@endsection
@push('js')
<script>
    $('#example').DataTable({
        "pagingType": "numbers"
    });
</script>
@endpush