@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Delivery Plan'
=>'/learning-operation/delivery-plan', $trainingclass->name => '']])

@section('content')
    @include('layouts.headers.auth')

    @php
    $type = 'vidcon';
    // echo $vidcon;
    @endphp

    <div class="container-fluid mt--9">
        <div class="row mb-4">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h3 class="mb-0">{{ $trainingclass->name }}</h3>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('learning-operation.delivery-plan.edit', $trainingclass->id) }}">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="far fa-edit mr-1"></i>
                                            Edit Mode
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-9">
                <div class="card shadow-sm">
                    @php
                        // echo $elearning;
                        // echo $module;
                    @endphp
                    <div class="card-header">
                        <h3>Introduction</h3>
                    </div>
                    <div class="card-body">

                        <div class="mb-4">
                            <h4 class="mb-3">Description</h4>
                            <div class="border rounded p-4">
                                <p class="text-sm font-weight-normal mb-0">
                                    {{ $trainingclass->description }}
                                </p>
                            </div>
                        </div>
                        <div>
                            <h4 class="mb-3">Files Attachment</h4>
                            <div class="border rounded p-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-header">
                        <h5 class="text-muted text-uppercase mb-0">Table of Content</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="{{ route('learning-operation.delivery-plan.show', $trainingclass->id) }}">
                                <p class="text-sm font-weight-bold mb-0">Introduction</p>
                            </a>
                            <hr class="my-3">
                        </div>
                        @foreach ($trainingclass->sections as $key => $classsection)
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p
                                        class="text-xxs text-uppercase font-weight-normal text-muted mb-1 d-inline-block mb-0">
                                        Section
                                        {{ $key + 1 }}</p>
                                    @if ($classsection->is_active)
                                        <span class="badge badge-pill badge-success text-3xs">Active</span>
                                    @else
                                        <span class="badge badge-pill badge-danger text-3xs">Deactive</span>
                                    @endif
                                </div>
                                <a
                                    href="{{ route('learning-operation.delivery-plan.section.show', [$trainingclass->id, $classsection->section]) }}">
                                    <p class="text-sm font-weight-bold mb-0">{{ $classsection->name }}</p>
                                </a>
                                <hr class="my-3">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
