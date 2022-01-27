<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\Csp;
use App\Models\JobFamily;
use App\Models\PrfCompetencyCatalog;
use App\Models\RequestSyllabus;
use App\Models\Syllabus;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class   SyllabusController extends Controller
{
    public function index()
    {
        // $query = DB::table('competency_syllabus')
        // ->join('competencies', 'competency_syllabus.competency_id', '=', 'competencies.id')
        // ->join('syllabuses', 'competency_syllabus.syllabus_id', '=', 'syllabuses.id')
        // ->where('syllabuses.is_approved', '=', 1)
        // ->where('syllabuses.is_active', '=', 1)
        // ->select(['syllabuses.training_name', 'syllabuses.training_summary',
        //     'competencies.name']);

        $model = Syllabus::with('competencies')->where('status_id', 1)
        ->select('syllabuses.*');

        return Datatables::of($model)
            ->addColumn('competencies', function (Syllabus $syllabus) {
                return $syllabus->competencies->map(function($competency) {
                    return $competency->name;
                })->implode('<br>');
            })
            // ->editColumn('select_syllabus', static function ($model) {
            //     return '<div class="custom-control custom-checkbox text-center">
            //     <input type="checkbox" class="syllabus-class custom-control-input" value="'.$model->id.'" name="syllabus[]"
            //    id="customCheck1'.$model->id.'">
            //      <label class="custom-control-label"
            //      for="customCheck1'.$model->id.'"></label>
            //        </div>';
            // })
            ->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.syllabuses.show', $model->id).'" class="pe-auto modal-global">
                    <div class="text-wrap" style="width: 16rem;">
                    '.$model->training_name.'
                    </div>
                </a>';
            })->editColumn('training_summary', function ($model) {
                return '<div class="text-wrap" style="width: 20rem;">'.$model->training_summary.'</div>';
            })
            ->rawColumns(['competencies','training_name', 'training_summary'])
            ->toJson();
    }

    public function show($id)
    {
        $syllabus = Syllabus::findOrFail($id);

        $array['syllabus'] = json_decode($syllabus, true);
        $array['competencies'] = json_decode($syllabus->competencies, true);
        $array['vendors'] = json_decode($syllabus->vendors, true);
        $array['levels'] = json_decode($syllabus->levels, true);
        $array['statuses'] = json_decode($syllabus->statuses, true);
        $array['locations'] = json_decode($syllabus->locations, true);
        $array['units'] = json_decode($syllabus->units, true);

        return json_encode($array);
    }

    public function showIdpSyllabus(Request $request)
    {
        $user_id = $request->user_id;
        $idp_period_id = $request->idp_period_id;
        $cart_idp = Cart::instance('idp'.$user_id.$idp_period_id)->content();

        $model = PrfCompetencyCatalog::with(['syllabuses' => fn($query) =>
        $query->where('status_id', 1)
        ])
        ->whereHas('syllabuses', fn ($query) =>
            $query->where('status_id', 1)
        );
        return Datatables::of($model)
            ->addColumn('competencies', function (PrfCompetencyCatalog $competency) use ($cart_idp, $user_id, $idp_period_id ) {
                return view('LearningDesign.LearningNeedAnalysis.IDP.Karyawan.Detail.ajax-syllabus', compact('user_id', 'idp_period_id', 'competency', 'cart_idp'));
            })->rawColumns(['competencies'])
            ->make(true);
    }

    public function requestSyllabus()
    {
        // $model = DB::table('syllabuses')
        // ->join('job_families', 'syllabuses.job_family_id', '=', 'job_families.id')
        // ->where('is_approved', 1)
        // ->where('is_active.id', 1)
        // ->orderBy('created_at', 'asc')
        // ->select(['syllabuses.training_name', 'job_families.name',
        // 'job_families.level_description', 'syllabuses.created_at']);

        $model = Syllabus::with('syllabusJobFamily', 'syllabusStatus')
        ->where('status_id', 3)->latest()->select('syllabuses.*');

        return Datatables::of($model)
            ->editColumn('job_family_name', static function ($model) {
                return $model->syllabusJobFamily->name;
            })
            ->editColumn('level_description', static function ($model) {
                return $model->syllabusJobFamily->level_description;
                })
            ->editColumn('action', static function ($model) {
                return '<a href="'.route('learning-design.learning-syllabus.request-syllabus.job-families.edit', [$model->id, $model->syllabusJobFamily->id]).'" class="btn btn-sm btn-primary"
                type="button">View</a>';
            })->editColumn('created_at', static function ($model) {
                return Carbon::parse($model->created_at)->format('d F Y');
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function atasanRequestSyllabus()
    {
        $model = RequestSyllabus::with('syllabusJobFamily', 'syllabusStatus')
        ->where('created_by', Auth::user()->id)->latest()->select('request_syllabuses.*');

        return Datatables::of($model)
            ->editColumn('job_family_name', static function ($model) {
                return $model->syllabusJobFamily->name;
            })
            ->editColumn('level_description', static function ($model) {
                return $model->syllabusJobFamily->level_description;
                })
            ->editColumn('status_id', static function ($model) {
                return '<span class="badge badge-pill badge-warning">Pending</span>';
            })->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.syllabuses.show', $model->id).'" class="pe-auto modal-global">'.$model->training_name.'</a>';
            })->editColumn('action', static function ($model) {
                return '<a href="'.route('learning-design.learning-syllabus.request-syllabus.job-families.edit', [$model->id, $model->syllabusJobFamily->id]).'" class="btn btn-sm btn-primary"
                type="button">Lihat</a>';
            })->editColumn('created_at', static function ($model) {
                return Carbon::parse($model->created_at)->format('d F Y');
            })
            ->rawColumns(['training_name', 'status_id', 'action'])
            ->toJson();
    }

    public function learningDesignRequestSyllabus()
    {
        $model = RequestSyllabus::with('syllabusJobFamily', 'syllabusStatus')
                ->latest()->select('request_syllabuses.*');

        return Datatables::of($model)
            ->editColumn('status_id', static function ($model) {
                if($model->status_id == 1){
                    return '<span class="badge badge-pill badge-info">'.$model->syllabusStatus->name.'</span>';
                }elseif($model->status_id == 2){
                    return '<span class="badge badge-pill badge-success">'.$model->syllabusStatus->name.'</span>';
                }elseif($model->status_id == 3){
                    return '<span class="badge badge-pill badge-warning">'.$model->syllabusStatus->name.'</span>';
                }elseif($model->status_id == 4){
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                }elseif($model->status_id == 5){
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                }else{
                    return '<span class="badge badge-pill badge-muted">Unknown Status</span>';
                }
            })
            ->editColumn('job_family_name', static function ($model) {
                return $model->syllabusJobFamily->name;
            })
            ->editColumn('level_description', static function ($model) {
                return $model->syllabusJobFamily->level_description;
                })
           ->editColumn('action', static function ($model) {
                return '<a href="'.route('learning-design.learning-need-analysis.user-needs.show', [$model->id]).'" class="btn btn-sm btn-primary"
                type="button">View</a>';
            })->editColumn('created_at', static function ($model) {
                return Carbon::parse($model->created_at)->format('d F Y');
            })
            ->rawColumns(['status_id', 'action'])
            ->toJson();
    }


    public function ajaxSyllabus($id)
    {
        $model = Syllabus::with('syllabusJobFamily', 'syllabusStatus')
        ->where('job_family_id', $id)->latest()->select('syllabuses.*');

        return Datatables::of($model)
            ->editColumn('status_id', static function ($model) {
                if($model->syllabusStatus->name == "Pending"){
                    return '<span class="badge badge-pill badge-warning">'.$model->syllabusStatus->name.'</span>';
                }
                if($model->syllabusStatus->name == "Active"){
                    return '<span class="badge badge-pill badge-success">'.$model->syllabusStatus->name.'</span>';
                }if($model->syllabusStatus->name == "Deactive"){
                    return '<span class="badge badge-pill badge-secondary">'.$model->syllabusStatus->name.'</span>';
                } if($model->syllabusStatus->name == "Reject"){
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                }
            })->editColumn('training_name', function ($model) {
                return '
                <a href="'.route('learning-design.learning-syllabus.job-families.syllabuses.show', [$model->syllabusJobFamily->id, $model->id]).'">
                <div class="text-wrap" style="width: 27rem;">
                '.$model->training_name.'
                </div>
                </a>';
            })->editColumn('action', static function ($model) {
                return view('LearningDesign.LearningSyllabus.SubJobFamily.Ajax.index', compact('model'));
            })->rawColumns(['training_name', 'status_id', 'action'])
            ->toJson();
    }

    public function editSyllabus($id)
    {
        $csp = Csp::findOrFail($id);

        $model = Syllabus::with('competencies')->where('status_id', 1)->select('syllabuses.*');

        return Datatables::of($model)
            ->addColumn('competencies', function (Syllabus $syllabus) {
                return $syllabus->competencies->map(function($competency) {
                    return $competency->name;
                })->implode('<br>');
            })->editColumn('select_syllabus', static function ($model) use ($csp) {
                return view('LearningDesign.LearningNeedAnalysis.CSP.Syllabus.ajax-edit', compact('model', 'csp'));
            })->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.syllabuses.show', $model->id).'" class="pe-auto modal-global">
                    <div class="text-wrap" style="width: 16rem;">
                    '.$model->training_name.'
                    </div>
                </a>';
            })->editColumn('training_summary', function ($model) {
                return '<div class="text-wrap" style="width: 20rem;">'.$model->training_name.'</div>';
            })
            ->rawColumns(['competencies','training_name', 'training_summary', 'select_syllabus'])
            ->toJson();
    }

    public function showActivitySyllabus($id)
    {
        $activity = Activity::findOrFail($id);

        return json_encode(
            array(
                'data' => $activity->properties['attributes'],
                'old' => $activity->properties['old'],
                'level_new' => $activity->properties['attributes']['level'] ?? '',
                'level_old' => $activity->properties['old']['level'] ?? '',
              )
        );
    }

    public function activity($id)
    {
        $model  = Activity::with('subject', 'causer')
            ->where('subject_type', 'App\Models\Syllabus')
            ->where('subject_id', $id)
            ->orderBy('created_at')
            ->select('activitylog.*');

        return Datatables::of($model)
            ->editColumn('causer', static function ($model) {
                    return '<span class="badge badge-pill badge-warning">'.$model->causer->name.'</span>';
            })
            ->editColumn('action', static function ($model) {
                return '<a href="{{ route(api.syllabuses.showActivitySyllabus, $model->id) }}" class="modal-global">
                    View Changes
                    </a>';
            })->rawColumns(['causer','action'])
            ->toJson();
    }
}
