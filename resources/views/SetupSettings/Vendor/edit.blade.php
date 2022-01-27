@extends('layouts.app', ['pagedirectory' => [ 
'Vendor' =>'/setup-settings/vendors',
$vendor->partner_name => '', 
'Edit' => '']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                @if (empty( $vendor->getFirstMediaUrl('vendor_logo')))
                                <img 
                                src="https://ui-avatars.com/api/?name={{ $vendor->partner_name }}&size=160" class="rounded-circle">
                                @else
                                    <img src="{{ $vendor->getFirstMediaUrl('vendor_logo') }}" class="rounded-circle">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4 mt-md-8 mt-9">
                        <div class="text-center">
                            <h3>
                                {{ $vendor->partner_name }}
                            </h3>
                            <div class="font-weight-light">
                                {{ $vendor->pt_name }}
                            </div>
                            @if (!empty($vendor->getFirstMediaUrl('vendor_logo')))
                                <form method="POST"
                                    action="{{ route('setup-settings.vendors.destroy_image', $vendor->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $images->id }}">
                                    <button type="submit" class="btn btn-warning mt-4">{{ __('Delete Image') }}</button>
                                </form>
                            @endif
                            @if (empty($vendor->getFirstMediaUrl('vendor_logo')))
                                <form method="POST"
                                    action="{{ route('setup-settings.vendors.store_image', $vendor->id) }}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="file" name="vendor_logo" class="form-control mt-3" id="customFile" />
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save Image') }}</button>
                                </form>
                            @endif
                            <div class="mt-5">
                                @if ($vendor->status_id == 1)
                                    <span class="badge badge-pill badge-success">{{ $vendor->vendorStatus->name }}</span>
                                @else
                                    <span class="badge badge-pill badge-info">{{ $vendor->vendorStatus->name }}</span>
                                @endif
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow mb-5">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Edit Vendor') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col">
                                <div class="nav-wrapper">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabMenu"
                                        role="tablist">
                                        @if (old('tab') == 'tabs-icons-text-2')
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab"
                                                data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                                aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                    class="fas fa-info-circle mr-2"></i>Vendor Information</a>
                                        </li>
                                        @elseif (old('tab') == 'tabs-icons-text-3')
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab"
                                                data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                                aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                    class="fas fa-info-circle mr-2"></i>Vendor Information</a>
                                        </li>
                                        @else
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active " id="tabs-icons-text-1-tab"
                                                data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                                aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                    class="fas fa-info-circle mr-2"></i>Vendor Information</a>
                                        </li>
                                        @endif
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 {{ old('tab') == 'tabs-icons-text-2' ? 'active' : null }} " id="tabs-icons-text-2-tab" data-toggle="tab"
                                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>PIC Account
                                                Manager</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 {{ old('tab') == 'tabs-icons-text-3' ? 'active' : null }}" id="tabs-icons-text-3-tab" data-toggle="tab"
                                                href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>PIC Finance</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            @if (old('tab') == 'tabs-icons-text-2')
                                <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                            @elseif (old('tab') == 'tabs-icons-text-3')
                                <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                            @else
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                            @endif
                                <div class="p-lg-4">
                                    <form method="POST" id="formEditVendor"
                                    action="{{ route('setup-settings.vendors.update', $vendor->id) }}">
                                    @csrf
                                    @method('put')
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pt-name">{{ __('PT Name') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="pt_name" id="input-pt-name"
                                                class="form-control {{ $errors->has('pt_name') ? 'is-invalid' : '' }}" 
                                                value="{{ old("pt_name",$vendor->pt_name) }}">
                                            @error('pt_name')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-partner-name">{{ __('Partner Name') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="partner_name" id="input-partner-name"
                                                class="form-control {{ $errors->has('partner_name') ? 'is-invalid' : '' }}"
                                                value="{{ old("partner_name", $vendor->partner_name) }}">
                                            @error('partner_name')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-partner-name">{{ __('Supplier Number') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="supplier_number" id="input-supplier-number"
                                                class="form-control {{ $errors->has('supplier_number') ? 'is-invalid' : '' }}"
                                                value="{{ old("supplier_number",$vendor->supplier_number) }}">
                                            @error('supplier_number')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-address">{{ __('Address') }} <span class="font-italic">(Optional)</span></label>
                                            <textarea type="text" name="address" id="input-address"
                                                class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" 
                                                style="resize: none;"
                                                rows="3">{{ old("address",$vendor->address) }}</textarea>
                                            @error('address')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-postal-code">{{ __('Postal Code') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="postal_code" id="input-postal-code" maxlength="16"
                                                class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}"
                                                 value="{{ old("postal_code",$vendor->postal_code) }}">
            
                                            @error('postal_code')
                                                 <span class="invalid-feedback" style="display: block;"
                                                 role="alert"><strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-email">{{ __('Email') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="email" id="input-email"
                                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                value="{{ old("email",$vendor->email) }}">
            
                                            @error('email')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-telephone-phone">{{ __('Telephone Number') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="telephone_number" id="input-telephone-phone" maxlength="15"
                                                class="form-control {{ $errors->has('telephone_number') ? 'is-invalid' : '' }}"
                                                value="{{ old("telephone_number",$vendor->telephone_number) }}">
            
                                            @error('telephone_number')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-phone-number">{{ __('Phone Number') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="phone_number" maxlength="15" id="input-phone-number"
                                                class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                                value="{{ old("phone_number",$vendor->phone_number) }}">
            
                                            @error('phone_number')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-ext">{{ __('Ext') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="ext" id="input-ext" maxlength="16"
                                                class="form-control {{ $errors->has('ext') ? 'is-invalid' : '' }}"
                                                value="{{ old("ext",$vendor->ext) }}">
            
                                            @error('ext')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-fax">{{ __('Fax') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="fax" id="input-fax" maxlength="16"
                                                class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}"
                                                value="{{ old("fax",$vendor->fax) }}">
            
                                            @error('fax')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-category">{{ __('Category') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="category" id="input-category"
                                                class="form-control form-control-custom {{ $errors->has('category') ? 'is-invalid' : '' }}"
                                                 value="{{ old("category",$vendor->category) }}">
            
                                            @error('category')
                                                 <span class="invalid-feedback" style="display: block;"
                                                 role="alert"><strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-cluster-1">{{ __('Cluster 1') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="cluster_1" id="input-cluster-1"
                                                class="form-control form-control-custom {{ $errors->has('cluster_1') ? 'is-invalid' : '' }}"
                                                 value="{{ old("cluster_1",$vendor->cluster_1) }}">
                                            @error('cluster_1')
                                                 <span class="invalid-feedback" style="display: block;"
                                                 role="alert"><strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-cluster-2-primary">{{ __('Cluster 2 Primary') }} <span class="font-italic">(Optional)</span></label>
            
                                            <input type="text" name="cluster_2_primary" id="input-cluster-2-primary"
                                                class="form-control form-control-custom {{ $errors->has('cluster_2_primary') ? 'is-invalid' : '' }}"
                                                value="{{ old("cluster_2_primary",$vendor->cluster_2_primary) }}">
            
                                            @error('cluster_2_primary')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-cluster-2-optional">{{ __('Cluster 2 Optional') }} <span class="font-italic">(Optional)</span></label>
                                            <input type="text" name="cluster_2_optional" id="input-cluster-2-optional"
                                                class="form-control form-control-custom {{ $errors->has('cluster_2_optional') ? 'is-invalid' : '' }}"
                                                value="{{ old("cluster_2_optional",$vendor->cluster_2_optional) }}">
                                            @error('cluster_2_optional')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-status">{{ __('Status') }}</label>
                                                <select class="form-control {{ $errors->has('status_id') ? ' is-invalid' : '' }}" name="status_id" id="select-competency-type" required >
                                                    <option value="">Select Status...</option>
                                                    @foreach ($vendorStatuses as $vendorStatus)
                                                        <option value="{{ $vendorStatus->id }}" {{ old('status_id', $vendor->status_id) == $vendorStatus->id ? "selected" : "" }}>{{ $vendorStatus->name }}</option>
                                                    @endforeach
                                                </select>
                                            @error('status_id')
                                                <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-success btn-lg btn-block mt-4">{{ __('Save Changes') }}</button>
                                        </div>
                                    </form>            
                                </div>
                            </div>

                            <div class="tab-pane fade {{ old('tab') == 'tabs-icons-text-2' ? 'show active' : null }}" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <div class="nav-wrapper">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="true">Update PIC Account Manager</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">Add PIC Account Manager</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                                <form method="post" id="formEditPicAccounts"
                                                action="{{ route('setup-settings.vendors.updatePicAccounts', $vendor->id) }}">
                                                @csrf
                                                @method('put')
                                                @foreach ($vendor->picContactVendors->where('is_pic_account_manager', 1) as $pic_account_manager)
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="d-flex justify-content-between">
                                                                    <h3 class="mb-0">PIC Account Manager {{ $loop->iteration }}</h3>
                                                                    @if ($loop->index > 0)
                                                                        <a href="{{ route('setup-settings.vendors.destroyPicAccount', [$vendor->id, $pic_account_manager->id]) }}" 
                                                                            id="removePicAccount" class="btn btn-sm btn-danger">Delete Pic</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <input type="hidden" name="pic_account_manager[{{ $loop->index }}][id]"
                                                            id="input-pic-account-id"
                                                            value="{{ $pic_account_manager->id }}">
                                                            <div class="col-lg-12">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-name">
                                                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager[{{ $loop->index }}][pic_account_name]"
                                                                        id="input-pic-account-name"
                                                                        value="{{ old("pic_account_manager[ $loop->index ][pic_account_name]", $pic_account_manager->pic_name) }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager.' . $loop->index . '.pic_account_name') ? 'is-invalid' : '' }}">
                                                                    @error('pic_account_manager.' . $loop->index . '.pic_account_name')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-nik">
                                                                       NIK <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager[{{ $loop->index }}][pic_account_nik]"
                                                                        id="input-pic-account-nik" maxlength="16"
                                                                        value="{{ old("pic_account_manager[ $loop->index ][pic_account_nik]", $pic_account_manager->nik) }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager.' . $loop->index . '.pic_account_nik') ? 'is-invalid' : '' }}">
                                                                    @error('pic_account_manager.' . $loop->index . '.pic_account_nik')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-position">Position <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager[{{ $loop->index }}][pic_account_position]"
                                                                        id="input-pic-account-position"
                                                                        value="{{ old("pic_account_manager[ $loop->index ][pic_account_position]", $pic_account_manager->position) }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager.' . $loop->index . '.pic_account_position') ? 'is-invalid' : '' }}">
                                                                    @error('pic_account_manager.' . $loop->index . '.pic_account_position')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-email">Email <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager[{{ $loop->index }}][pic_account_email]"
                                                                        id="input-pic-account-email"
                                                                        value="{{ old("pic_account_manager[ $loop->index ][pic_account_email]", $pic_account_manager->email) }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager.' . $loop->index . '.pic_account_email') ? 'is-invalid' : '' }}">
                                                                    @error('pic_account_manager.' . $loop->index . '.pic_account_email')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-phone-number">Phone Number <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager[{{ $loop->index }}][pic_account_phone_number]"
                                                                        id="input-pic-account-phone-number"
                                                                        value="{{ old("pic_account_manager[ $loop->index ][pic_account_phone_number]", $pic_account_manager->phone_number) }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager.' . $loop->index . '.pic_account_phone_number') ? 'is-invalid' : '' }}">
                                                                    @error('pic_account_manager.' . $loop->index . '.pic_account_phone_number')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-success btn-lg btn-block mt-4">{{ __('Save Changes') }}</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                                                <form method="post" id="formCreatePicAccounts"
                                                action="{{ route('setup-settings.vendors.storePicAccounts', $vendor->id) }}">
                                                @csrf
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="d-flex justify-content-between">
                                                                    <h3 class="mb-0">PIC Account Manager 1</h3>
                                                                    <button class="btn btn-sm btn-primary" type="button"
                                                                        id="add-section-pic-account">Add PIC</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-name-new">
                                                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager_new[0][pic_account_name_new]"
                                                                        id="input-pic-account-name-new"
                                                                        value="{{ old('pic_account_manager_new.0.pic_account_name_new') }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager_new.0.pic_account_name_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_account_manager_new.0.pic_account_name_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-nik-new">
                                                                        NIK <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager_new[0][pic_account_nik_new]"
                                                                        id="input-pic-account-nik-new" maxlength="16"
                                                                        value="{{ old('pic_account_manager_new.0.pic_account_nik_new') }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager_new.0.pic_account_nik_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_account_manager_new.0.pic_account_nik_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-postion-new">
                                                                        Position <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager_new[0][pic_account_position_new]"
                                                                        id="input-pic-account-postion-new"
                                                                        value="{{ old('pic_account_manager.0.pic_account_position_new') }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager_new.0.pic_account_position_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_account_manager_new.0.pic_account_position_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-email-new">
                                                                        Email <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager_new[0][pic_account_email_new]"
                                                                        id="input-pic-account-email-new"
                                                                        value="{{ old('pic_account_manager_new.0.pic_account_email_new') }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager_new.0.pic_account_email_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_account_manager_new.0.pic_account_email_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-account-phone-number-new">
                                                                        Phone Number <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_account_manager_new[0][pic_account_phone_number_new]"
                                                                        id="input-pic-account-phone-number-new" maxlength="15"
                                                                        value="{{ old('pic_account_manager_new.0.pic_account_phone_number_new') }}"
                                                                        class="form-control {{ $errors->has('pic_account_manager_new.0.pic_account_phone_number_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_account_manager_new.0.pic_account_phone_number_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section-pic-account">
    
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn btn-success btn-lg btn-block mt-4">{{ __('Save') }}</button>
                                                    </div>
                                                </form>                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade {{ old('tab') == 'tabs-icons-text-3' ? 'show active' : null }}" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
                                <div class="nav-wrapper">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-6-tab" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-6" aria-selected="true">Update PIC Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">Add PIC Finance</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
                                                <form method="post" id="formEditPicFinances"
                                                action="{{ route('setup-settings.vendors.updatePicFinances', $vendor->id) }}">
                                                @csrf
                                                @method('put')
                                                @foreach ($vendor->picContactVendors->where('is_pic_account_manager', 0) as $pic_finance)
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="d-flex justify-content-between">
                                                                    <h3 class="mb-0">PIC Finance {{ $loop->iteration }}</h3>
                                                                    @if ($loop->index > 0)
                                                                        <a href="{{ route('setup-settings.vendors.destroyPicFinance', [$vendor->id, $pic_finance->id]) }}" 
                                                                            id="removePicFinance" class="btn btn-sm btn-danger">Delete Pic</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <input type="hidden" name="pic_finance[{{ $loop->index }}][id]"
                                                            id="input-pic-finance-id"
                                                            value="{{ $pic_finance->id }}">
                                                            <div class="col-lg-12">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-name">
                                                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance[{{ $loop->index }}][pic_finance_name]"
                                                                        id="input-pic-account-name"
                                                                        value="{{ old("pic_finance[ $loop->index ][pic_finance_name]", $pic_finance->pic_name) }}"
                                                                        class="form-control {{ $errors->has('pic_finance.' . $loop->index . '.pic_account_name') ? 'is-invalid' : '' }}">
                                                                    @error('pic_finance.' . $loop->index . '.pic_finance_name')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-nik">
                                                                        NIK <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance[{{ $loop->index }}][pic_finance_nik]"
                                                                        id="input-pic-finance-nik" maxlength="16"
                                                                        value="{{ old("pic_finance[ $loop->index ][pic_finance_nik]", $pic_finance->nik) }}"
                                                                        class="form-control {{ $errors->has('pic_finance.' . $loop->index . '.pic_account_nik') ? 'is-invalid' : '' }}">
                                                                    @error('pic_finance.' . $loop->index . '.pic_finance_nik')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-position">Position <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance[{{ $loop->index }}][pic_finance_position]"
                                                                        id="input-pic-finance-position"
                                                                        value="{{ old("pic_finance[ $loop->index ][pic_finance_position]", $pic_finance->position) }}"
                                                                        class="form-control {{ $errors->has('pic_finance.' . $loop->index . '.pic_finance_position') ? 'is-invalid' : '' }}">
                                                                    @error('pic_finance.' . $loop->index . '.pic_finance_position')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-email">Email <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance[{{ $loop->index }}][pic_finance_email]"
                                                                        id="input-pic-finance-email"
                                                                        value="{{ old("pic_finance[ $loop->index ][pic_finance_email]", $pic_finance->email) }}"
                                                                        class="form-control {{ $errors->has('pic_finance.' . $loop->index . '.pic_finance_email') ? 'is-invalid' : '' }}">
                                                                    @error('pic_finance.' . $loop->index . '.pic_finance_email')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-phone-number">Phone Number <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance[{{ $loop->index }}][pic_finance_phone_number]" maxlength="15"
                                                                        id="input-pic-finance-phone-number"
                                                                        value="{{ old("pic_finance[ $loop->index ][pic_finance_phone_number]", $pic_finance->phone_number) }}"
                                                                        class="form-control {{ $errors->has('pic_finance.' . $loop->index . '.pic_finance_phone_number') ? 'is-invalid' : '' }}">
                                                                    @error('pic_finance.' . $loop->index . '.pic_finance_phone_number')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-success btn-lg btn-block mt-4">{{ __('Save Changes') }}</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-icons-text-7" role="tabpanel" aria-labelledby="tabs-icons-text-7-tab">
                                                <form method="post" id="formCreatePicFinances"
                                                action="{{ route('setup-settings.vendors.storePicFinances', $vendor->id) }}">
                                                @csrf
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="d-flex justify-content-between">
                                                                    <h3 class="mb-0">PIC Finance 1</h3>
                                                                    <button class="btn btn-sm btn-primary" type="button"
                                                                        id="add-section-pic-finance">Add PIC</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-name-new">
                                                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance_new[0][pic_finance_name_new]"
                                                                        id="input-pic-finance-name-new"
                                                                        value="{{ old('pic_finance_new.0.pic_finance_name_new') }}"
                                                                        class="form-control {{ $errors->has('pic_finance_new.0.pic_finance_name_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_finance_new.0.pic_finance_name_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-nik-new">
                                                                        NIK <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance_new[0][pic_finance_nik_new]"
                                                                        id="input-pic-finance-nik-new" maxlength="16"
                                                                        value="{{ old('pic_finance_new.0.pic_finance_nik_new') }}"
                                                                        class="form-control {{ $errors->has('pic_finance_new.0.pic_finance_nik_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_finance_new.0.pic_finance_nik_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-postion-new">
                                                                        Position <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance_new[0][pic_finance_position_new]"
                                                                        id="input-pic-finance-postion-new"
                                                                        value="{{ old('pic_finance_new.0.pic_finance_position_new') }}"
                                                                        class="form-control {{ $errors->has('pic_finance_new.0.pic_finance_position_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_finance_new.0.pic_finance_position_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-email-new">
                                                                        Email <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance_new[0][pic_finance_email_new]"
                                                                        id="input-pic-finance-email-new"
                                                                        value="{{ old('pic_finance_new.0.pic_finance_email_new') }}"
                                                                        class="form-control {{ $errors->has('pic_finance_new.0.pic_finance_email_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_finance_new.0.pic_finance_email_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-3">
                                                                    <label class="form-control-label" for="input-pic-finance-phone-number-new">
                                                                        Phone Number <span class="font-italic">(Optional)</span></label>
                                                                    <input type="text" name="pic_finance_new[0][pic_finance_phone_number_new]" maxlength="15"
                                                                        id="input-pic-account-phone-number-new"
                                                                        value="{{ old('pic_finance_new.0.pic_finance_phone_number_new') }}"
                                                                        class="form-control {{ $errors->has('pic_finance_new.0.pic_finance_phone_number_new') ? ' is-invalid' : '' }}">
                                                                    @error('pic_finance_new.0.pic_finance_phone_number_new')
                                                                        <span class="invalid-feedback" style="display: block;"
                                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section-pic-finance">
    
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn btn-success btn-lg btn-block mt-4">{{ __('Save') }}</button>
                                                    </div>
                                                </form>                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- {!! JsValidator::formRequest('App\Http\Requests\LearningAdmin\Update\UpdateVendorRequest', '#formEditVendor') !!} --}}
    {!! JsValidator::formRequest('App\Http\Requests\LearningAdmin\Update\UpdatePicAccountRequest', '#formEditPicAccounts') !!}
    {!! JsValidator::formRequest('App\Http\Requests\LearningAdmin\Store\StorePicAccountRequest', '#formCreatePicAccounts') !!}

    {!! JsValidator::formRequest('App\Http\Requests\LearningAdmin\Update\UpdatePicFinanceRequest', '#formEditPicFinances') !!}
    {!! JsValidator::formRequest('App\Http\Requests\LearningAdmin\Store\StorePicFinanceRequest', '#formCreatePicFinances') !!}
    
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
     {{-- <script type="text/javascript">
        $(document).ready(function(){
            $("form").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                });
        });
    </script> --}}
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $("#formEditVendor").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#formEditPicAccounts").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                });
        });
    </script>
    --}}

    {{-- <script type="text/javascript">
        $('form').submit(function(){
            $(this).find(':submit').attr( 'disabled','disabled' );
            //the rest of your code
            setTimeout(() => {
                $(this).find(':submit').attr( 'disabled',false );
            }, 2000)
        });
    </script> --}}

    <script>
        //redirect to specific tab
        $(document).ready(function () {
            $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
    </script>
    <script>
        $(document).ready(function () {
            $("body").on("click","#removePicAccount",function(e){
                if(!confirm("Are you sure?")) {
                    return false;
                }
                    event.preventDefault();

                    var url = $(this).attr('href');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                    }).done(function(response) {
                        window.location.replace(response);
                    });
                });
        });
    </script>

    <script>
        $(document).ready(function () {
            $("body").on("click","#removePicFinance",function(e){
                if(!confirm("Are you sure?")) {
                    return false;
                }
                    event.preventDefault();

                    var url = $(this).attr('href');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                    }).done(function(response) {
                        window.location.replace(response);
                    });
                });
        });
    </script>

    <script>
       
       let countPicAccount = 1;
        $('#add-section-pic-account').click(function() {
            countPicAccount++;
            $('#section-pic-account').append(`
            <div id="formAppendPicAccount">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex justify-content-between">
                                <h3 class="mb-0">PIC Account Manager ` + countPicAccount + `</h3>
                                <button id="removeFormAppendPicAccount" type="button" class="btn btn-sm btn-danger">Remove</button>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-account-name-new">
                                    PIC Name <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_account_manager_new[` + countPicAccount + `][pic_account_name_new]"
                                    id="input-pic-account-name-new"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-account-nik-new">
                                    NIK <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_account_manager_new[` + countPicAccount + `][pic_account_nik_new]"
                                    id="input-pic-account-nik-new"
                                    maxlength="16"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-account-postion-new">
                                    Position <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_account_manager_new[` + countPicAccount + `][pic_account_position_new]"
                                    id="input-pic-account-postion-new"
                                    class="form-control"> 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-account-email-new">
                                    Email <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_account_manager_new[` + countPicAccount + `][pic_account_email_new]"
                                    id="input-pic-account-email-new"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-account-phone-number-new">
                                    Phone Number <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_account_manager_new[` + countPicAccount + `][pic_account_phone_number_new]"
                                    id="input-pic-account-phone-number-new"
                                    maxlength="15"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `);
        })

        // remove row
        $(document).on('click', '#removeFormAppendPicAccount', function(e) {
            e.preventDefault();
            $(this).closest('#formAppendPicAccount').remove();
            countPicAccount--;
        });
    </script>
    <script>
         let countPicFinance = 1;
        $('#add-section-pic-finance').click(function() {
            countPicFinance++;
            $('#section-pic-finance').append(`
             <div id="formAppendPicFinance">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex justify-content-between">
                                <h3 class="mb-0">PIC Finance ` + countPicFinance + `</h3>
                                <button id="removeFormAppendPicFinance" type="button" class="btn btn-sm btn-danger">Remove</button>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-finance-name-new">
                                    PIC Name <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_finance_new[` + countPicFinance + `][pic_finance_name_new]"
                                    id="input-pic-finance-name-new"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-finance-nik-new">
                                    NIK <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_finance_new[` + countPicFinance + `][pic_finance_nik_new]"
                                    id="input-pic-finance-nik-new"
                                    maxlength="16"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-finance-position-new">
                                    Position <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_finance_new[` + countPicFinance + `][pic_finance_position_new]"
                                    id="input-pic-finance-position-new"
                                    class="form-control"> 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-finance-email-new">
                                    Email <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_finance_new[` + countPicFinance + `][pic_finance_email_new]"
                                    id="input-pic-finance-email-new"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-pic-finance-phone-number-new">
                                    Phone Number <span class="font-italic">(Optional)</span></label>
                                <input type="text" name="pic_finance_new[` + countPicFinance + `][pic_finance_phone_number_new]"
                                    id="input-pic-finance-phone-number-new"
                                    maxlength="15"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `);
        });

        // remove row
        $(document).on('click', '#removeFormAppendPicFinance', function(e) {
            $(this).closest('#formAppendPicFinance').remove();
            countPicFinance--;
        });
    </script>
    <script>
        // The DOM element you wish to replace with Tagify
        var inputPartnertCategory = document.querySelector('input[name=category]');

        var tagify = new Tagify(inputPartnertCategory, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })
    </script>

    <script>
        // The DOM element you wish to replace with Tagify
        var inputCluster = document.querySelector('input[name=cluster_1]');

        var tagify = new Tagify(inputCluster, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })
    </script>

    <script>
        // The DOM element you wish to replace with Tagify
        var inputCluster2Primary = document.querySelector('input[name=cluster_2_primary]');

        var tagify = new Tagify(inputCluster2Primary, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })
    </script>

    <script>
        // The DOM element you wish to replace with Tagify
        var inputCluster2Optional = document.querySelector('input[name=cluster_2_optional]');

        var tagify = new Tagify(inputCluster2Optional, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        })
    </script>
@endpush
