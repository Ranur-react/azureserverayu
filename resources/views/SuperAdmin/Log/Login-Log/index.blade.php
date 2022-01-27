@extends('layouts.app', ['pagename' => 'Login Log'])

@section('content')
    <div class="header bg-gradient-red-telkomsel pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    @foreach ($number_blocks as $block)
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">{{ $block['title'] }}
                                            </h5>
                                            <span class="h2 font-weight-bold mb-0">{{ $block['number'] }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        @foreach ($list_blocks as $block)
            <div class="row mb-5">
                <div class="col">
                    <div class="card ">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col d-flex justify-content-between">
                                    {{-- <div class="col-8"> --}}
                                    <h3 class="mb-0">{{ $block['title'] }}</h3>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="name">Email</th>
                                        <th scope="col" class="sort" data-sort="name">Last login at</th>
                                        <th scope="col" class="sort" data-sort="name">Ip Address</th>
                                        </th>
                                    </tr>

                                </thead>
                                <tbody class="list">
                                    @forelse($block['entries'] as $entry)
                                        <tr>
                                            <td>{{ $entry->name }}</td>
                                            <td>{{ $entry->email }}</td>
                                            <td>{{ $entry->last_login_time }}</td>
                                            <td>{{ $entry->last_login_ip }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
