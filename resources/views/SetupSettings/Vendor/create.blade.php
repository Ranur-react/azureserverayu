@extends('layouts.app', ['pagedirectory' => [
'Vendors' =>'/setup-settings/vendors', 
'Create' => '']])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Vendor Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>PIC Account Manager</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>PIC Finance</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <form method="POST" id="formCreateVendor" action="{{ route('setup-settings.vendors.store') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">Vendor Information</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="px-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pt-name">PT Name <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pt_name" id="input-pt-name"
                                                        value="{{ old('pt_name') }}"
                                                        class="form-control {{ $errors->has('pt_name') ? ' is-invalid' : '' }}" autofocus>
                                                    @error('pt_name')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-partner-name">Partner Name <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="partner_name" id="input-partner-name"
                                                        value="{{ old('partner_name') }}"
                                                        class="form-control {{ $errors->has('partner_name') ? ' is-invalid' : '' }}">
                                                    @error('partner_name')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-supplier-number">
                                                        Supplier Number <span class="font-italic">(Optional)</span></label>
                                                    <input type="number" name="supplier_number" id="input-supplier-number"
                                                        value="{{ old('supplier_number') }}"
                                                        class="form-control {{ $errors->has('supplier_number') ? ' is-invalid' : '' }}">
                                                    @error('supplier_number')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-address">Address <span class="font-italic">(Optional)</span></label>
                                                    <textarea type="text" name="address" id="input-address" rows="3"
                                                        class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                                        style="resize: none;">{{ old('address') }}</textarea>
                                                    @error('address')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-postal-code">
                                                        Postal Code <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="postal_code" id="input-postal-code"
                                                        value="{{ old('postal_code') }}" maxlength="16"
                                                        class="form-control {{ $errors->has('postal_code') ? ' is-invalid' : '' }}">
                                                    @error('postal_code')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-email">
                                                        Email <span class="font-italic">(Optional)</span></label>
                                                    <input type="email" name="email" id="input-email"
                                                        value="{{ old('email') }}"
                                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-telephone-number">
                                                        Telephone Number <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="telephone_number" id="input-telephone-number"
                                                        value="{{ old('telephone_number') }}" maxlength="15"
                                                        class="form-control {{ $errors->has('telephone_number') ? ' is-invalid' : '' }}">
                                                    @error('telephone_number')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-phone-number">
                                                        Phone Number <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="phone_number" id="input-phone-number"
                                                        value="{{ old('phone_number') }}" maxlength="15"
                                                        class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                                        placeholder="" required>
                                                    @error('phone_number')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-ext">
                                                        Ext <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="ext" id="input-ext" maxlength="16"
                                                        value="{{ old('ext') }}" 
                                                        class="form-control {{ $errors->has('ext') ? ' is-invalid' : '' }}">
                                                    @error('ext')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-fax">
                                                        Fax <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="fax" id="input-fax" maxlength="16"
                                                        value="{{ old('fax') }}"
                                                        class="form-control {{ $errors->has('fax') ? ' is-invalid' : '' }}">
                                                    @error('fax')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-category">
                                                        Category <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="category" id="input-category"
                                                        value="{{ old('category') }}"
                                                        class="form-control form-control-custom {{ $errors->has('category') ? ' is-invalid' : '' }}">
                                                    @error('category')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-cluster-1">Cluster
                                                        1 <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="cluster_1" id="input-cluster-1"
                                                        value="{{ old('cluster_1') }}"
                                                        class="form-control form-control-custom {{ $errors->has('cluster_1') ? ' is-invalid' : '' }}">
                                                    @error('cluster_1')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-cluster-2-primary">Cluster
                                                        2
                                                        Primary <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="cluster_2_primary" id="input-cluster-2-primary"
                                                        value="{{ old('cluster_2_primary') }}"
                                                        class="form-control form-control-custom {{ $errors->has('cluster_2_primary') ? ' is-invalid' : '' }}">
                                                    @error('cluster_2_primary')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-cluster-2-optional">Cluster
                                                        2
                                                        Optional <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="cluster_2_optional" id="cluster_2_optional"
                                                        value="{{ old('cluster_2_optional') }}"
                                                        class="form-control form-control-custom {{ $errors->has('cluster_2_optional') ? ' is-invalid' : '' }}">
                                                    @error('cluster_2_optional')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-status">Status</label>
                                                    <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="select-competency-type" required >
                                                        <option value="">Select Status...</option>
                                                        @foreach ($vendorStatuses as $vendorStatus)
                                                            <option value="{{ $vendorStatus->id }}" {{ old('status') == $vendorStatus->id ? "selected" : "" }}>{{ $vendorStatus->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('status')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-logo">Logo <span class="font-italic">(Optional)</span></label>
                                                    <input type="file" name="vendor_logo" id="input-logo" value=""
                                                        class="form-control {{ $errors->has('vendor_logo') ? ' is-invalid' : '' }}">
                                                    @error('vendor_logo')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <div class="card-header" id="inputFormRow">
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
                                    <div class="px-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-account-name">
                                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_account_manager[0][pic_account_name]"
                                                        id="input-pic-account-name"
                                                        value="{{ old('pic_account_manager.0.pic_account_name') }}"
                                                        class="form-control {{ $errors->has('pic_account_manager.0.pic_account_name') ? ' is-invalid' : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-account-nik">
                                                        NIK <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_account_manager[0][pic_account_nik]"
                                                        id="input-pic-account-nik"
                                                        value="{{ old('pic_account_manager.0.pic_account_nik') }}"
                                                        maxlength="16"
                                                        class="form-control {{ $errors->has('pic_account_manager.0.pic_account_nik') ? ' is-invalid' : '' }}">
                                                    @error('pic_account_manager.0.pic_account_nik')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-account-position">
                                                        Position <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_account_manager[0][pic_account_position]"
                                                        id="input-pic-account-position"
                                                        value="{{ old('pic_account_manager.0.pic_account_position') }}"
                                                        class="form-control {{ $errors->has('pic_account_manager.0.pic_account_position') ? ' is-invalid' : '' }}">
                                                    @error('pic_account_manager.0.pic_account_position')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-account-email">
                                                        Email <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_account_manager[0][pic_account_email]"
                                                        id="input-pic-account-email"
                                                        value="{{ old('pic_account_manager.0.pic_account_email') }}"
                                                        class="form-control {{ $errors->has('pic_account_email') ? ' is-invalid' : '' }}">
                                                    @error('pic_account_manager.0.pic_account_email')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-account-phone-number">
                                                       Phone Number <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_account_manager[0][pic_account_phone_number]"
                                                        id="input-pic-account-phone-number"
                                                        value="{{ old('pic_account_manager.0.pic_account_phone_number') }}"
                                                        maxlength="15"
                                                        class="form-control {{ $errors->has('pic_account_phone_number') ? ' is-invalid' : '' }}"
                                                        placeholder="" required>
                                                    @error('pic_account_manager.0.pic_account_phone_number')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="section-pic-account">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
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
                                    <div class="px-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-finance-name">
                                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_finance[0][pic_finance_name]"
                                                        id="input-pic-finance-name"
                                                        value="{{ old('pic_finance.0.pic_finance_name') }}"
                                                        class="form-control {{ $errors->has('pic_finance_name') ? ' is-invalid' : '' }}">
                                                    @error('pic_finance.0.pic_finance_name')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-finance-nik">
                                                        NIK <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_finance[0][pic_finance_nik]"
                                                        id="input-pic-finance-nik"
                                                        value="{{ old('pic_finance.0.pic_finance_nik') }}" maxlength="16"
                                                        class="form-control {{ $errors->has('pic_finance.0.pic_finance_nik') ? ' is-invalid' : '' }}">
                                                    @error('pic_finance.0.pic_finance_nik')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-finance-position">
                                                        Position <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_finance[0][pic_finance_position]"
                                                        id="input-pic-finance-position"
                                                        value="{{ old('pic_finance.0.pic_finance_position') }}"
                                                        class="form-control {{ $errors->has('pic_finance.0.pic_finance_position') ? ' is-invalid' : '' }}">
                                                    @error('pic_finance.0.pic_finance_position')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-finance-email">
                                                        Email <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_finance[0][pic_finance_email]"
                                                        id="input-pic-finance-email"
                                                        value="{{ old('pic_finance.0.pic_finance_email') }}"
                                                        class="form-control {{ $errors->has('pic_finance.0.pic_finance_email') ? ' is-invalid' : '' }}">
                                                    @error('pic_finance.0.pic_finance_email')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-control-label" for="input-pic-finance-phone-number">
                                                        Phone Number <span class="font-italic">(Optional)</span></label>
                                                    <input type="text" name="pic_finance[0][pic_finance_phone_number]"
                                                        id="input-pic-finance-phone-number"
                                                        value="{{ old('pic_finance.0.pic_finance_phone_number') }}" maxlength="15"
                                                        class="form-control {{ $errors->has('pic_finance.0.pic_finance_phone_number') ? ' is-invalid' : '' }}">
                                                    @error('pic_finance.0.pic_finance_phone_number')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="section-pic-finance">

                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="px-lg-4">
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-success mt-4 btn-lg btn-block">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {!! JsValidator::formRequest('App\Http\Requests\LearningAdmin\Store\StoreVendorRequest') !!}

@endsection

@push('js')
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $("#formCreateVendor").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                });
        });
    </script> --}}

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
                    <div class="px-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-account-name">
                                        PIC Name <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_account_manager[` + countPicAccount + `][pic_account_name]"
                                        id="input-pic-account-name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-account-nik">
                                        NIK <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_account_manager[` + countPicAccount + `][pic_account_nik]"
                                        id="input-pic-account-nik" maxlength="16"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-account-position">
                                        Position <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_account_manager[` + countPicAccount + `][pic_account_position]"
                                        id="input-pic-account-positio"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-account-email">
                                        Email <span class="font-italic">(Optional)</span></label>
                                    <input type="email" name="pic_account_manager[` + countPicAccount + `][pic_account_email]"
                                        id="input-pic-account-email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-account-phone-number">
                                        Phone Number <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_account_manager[` + countPicAccount + `][pic_account_phone_number]" 
                                    id="input-pic-account-phone-number"
                                     maxlength="15" class="form-control">
                                </div>
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
                    <div class="px-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-finance-name">
                                        Nama PIC <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_finance[` + countPicFinance + `][pic_finance_name]" id="input-pic-finance-name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-finance-nik">
                                        NIK <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_finance[` + countPicFinance + `][pic_finance_nik]" id="input-pic-finance-nik"
                                        value="{{ old('pic_finance.1.pic_finance_nik') }}" maxlength="16"
                                        class="form-control {{ $errors->has('pic_finance.1.pic_finance_nik') ? ' is-invalid' : '' }}"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-finance-position">
                                        Position <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_finance[` + countPicFinance + `][pic_finance_position]"
                                        id="input-pic-finance-position"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-finance-email">
                                        Email <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_finance[` + countPicFinance + `][pic_finance_email]" id="input-pic-finance-email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-pic-finance-phone-number">
                                       Phone Number <span class="font-italic">(Optional)</span></label>
                                    <input type="text" name="pic_finance[` + countPicFinance + `][pic_finance_phone_number]" 
                                    id="input-pic-finance-phone-number" maxlength="15" class="form-control">
                                </div>
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
