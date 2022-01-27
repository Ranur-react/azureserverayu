@extends('layouts.app', ['pagedirectory' => [
'Locations' =>'/master-data/locations',
$location->location_code => '',
'Edit' => '',
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
                                <h3 class="mb-0">Edit Location</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('master-data.locations.update', $location->location_id) }}" 
                        id="formLocation">
                        @method('PUT')
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-location-code">Location Code</label>
                                            <input type="text" name="location_code" id="input-location-code"
                                                value="{{ old('location_code', $location->location_code) }}"
                                                class="form-control {{ $errors->has('location_code') ? ' is-invalid' : '' }}"
                                                required autofocus>
                                            @error('location_code')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-description">Description</label>
                                            <input type="text" name="description" id="input-description" 
                                            value="{{ old('description', $location->description) }}"
                                                class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                 required>
                                            @error('description')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-address-line-1">Address Line 1</label>
                                            <textarea name="address_line_1" id="input-address-line-1"
                                                class="form-control 
                                                {{ $errors->has('address_line_1') ? ' is-invalid' : '' }}"
                                                rows="5"
                                                >{{ old('address_line_1', $location->address_line_1) }}</textarea>
                                            @error('address_line_1')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-address-line-2">Address Line 2</label>
                                            <textarea name="address_line_2" id="input-address-line-2"
                                                class="form-control 
                                                {{ $errors->has('address_line_2') ? ' is-invalid' : '' }}"
                                                rows="5"
                                                >{{ old('address_line_2', $location->address_line_2) }}</textarea>
                                            @error('address_line_2')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-town-or-city">Town Or City</label>
                                            <input type="text" maxlength="4" name="town_or_city" 
                                            id="input-town-or-city" value="{{ old('town_or_city', $location->town_or_city) }}"
                                                class="form-control {{ $errors->has('town_or_city') ? ' is-invalid' : '' }}">
                                            @error('town_or_city')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-postal-code">Postal Code</label>
                                            <input type="text" maxlength="10" name="postal_code" id="input-postal-code" 
                                            value="{{ old('postal_code', $location->postal_code) }}"
                                                class="form-control {{ $errors->has('postal_code') ? ' is-invalid' : '' }}"
                                                 >
                                            @error('postal_code')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-region-1">Region 1</label>
                                            <input type="text" name="region_1" id="input-region-1" 
                                            value="{{ old('region_1', $location->region_1) }}"
                                                class="form-control {{ $errors->has('region_1') ? ' is-invalid' : '' }}"
                                                 >
                                            @error('region_1')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-admins">Admins</label>
                                            <input type="text" maxlength="32" name="admins" id="input-admins" 
                                            value="{{ old('admins', $location->admins) }}"
                                                class="form-control {{ $errors->has('admins') ? ' is-invalid' : '' }}"
                                                 >
                                            @error('admins')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4  btn-lg btn-block">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $("form").submit(function () {
                if ($(this).valid()) {
                    $(this).submit(function () {
                        return false;
                    });
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    </script>
@endpush