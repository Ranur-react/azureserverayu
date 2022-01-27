<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\JobFamily;
use App\Models\SubJobFamily;
use App\Http\Requests\LearningAdmin\Store\StoreSubJobFamilyRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateSubJobFamilyRequest;
use App\Models\Syllabus;
use App\Models\SyllabusStatus;
use Illuminate\Http\Request;
use DataTables;

class JobFamilySubJobFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(JobFamily $jobFamily)
    {
        if ($jobFamily->level != 0) {
            abort(404);
        }

        $jobFamily->load('syllabuses.syllabusStatus');

        $syllabusStatuses = SyllabusStatus::all('id', 'name');
        
        return view('LearningSyllabus.SubJobFamily.index', compact('jobFamily', 'syllabusStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_create');

        $max_number = $jobFamily->jobFamilySubJobFamily()->withTrashed()->max('number') + 1;
        return view('LearningSyllabus.SubJobFamily.create', compact('jobFamily', 'max_number'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubJobFamilyRequest $request, JobFamily $jobFamily)
    {
        $max_number = $jobFamily->jobFamilySubJobFamily()->withTrashed()->max('number') + 1;

        $strpad_number = str_pad($max_number, 2, '0', STR_PAD_LEFT);
    
        $subFamily = $jobFamily->jobFamilySubJobFamily()->create([
            'name' => $request->name,
            'number' => $max_number,
            'job_family_code' => "$jobFamily->job_family_code.$strpad_number",
            'description' => 'Sub kelompok jabatan yang bertanggung jawab',
            'level' => 1,
            'level_description' => 'Sub Job Family'
        ]);

        toast('Sub Job Family Successfully Created', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.index', $jobFamily);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        $this->authorize('learning_syllabus_edit');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }

        return view(
            'LearningSyllabus.SubJobFamily.edit',
            compact('jobFamily', 'subJobFamily')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubJobFamilyRequest $request, 
    JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        $subJobFamily->update($request->validated());

        toast('Sub Job Family Successfully Updated', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.edit', [$jobFamily, $subJobFamily]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        $this->authorize('learning_syllabus_delete');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        $subJobFamily->delete();

        toast('Sub Job Family Successfully Deleted', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.index', $jobFamily)
            ->with('delete_sub_job_family_message_success', 'Sub Job Family deleted successfully. <a href="'.route('learning-syllabus.job-families.sub-job-families.restore', [$jobFamily, $subJobFamily]). '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(JobFamily $jobFamily, int $subJobFamily_id)
    {
        $this->authorize('learning_syllabus_edit');

        $subJobFamily = JobFamily::withTrashed()->findOrFail($subJobFamily_id);

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(403);
        }

        if ($subJobFamily && $subJobFamily->trashed()) {
            $subJobFamily->restore();
        }

        toast('Sub Job Family Restored Successfully', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.index', $jobFamily);
    }

    public function restoreArchive(Request $request, JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_edit');

        $validated = $request->validate([
            'sub_job_family_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:job_families,id',
            ],
        ]);

        JobFamily::onlyTrashed()
            ->whereIn('id', $request->sub_job_family_id)
            ->restore();

        toast('Sub Job Family Restored Successfully', 'success');
    }

    public function forceDelete(Request $request)
    {
        $this->authorize('learning_syllabus_delete');

        $validated = $request->validate([
            'sub_job_family_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:job_families,id',
            ],
        ]);

        JobFamily::onlyTrashed()
            ->whereIn('id', $request->sub_job_family_id)
            ->forceDelete();

        toast('Sub Job Family Deleted Successfully', 'success');
    }

    public function archive(JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_access');

        if ($jobFamily->level != 0) {
            abort(404);
        }
        $subJobFamilies = JobFamily::onlyTrashed()->where([
            ['level', 1],
            ['parent_id', $jobFamily->id]
        ])->get();
        $syllabuses = Syllabus::onlyTrashed()->where('job_family_id', $jobFamily->id)->get();
        return view('LearningSyllabus.SubJobFamily.Archive.index', compact('jobFamily', 'subJobFamilies', 'syllabuses'));
    }

    public function archiveAjaxSyllabus($jobFamily_id)
    {
        $this->authorize('learning_syllabus_access');

        $model = Syllabus::with('syllabusStatus')
        ->onlyTrashed()
        ->where('job_family_id', $jobFamily_id)
        ->latest()->select('syllabuses.*');

        return Datatables::of($model)
            ->editColumn('status_id', static function ($model) {
                if ($model->status_id == 1) {
                    return '<span class="badge badge-pill badge-success">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 2) {
                    return '<span class="badge badge-pill badge-muted">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 3) {
                    return '<span class="badge badge-pill badge-warning">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 4) {
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                }
            })->rawColumns(['status_id'])
            ->toJson();
    }

    public function getAjaxSyllabus(JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_access');
        
        $model = Syllabus::with('syllabusJobFamily', 'syllabusStatus')
        ->where('job_family_id', $jobFamily->id)
        ->latest()
        ->select('syllabuses.*');

        return Datatables::of($model)
            ->addColumn('status_id', static function ($model) {
                if ($model->status_id == 1) {
                    return '<span class="badge badge-pill badge-success">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 2) {
                    return '<span class="badge badge-pill badge-muted">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 3) {
                    return '<span class="badge badge-pill badge-warning">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 4) {
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                }
            })->editColumn('training_name', function ($model) {
                return '
                <a href="'.route('learning-syllabus.job-families.syllabuses.show', [$model->syllabusJobFamily->id, $model->id]).'">
                <div class="text-wrap" style="width: 27rem;">
                '.$model->training_name.'
                </div>
                </a>';
            })->addColumn('action', static function ($model) {
                return view('LearningSyllabus.SubJobFamily.Datatables.action', compact('model'));
            })->rawColumns(['training_name', 'status_id', 'action'])
            ->toJson();
    }
}
