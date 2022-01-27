<?php

namespace App\Http\Controllers\LearningOperation\ContentManagement;

use App\Http\Controllers\Controller;
use App\Models\Elearning;
use App\Models\ElearningTest;
use App\Models\ElearningTestOption;
use Illuminate\Http\Request;

class ElearningTestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (ElearningTest::where('elearning_id', '=', request('elearning'))->exists()) {
            ElearningTest::where('elearning_id', '=', request('elearning'))->delete();
        }

        foreach ($request->pertanyaan['soal'] as $key_soal => $soal) {
            $elearning_test = ElearningTest::create([
                'elearning_id' => request('elearning'),
                'pertanyaan' => $soal,
                'option_correct_id' => null
            ]);

            foreach ($request->pertanyaan['jawaban'][$key_soal] as $key_jawaban => $opsi_jawaban) {
                $test_option = ElearningTestOption::create([
                    'test_id' => $elearning_test->id,
                    'option' => $opsi_jawaban,
                ]);
                if ($key_jawaban == $request->pertanyaan['is_correct'][$key_soal][0]) {
                    $elearning_test->update([
                        'option_correct_id' => $test_option->id
                    ]);
                }
            }
        }

        toast('Test Successfully Created', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elearning = Elearning::with(['modules', 'test', 'test.test_option'])->findOrFail($id);

        return view('LearningOperation.ContentManagement.Test.show', compact('elearning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elearning = Elearning::with(['modules', 'test', 'test.test_option'])->findOrFail($id);
        return view('LearningOperation.ContentManagement.Test.edit', compact('elearning'));
    }
}
