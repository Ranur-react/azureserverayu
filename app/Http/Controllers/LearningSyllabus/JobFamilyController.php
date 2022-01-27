<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use App\Models\JobFamily;
use Illuminate\Http\Request;
use App\Http\Requests\LearningAdmin\Store\StoreJobFamilyRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateJobFamilyRequest;

class JobFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('learning_syllabus_access');
        $jobFamilies = JobFamily::withCount('pending_syllabuses')->where('level', 0)->get();
        return view('LearningSyllabus.JobFamily.index', compact('jobFamilies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('learning_syllabus_create');

        return view('LearningSyllabus.JobFamily.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreJobFamilyRequest $request)
    {
        JobFamily::create([
            'name' => $request->name,
            'number' => 0,
            'job_family_code' => $request->job_family_code,
            'description' => 'Kelompok jabatan yang bertanggung jawab',
            'parent_id' => null,
            'level' => 0,
            'level_description' => 'Job Family',
        ]);

        toast('Job Family Successfully Created', 'success');

        return redirect()->route('learning-syllabus.job-families.index');
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
    public function edit(JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_edit');

        return view('LearningSyllabus.JobFamily.edit', compact('jobFamily'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateJobFamilyRequest $request, JobFamily $jobFamily)
    {
        $jobFamily->update($request->validated());
        toast('Job Family Successfully Updated', 'success');
        return redirect()->route('learning-syllabus.job-families.edit', $jobFamily->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_delete');

        $jobFamily->delete();

        return redirect()->route('learning-syllabus.job-families.index')
            ->with('delete_job_family_message_success', 'Job Family deleted successfully. <a href="'.route('learning-syllabus.job-families.restore', $jobFamily). '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(int $jobFamily_id)
    {
        $this->authorize('learning_syllabus_edit');

        $jobFamily = JobFamily::withTrashed()->findOrFail($jobFamily_id);
        if ($jobFamily && $jobFamily->trashed()) {
            $jobFamily->restore();
        }

        toast('Job Family Restored Successfully', 'success');

        return redirect()->route('learning-syllabus.job-families.index');
    }

    public function restoreArchive(Request $request)
    {
        $this->authorize('learning_syllabus_edit');

        $validated = $request->validate([
            'job_family_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:job_families,id',
            ],
        ]);

        JobFamily::onlyTrashed()
            ->whereIn('id', $request->job_family_id)
            ->restore();

        toast('Job Family Restored Successfully', 'success');
    }


    public function forceDelete(Request $request)
    {
        $this->authorize('learning_syllabus_delete');

        $validated = $request->validate([
            'job_family_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:job_families,id',
            ],
        ]);

        JobFamily::onlyTrashed()
            ->whereIn('id', $request->job_family_id)
            ->forceDelete();

        toast('Job Family Deleted Successfully', 'success');
    }

    public function archive()
    {
        $this->authorize('learning_syllabus_access');
        $jobFamilies = JobFamily::onlyTrashed()->where('level', 0)->get();
        return view('LearningSyllabus.JobFamily.Archive.index', compact('jobFamilies'));
    }

}
