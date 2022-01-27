@extends('layouts.app', ['pagename' => 'Request Curriculum'])

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
                                <h3 class="mb-0">List Request Curriculum</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Year</th>
                                    <th scope="col" class="sort" data-sort="email">Start Date</th>
                                    <th scope="col" class="sort" data-sort="email">End Date</th>
                                    <th scope="col" class="sort" data-sort="email">Status</th>
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
                                            <span class="badge badge-pill badge-warning">{{ $row->curriculumStatus->name }}</span>
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
        "pagingType": "numbers"
    });
</script>
@endpush
