@extends('layouts.app', ['pagedirectory' => [
'Organization Units' =>'/master-data/organization-units',
$organizationUnit->name => ''
]])
@section('content')
@include('layouts.headers.auth')
<div class="container-fluid mt--8 mb-5">
    <div class="row">
        <div class="col">
            <div class="card shadow-lg mb-5">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Detail Units</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="px-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-location">Location</label>
                                    <input type="text" name="location_id" id="input-location" value="{{ $organizationUnit->location->location_code ?? ''}}"
                                        class="form-control text-black" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-date-from">Date From</label>
                                    <input type="text" name="date_from" id="input-date-from" value="{{ $organizationUnit->date_from }}"
                                        class="form-control text-black" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-date-to">Date From</label>
                                    <input type="text" name="date_to" id="input-date-to" value="{{ $organizationUnit->date_to }}"
                                        class="form-control text-black" disabled>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name"
                                        value="{{ $organizationUnit->name }}"
                                        class="form-control text-black" disabled>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-type">Type</label>
                                    <input type="text" name="type" id="input-type"
                                        value="{{ $organizationUnit->type }}"
                                        class="form-control text-black" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection