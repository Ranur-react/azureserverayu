@extends('layouts.app', [
'pagedirectory' => [
'Curriculum' =>'/curriculum',
'Archive' => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-body pt-1 pb-0">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col d-flex justify-content-between">
                                    <h3 class="mb-0">Curriculum Archive</h3>
                                    <div class="text-right">
                                        @can('curriculum_edit')
                                            <a href="{{ route('curriculum.archive.restore') }}"
                                            id="button_restore" class="btn btn-secondary">Restore</a>
                                        @endcan
                                        @can('curriculum_delete')
                                            <a href="{{ route('curriculum.archive.forceDelete') }}"
                                            id="button_delete" class="btn btn-secondary">Delete</a>
                                        @endcan
                                        <a href="{{ route('curriculum.index') }}"
                                            class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body mt-1">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Year</th>
                                            <th scope="col" class="sort" data-sort="email">Start Date</th>
                                            <th scope="col" class="sort" data-sort="email">End Date</th>
                                            <th scope="col" class="sort" data-sort="email">Status</th>
                                            <th class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="selectAll"
                                                        class="custom-control-input text-lg" name="selectAll">
                                                    <label class="custom-control-label" for="selectAll"></label>
                                                </div>
                                            </th>
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
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="curriculum[]"
                                                        class="curriculum-class custom-control-input"
                                                        value="{{ $row->id }}"
                                                        id="customCheck1.{{ $loop->index }}">
                                                    <label class="custom-control-label"
                                                        for="customCheck1.{{ $loop->index }}"></label>
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
    @endsection

    @push('js')
        <script>
            $('#example').DataTable({
                "pagingType": "numbers"
            });
            $('#history').DataTable({
                "pagingType": "numbers"
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#button_restore").click(function() {
                    event.preventDefault();

                    var searchIDs = [];

                    var url = $(this).attr('href');

                    $("input[name='curriculum[]']:checked").map(function() {
                        searchIDs.push($(this).val());
                    }).get();

                    $.ajax({
                        url: url,
                        data: {
                            curriculum_id: searchIDs
                        },
                        type: 'GET',
                    }).done(function(response) {
                        location.reload();
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#button_delete").click(function() {
                    event.preventDefault();

                    var searchIDs = [];

                    var url = $(this).attr('href');

                    $("input[name='curriculum[]']:checked").map(function() {
                        searchIDs.push($(this).val());
                    }).get();
                
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: url,
                        data: {
                            curriculum_id: searchIDs
                        },
                        type: 'DELETE',
                        dataType: 'html',
                    }).done(function(response) {
                        location.reload();
                    });
                });
            });
        </script>
        <script>
            $(function() {
                $('#selectAll').click(function() {
                    if ($(this).prop('checked')) {
                        $('.curriculum-class').prop('checked', true);
                    } else {
                        $('.curriculum-class').prop('checked', false);
                    }
                });

            });
        </script>
    @endpush
