<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Elearning;
use App\Models\ElearningTest;
use App\Models\ElearningTestPosttestUser;
use App\Models\ElearningTestPretestUser;
use App\Models\ElearningTestScore;
use App\Models\Enrollment;
use Auth;
use Illuminate\Http\Request;

class ElearningTestController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPretest($id)
    {
        $elearning = Elearning::with(['modules', 'test', 'test.test_option'])->findOrFail($id);
        $type = 'Pre Test';
        $enrollment_id = Enrollment::where('user_id', '=', Auth::id())->where('elearning_id', '=', request('id_elearning'))->first()->id;

        $test_answers = ElearningTestPretestUser::where('enrollment_id', '=', $enrollment_id)->get();

        $score = ElearningTestScore::where('enrollment_id', '=', $enrollment_id)->first();

        return view('Karyawan.MyCourse.Course.Elearning.Test.show', compact('elearning', 'type', 'test_answers', 'score'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePretest(Request $request)
    {
        $answers = $request->jawaban;
        $enrollment_id = Enrollment::where('user_id', '=', Auth::id())->where('elearning_id', '=', request('id_elearning'))->first()->id;

        $correct = 0;
        foreach ($answers as $key => $answer) {
            $is_correct = ElearningTest::findOrFail($key)->option_correct_id == $answer ? true : false;

            $correct = $correct + ($is_correct ? 1 : 0);
            ElearningTestPretestUser::create([
                'enrollment_id' => $enrollment_id,
                'test_id' => $key,
                'option_id' => $answer,
                'is_correct' => $is_correct
            ]);
        }

        ElearningTestScore::create([
            'enrollment_id' => $enrollment_id,
            'score_pretest' => ($correct / count($answers) * 100),
            'score_posttest' => null
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPosttest($id)
    {
        $elearning = Elearning::with(['modules', 'test', 'test.test_option'])->findOrFail($id);
        $type = 'Post Test';
        $enrollment_id = Enrollment::where('user_id', '=', Auth::id())->where('elearning_id', '=', request('id_elearning'))->first()->id;

        $test_answers = ElearningTestPosttestUser::where('enrollment_id', '=', $enrollment_id)->get();

        $score = ElearningTestScore::where('enrollment_id', '=', $enrollment_id)->first();

        return view('Karyawan.MyCourse.Course.Elearning.Test.show', compact('elearning', 'type', 'test_answers', 'score'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePosttest(Request $request)
    {
        $answers = $request->jawaban;
        $enrollment_id = Enrollment::where('user_id', '=', Auth::id())->where('elearning_id', '=', request('id_elearning'))->first()->id;

        $correct = 0;
        foreach ($answers as $key => $answer) {
            $is_correct = ElearningTest::findOrFail($key)->option_correct_id == $answer ? true : false;

            $correct = $correct + ($is_correct ? 1 : 0);
            ElearningTestPosttestUser::create([
                'enrollment_id' => $enrollment_id,
                'test_id' => $key,
                'option_id' => $answer,
                'is_correct' => $is_correct
            ]);
        }

        ElearningTestScore::where('enrollment_id', '=', $enrollment_id)->update([
            'score_posttest' => ($correct / count($answers) * 100)
        ]);

        return redirect()->back();
    }
}
