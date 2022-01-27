@extends('layouts.app', [
'pagedirectory' => [
'IDP Period' =>'/learning-need-analysis/idp-period',
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
                                    <h3 class="mb-0">IDP Archive</h3>
                                    <div class="text-right">
                                        @can('idp_period_edit')
                                            <a href="{{ route('learning-need-analysis.idp-period.restore.archive') }}"
                                            id="button_restore" class="btn btn-secondary">Restore</a>
                                        @endcan
                                        @can('idp_period_delete')
                                            <a href="{{ route('learning-need-analysis.idp-period.archive.forceDelete') }}"
                                            id="button_delete" class="btn btn-secondary">Delete</a>
                                        @endcan
                                        <a href="{{ route('learning-need-analysis.idp-period.index') }}"
                                            class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body mt-1">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="history">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="year">Year</th>
                                            <th scope="col" class="sort" data-sort="period">Period</th>
                                            <th scope="col" class="sort" data-sort="status">Status</th>
                                            <th scope="col" class="sort" data-sort="start_date">Start Date</th>
                                            <th scope="col" class="sort" data-sort="end_date">End Date</th>
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
                                        @foreach ($idp as $row)
                                            <tr>
                                                <td>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row['start_date'])->format('Y') }}
                                                </td>
                                                <td>
                                                    {{ $row->name }}
                                                </td>
                                                <td>
                                                    @if (\Carbon\Carbon::today()->between($row->start_date, $row->end_date))
                                                        <span class="badge badge-pill badge-success mb-1 mr-1">Active</span>
                                                    @elseif(\Carbon\Carbon::today()->lessThan($row->start_date))
                                                        <span
                                                            class="badge badge-pill badge-warning mb-1 mr-1">Pending</span>
                                                    @else
                                                        <span class="badge badge-pill badge-muted mb-1 mr-1">Ended</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($row->start_date)->format('d F Y') }}
                                                    ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->start_date))->diffForHumans() }})
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($row->end_date)->format('d F Y') }}
                                                    ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->end_date))->diffForHumans() }})
                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="idp_selected[]"
                                                            class="syllabus-class custom-control-input"
                                                            value="{{ $row->id }}"
                                                            id="customCheck1.{{ $loop->index }}">
                                                        <label class="custom-control-label"
                                                            for="customCheck1.{{ $loop->index }}"></label>
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

                    $("input[name='idp_selected[]']:checked").map(function() {
                        searchIDs.push($(this).val());
                    }).get();
                    console.log(searchIDs)

                    $.ajax({
                        url: url,
                        data: {
                            idp_period_id: searchIDs
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

                    $("input[name='idp_selected[]']:checked").map(function() {
                        searchIDs.push($(this).val());
                    }).get();
                    console.log(searchIDs)

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: url,
                        data: {
                            idp_period_id: searchIDs
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
                        $('.syllabus-class').prop('checked', true);
                    } else {
                        $('.syllabus-class').prop('checked', false);
                    }
                });

            });
        </script>
    @endpush
