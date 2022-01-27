<?php

namespace App\Http\Controllers\SetupSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StorePicAccountRequest;
use App\Http\Requests\LearningAdmin\Store\StorePicFinanceRequest;
use App\Http\Requests\LearningAdmin\Update\UpdatePicAccountRequest;
use App\Models\PicContactVendor;
use App\Models\Vendor;
use App\Http\Requests\LearningAdmin\Store\StoreVendorRequest;
use App\Http\Requests\LearningAdmin\Update\UpdatePicFinanceRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateVendorRequest;
use App\Models\VendorStatus;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Propaganistas\LaravelPhone\PhoneNumber;
use DataTables;
use Auth;
use Session;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('vendor_access');

        $vendorStatuses = VendorStatus::all('id', 'name');

        return view('SetupSettings.Vendor.index', compact('vendorStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('vendor_create');

        $vendorStatuses = VendorStatus::all('id', 'name');

        return view('SetupSettings.Vendor.create', compact('vendorStatuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendorRequest $request)
    {
        $vendor = Vendor::create([
            'pt_name' => $request->pt_name,
            'partner_name' => $request->partner_name,
            'supplier_number' => $request->supplier_number,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'telephone_number' => $request->telephone_number,
            'ext' => $request->ext,
            'fax' => $request->fax,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'category' => $request->category,
            'cluster_1' => $request->cluster_1,
            'cluster_2_primary' => $request->cluster_2_primary,
            'cluster_2_optional' => $request->cluster_2_optional,
            'status_id' => $request->status,
        ]);
        

        foreach ($request->pic_account_manager as $row) {
            $vendor->picContactVendors()->create([
                'pic_name' => $row['pic_account_name'],
                'nik' => $row['pic_account_nik'],
                'position' => $row['pic_account_position'],
                'email' => $row['pic_account_email'],
                'phone_number' => $row['pic_account_phone_number'],
                'is_pic_account_manager' => 1,
            ]);
        }

        foreach ($request->pic_finance as $row) {
            $vendor->picContactVendors()->create([
                'pic_name' => $row['pic_finance_name'],
                'nik' => $row['pic_finance_nik'],
                'position' => $row['pic_finance_position'],
                'email' => $row['pic_finance_email'],
                'phone_number' => $row['pic_finance_phone_number'] ,
                'is_pic_account_manager' => 0,
            ]);
        }

        $image = $request->file('vendor_logo');
        if ($request->hasFile('vendor_logo') && $request->file('vendor_logo')->isValid()) {
            $vendor->addMediaFromRequest('vendor_logo')
                ->usingName($image->getClientOriginalName())
                ->toMediaCollection('vendor_logo');
        }

        toast('Vendor Successfully Created', 'success');

        return redirect()->route('setup-settings.vendors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('SetupSettings.Vendor.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        $this->authorize('vendor_edit');

        $vendorStatuses = VendorStatus::all('id', 'name');

        $images = $vendor->getFirstMedia('vendor_logo');

        return view('SetupSettings.Vendor.edit', compact('vendor', 'images', 'vendorStatuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        $vendor->update($request->validated());

        toast('Vendor Successfully Updated', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $this->authorize('vendor_delete');

        $vendor->delete();

        toast('Vendor Successfully Deleted', 'success');

        return redirect()->back();
    }

    public function getAjaxVendors()
    {
        $this->authorize('vendor_access');

        $model = Vendor::with('vendorStatus')->latest()->select('vendors.*');

        return Datatables::of($model)
            ->editColumn('status_id', static function ($model) {
                if ($model->status_id == 1) {
                    return '<span class="badge badge-pill badge-success">'.$model->vendorStatus->name.'</span>';
                }else{
                    return '<span class="badge badge-pill badge-info">'.$model->vendorStatus->name.'</span>';
                }
            })
            ->editColumn('partner_name', function ($model) {
                if (Auth::user()->can('vendor_syllabus_access')) {
                    return '
                    <a href="' . route('setup-settings.vendors.syllabuses.index', $model->id) . '">
                        <div>
                        ' . $model->partner_name . '
                       </div>
                    </a>';
                } else {
                    return '
                    <div>
                    ' . $model->partner_name . '
                    </div>';
                }
            })->editColumn('action', static function ($model) {
                return view('SetupSettings.Vendor.Datatable.action', compact('model'));
            })->rawColumns(['status_id', 'partner_name', 'action'])
            ->toJson();
    }

    public function storeImage(Request $request, Vendor $vendor)
    {
        $this->authorize('vendor_edit');

        $image = $request->file('vendor_logo');
        if ($request->hasFile('vendor_logo') && $request->file('vendor_logo')->isValid()) {
            $vendor->addMediaFromRequest('vendor_logo')
                ->usingName($image->getClientOriginalName())
                ->toMediaCollection('vendor_logo');
        }

        toast('Vendor Image Successfully Uploaded', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor);
    }

    public function destroyImage(Request $request, Vendor $vendor)
    {
        $this->authorize('vendor_edit');

        $media = Media::find($request->input('id'));
        $model_type = $media->model_type;
        $model = $model_type::find($media->model_id);
        $model->deleteMedia($media->id);

        toast('Vendor Image Successfully Deleted', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor);
    }

    public function destroyPicAccount(Vendor $vendor, PicContactVendor $picContactVendor)
    {
        $this->authorize('vendor_edit');

        $picContactVendor->delete();

        toast('Pic Account Successfully Deleted', 'success');

        session()->flashInput(['tab'=>'tabs-icons-text-2']);

        return route('setup-settings.vendors.edit', $vendor);
    }

    public function destroyPicFinance(Vendor $vendor, PicContactVendor $picContactVendor)
    {
        $this->authorize('vendor_edit');

        $picContactVendor->delete();

        toast('Pic Finance Successfully Deleted', 'success');

        session()->flashInput(['tab'=>'tabs-icons-text-3']);

        return route('setup-settings.vendors.edit', $vendor);
    }

    public function storePicAccounts(StorePicAccountRequest $request, Vendor $vendor)
    {
        foreach ($request->pic_account_manager_new as $row) {
            $vendor->picContactVendors()->create([
                'pic_name' => $row['pic_account_name_new'],
                'nik' => $row['pic_account_nik_new'],
                'position' => $row['pic_account_position_new'],
                'email' => $row['pic_account_email_new'],
                'phone_number' => $row['pic_account_phone_number_new'],
                'is_pic_account_manager' => 1,
            ]);
        }

        toast('Pic Account Successfully Created', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor)->withInput(['tab'=>'tabs-icons-text-2']);
    }

    public function storePicFinances(StorePicFinanceRequest $request, Vendor $vendor)
    {
        foreach ($request->pic_finance_new as $row) {
            $vendor->picContactVendors()->create([
                'pic_name' => $row['pic_finance_name_new'],
                'nik' => $row['pic_finance_nik_new'],
                'position' => $row['pic_finance_position_new'],
                'email' => $row['pic_finance_email_new'],
                'phone_number' => $row['pic_finance_phone_number_new'],
                'is_pic_account_manager' => 0,
            ]);
        }

        toast('Pic Finance Successfully Created', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor)->withInput(['tab'=>'tabs-icons-text-3']);
    }

    public function updatePicAccounts(UpdatePicAccountRequest $request, 
    Vendor $vendor): \Illuminate\Http\RedirectResponse
    {
        foreach ($request->pic_account_manager as $row) {
            $picContactVendor = PicContactVendor::findOrFail($row['id']);
                $picContactVendor->update(
                    [
                    'pic_name' => $row['pic_account_name'],
                    'nik' => $row['pic_account_nik'],
                    'position' => $row['pic_account_position'],
                    'phone_number' => $row['pic_account_phone_number'] ,
                    'email' => $row['pic_account_email'],
                    ],
                );
        }
   

        toast('Pic Account Successfully Updated', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor)->withInput(['tab'=>'tabs-icons-text-2']);
    }

    public function updatePicFinances(UpdatePicAccountRequest $request, 
    Vendor $vendor): \Illuminate\Http\RedirectResponse
    {
        foreach ($request->pic_finance as $row) {
            $picFinance = PicContactVendor::findOrFail($row['id']);
                $picFinance->update(
                    [
                    'pic_name' => $row['pic_finance_name'],
                    'nik' => $row['pic_finance_nik'],
                    'position' => $row['pic_finance_position'],
                    'phone_number' => $row['pic_finance_phone_number'] ,
                    'email' => $row['pic_finance_email'],
                    ],
                );
        }
        toast('Pic Finance Successfully Updated', 'success');

        return redirect()->route('setup-settings.vendors.edit', $vendor)->withInput(['tab'=>'tabs-icons-text-3']);
    }
}
