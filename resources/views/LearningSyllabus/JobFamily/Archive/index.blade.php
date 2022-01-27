@extends('layouts.app', ['pagedirectory' => [ 
'Job Family Directory'=>'/learning-syllabus/job-families', 'Archive'=>'',]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-bold text-3xl">Job Family Archive</h1>
                <div class="text-right">
                    @if (!$jobFamilies->isEmpty())
                        @if (auth()->user()->can('learning_syllabus_edit') || auth()->user()->can('learning_syllabus_delete'))
                            @can('learning_syllabus_edit')
                                <a href="{{ route('learning-syllabus.job-families.archive.restore') }}"
                                    id="button_restore" class="btn btn-secondary">Restore</a>
                            @endcan
                            @can('learning_syllabus_delete')
                                <a href="{{ route('learning-syllabus.job-families.archive.force_delete') }}"
                                    id="button_delete" class="btn btn-secondary">Delete</a>
                            @endcan
                            <a href="{{ route('learning-syllabus.job-families.index') }}"
                            id="button_back" class="btn btn-primary">Back</a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        @if (!$jobFamilies->isEmpty())
            <div class="row mt-5 ml-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="selectAll" class="syllabus-class custom-control-input" value=""
                        id="selectAll">
                    <label class="custom-control-label text-lg" for="selectAll">Select All</label>
                </div>
            </div>
        @endif

        <div class="row mt-4">
            @forelse ($jobFamilies as $jobFamily)
                <div class="col-xl-2 col-lg-6 mb-4 mb-lg-5">
                    <div class="card card-hover card-stats shadow-lg h-100">
                        <div class="custom-control custom-checkbox text-right p-2">
                            <input type="checkbox" name="job_family_selected[]"
                                class="job-family-class custom-control-input" value="{{ $jobFamily->id }}"
                                id="customCheck2.{{ $loop->index }}">
                            <label class="custom-control-label" for="customCheck2.{{ $loop->index }}"></label>
                        </div>
                        <div class="p-2 pb-4">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-folder"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col">
                                    <span class="h4 font-weight-bold mb-0">{{ $jobFamily->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-xl-11 mb-2 mb-lg-4 mt-2">
                    <p class="text-center text-xl">This Folder Is Empty.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $("#button_restore").click(function() {
                event.preventDefault();

                var searchIDs = [];

                var url = $(this).attr('href');

                $("input[name='job_family_selected[]']:checked").map(function() {
                    searchIDs.push($(this).val());
                }).get();
                console.log(searchIDs)

                $.ajax({
                    url: url,
                    data: {
                        job_family_id: searchIDs
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

                $("input[name='job_family_selected[]']:checked").map(function() {
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
                        job_family_id: searchIDs
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
                    $('.job-family-class').prop('checked', true);
                } else {
                    $('.job-family-class').prop('checked', false);
                }
            });
        });
    </script>
@endpush
