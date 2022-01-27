@extends('layouts.app', ['pagedirectory' => [
'Locations' =>'/master-data/locations',
$location->location_code => ''
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
                                <h3 class="mb-0">Detail Location</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="px-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-location-code">Location Code</label>
                                        <input type="text" name="location_code" id="input-location-code"
                                            value="{{ $location->location_code }}"
                                            class="form-control text-black" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-description">Description</label>
                                        <input type="text" name="description" id="input-description" 
                                        value="{{ $location->description }}"
                                            class="form-control text-black" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-address-line-1">Address Line 1</label>
                                        <textarea name="address_line_1" id="input-address-line-1"
                                            class="form-control text-black" 
                                            rows="5" disabled>{{ $location->address_line_1 }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-address-line-2">Address Line 2</label>
                                        <textarea name="address_line_2" id="input-address-line-2"
                                            class="form-control text-black"
                                            rows="5" disabled>{{ $location->address_line_2 }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-town-or-city">Town Or City</label>
                                        <input type="text" name="town_or_city" 
                                        id="input-town-or-city" value="{{ $location->town_or_city }}"
                                            class="form-control text-black" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-postal-code">Postal Code</label>
                                        <input type="text" name="postal_code" id="input-postal-code" 
                                        value="{{ $location->postal_code }}"
                                            class="form-control text-black" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-region-1">Region 1</label>
                                        <input type="text" name="region_1" id="input-region-1" 
                                        value="{{ $location->region_1 }}"
                                            class="form-control text-black" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-admins">Admins</label>
                                        <input type="text" name="admins" id="input-admins" 
                                        value="{{ $location->admins }}"
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
