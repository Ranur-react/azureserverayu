@extends('layouts.app', ['pagedirectory' => [
'Vendors' =>'/setup-settings/vendors', 
$vendor->partner_name => '',
'Show' => '']])

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
                            <div class="mt-3">
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
                                <h3 class="mb-0">{{ __('Vendor Detail') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col">
                                <div class="nav-wrapper">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                                data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                                aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                    class="fas fa-info-circle mr-2"></i>Vendor Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>PIC Account
                                                Manager</a>
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

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                                <div class="p-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-pt-name">PT Name</label>
                                                <input type="text" name="pt_name" id="input-pt-name"
                                                    value="{{ $vendor->pt_name }}"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-partner-name">Partner Name</label>
                                                <input type="text" name="partner_name" id="input-partner-name"
                                                    value="{{ $vendor->partner_name }}"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-supplier-number">
                                                    Supplier Number</label>
                                                <input type="number" name="supplier_number" id="input-supplier-number"
                                                    value="{{ $vendor->supplier_number }}"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <textarea type="text" name="address" id="input-address" rows="3"
                                                    class="form-control text-black"
                                                    style="resize: none;" disabled>{{ $vendor->address }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-postal-code">
                                                    Postal Code</label>
                                                <input type="text" name="postal_code" id="input-postal-code"
                                                    value="{{ $vendor->postal_code }}" 
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-email">
                                                    Email</label>
                                                <input type="email" name="email" id="input-email"
                                                    value="{{ $vendor->email }}"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-telephone-number">
                                                    No Telepon</label>
                                                <input type="text" name="telephone_number" id="input-telephone-number"
                                                    value="{{ $vendor->telephone_number }}" maxlength="15"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-phone-number">
                                                    No HP</label>
                                                <input type="text" name="phone_number" id="input-phone-number"
                                                    value="{{ $vendor->phone_number }}" maxlength="15"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-ext">
                                                    Ext</label>
                                                <input type="text" name="ext" id="input-ext"
                                                    value="{{ $vendor->ext }}" maxlength="11"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-fax">
                                                    Fax</label>
                                                <input type="text" name="fax" id="input-fax"
                                                    value="{{ $vendor->fax }}" maxlength="11"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-category">
                                                    Category</label>
                                                <input type="text" name="category" id="input-category"
                                                    value="{{ $vendor->category }}"
                                                    class="form-control bg-white text-black" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-cluster-1">Cluster 1</label>
                                                <input type="text" name="cluster_1" id="input-cluster-1"
                                                    value="{{ $vendor->cluster_1 }}"
                                                    class="form-control  bg-white text-black" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-cluster-2-primary">Cluster 2 Primary</label>
                                                <input type="text" name="cluster_2_primary" id="input-cluster-2-primary"
                                                    value="{{ $vendor->cluster_2_primary }}"
                                                    class="form-control  bg-white text-black" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-cluster-2-optional">Cluster 2 Optional</label>
                                                <input type="text" name="cluster_2_optional" id="cluster_2_optional"
                                                    value="{{ $vendor->cluster_2_optional }}"
                                                    class="form-control  bg-white text-black" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <div class="px-lg-4">
                                    @foreach ($vendor->picContactVendors->where('is_pic_account_manager', 1) as $pic_account_manager)
                                        <div class="d-flex justify-content-between mt-5 mb-3">
                                            <h4 class="mx-auto">PIC Account Manager {{ $loop->iteration }}</h4>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-account-name">{{ __('PIC Name') }}</label>
                                            <input type="text"
                                                name="pic_account_manager[{{ $loop->index }}][pic_account_name]"
                                                id="input-pic-account-name"
                                                class="form-control text-black"
                                                value="{{ $pic_account_manager->pic_name }}" disabled>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-account-ktp">{{ __('No KTP') }}</label>
                                            <input type="text"
                                                name="pic_account_manager[{{ $loop->index }}][pic_account_ktp]"
                                                id="input-pic-account-ktp"
                                                class="form-control text-black"
                                                value="{{ $pic_account_manager->ktp_number }}" disabled>
                                          
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-account-posisi">{{ __('Posisi') }}</label>
                                            <input type="text"
                                                name="pic_account_manager[{{ $loop->index }}][pic_account_posisi]"
                                                id="input-pic-account-posisi"
                                                class="form-control text-black"
                                                value="{{ $pic_account_manager->position }}" disabled>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-account-email">{{ __('Email') }}</label>
                                            <input type="text"
                                                name="pic_account_manager[{{ $loop->index }}][pic_account_email]"
                                                id="input-pic-account-email"
                                                class="form-control text-black"
                                                value="{{ $pic_account_manager->email }}" disabled>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-account-hp">{{ __('No HP') }}</label>
                                            <input type="text"
                                                name="pic_account_manager[{{ $loop->index }}][pic_account_hp]"
                                                id="input-pic-account-hp"
                                                class="form-control text-black"
                                                value="{{ $pic_account_manager->phone_number }}" disabled>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
                                <div class="px-lg-4">
                                    @foreach ($vendor->picContactVendors->where('is_pic_account_manager', 0) as $pic_finance)
                                        <div class="d-flex justify-content-between mt-5 mb-3">
                                            <h4 class="mx-auto">PIC Finance {{ $loop->iteration }} </h4>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-finance-name">{{ __('PIC Name') }}</label>
                                            <input type="text"
                                                name="pic_finance[{{ $loop->index }}][pic_finance_name]"
                                                id="input-pic-finance-name"
                                                class="form-control text-black"
                                                value="{{ $pic_finance->pic_name }}" disabled>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-finance-ktp">{{ __('No KTP') }}</label>
                                            <input type="text"
                                                name="pic_finance[{{ $loop->index }}][pic_finance_ktp]"
                                                id="input-pic-finance-ktp"
                                                class="form-control text-black"
                                                value="{{ $pic_finance->ktp_number }}" disabled>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-finance-posisi">{{ __('Posisi') }}</label>
                                            <input type="text"
                                                name="pic_finance[{{ $loop->index }}][pic_finance_posisi]"
                                                id="input-pic-finance-posisi"
                                                class="form-control text-black"
                                                value="{{ $pic_finance->position }}" disabled>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-finance-email">{{ __('Email') }}</label>
                                            <input type="text"
                                                name="pic_finance[{{ $loop->index }}][pic_finance_email]"
                                                id="input-pic-finance-email"
                                                class="form-control text-black" 
                                                value="{{ $pic_finance->email }}" disabled>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-pic-finance-hp">{{ __('No HP') }}</label>
                                            <input type="text"
                                                name="pic_finance[{{ $loop->index }}][pic_finance_hp]"
                                                id="input-pic-finance-hp"
                                                class="form-control text-black"
                                                value="{{ $pic_finance->pic_finance_hp }}" disabled>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
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
