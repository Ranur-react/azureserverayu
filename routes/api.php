<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get(
        'syllabuses-ajax/{id}',
        [
        App\Http\Controllers\Api\V1\SyllabusController::class,
        'show'
        ]
    )->name('api.v1.syllabuses-ajax.show');

    // Route::get('atasan-learning-design/request-syllabuses',
    //     [
    //         \App\Http\Controllers\Api\V1\Atasan\LearningDesign\RequestSyllabusController::class,
    //         'getPendingSyllabus'
    //     ])->middleware('can:learning_syllabus_approve')->name('api.v1.atasan-learning-desing.learning-syllabus.getPendingSyllabus');

    //     Route::group(['middleware' => ['can:csp_access']], function () {
    //         Route::get('csp/ajax-syllabus',
    //         [
    //             \App\Http\Controllers\Api\V1\LearningDesign\LearningNeedAnalysis\CspController::class,
    //             'index'
    //         ])->name('api.v1.learning-desing.learning-need-analysis.csp.index');
    //     });

    // Route::get('idp-period/{id}/syllabuses/{syllabus}/employee-list',
    //     [
    //         \App\Http\Controllers\Api\V1\LearningDesign\LearningNeedAnalysis\IdpController::class,
    //         'getIdpEmployee'
    //     ])->middleware('can:idp_access')->name('api.v1.learning-desing.learning-need-analysis.idp.getIdpEmployee');

    // Route::get('idp-period/{id}/syllabuses/{syllabus}/employee-list-priority-1',
    //     [
    //         \App\Http\Controllers\Api\V1\LearningDesign\LearningNeedAnalysis\IdpController::class,
    //         'getIdpEmployeePriority1'
    //     ])->middleware('can:idp_access')->name('api.v1.learning-desing.learning-need-analysis.idp.getIdpEmployeePriority1');
});
// Route::get('sub-job-families', [\App\Http\Controllers\Api\SubJobFamilyController::class, 'index'])
//     ->name('api.sub-job-families.index');

// Route::get('syllabuses', [\App\Http\Controllers\Api\SyllabusController::class, 'index'])
//     ->name('api.syllabuses.index');

Route::get('syllabuses/{id}/activity', [\App\Http\Controllers\Api\SyllabusController::class, 'activity'])
    ->name('api.syllabuses.activity');

Route::get('syllabuses-activity/{id}', [\App\Http\Controllers\Api\SyllabusController::class, 'showActivitySyllabus'])
    ->name('api.syllabuses.showActivitySyllabus');

Route::get('csp/{id}/syllabuses/edit', [\App\Http\Controllers\Api\SyllabusController::class, 'editSyllabus'])
    ->name('api.syllabuses.editSyllabus');

Route::get('job-family/{id}/syllabuses', [\App\Http\Controllers\Api\SyllabusController::class, 'jobFamilySyllabus'])
    ->name('api.syllabuses.jobFamilySyllabus');

Route::get('request-syllabuses', [\App\Http\Controllers\Api\SyllabusController::class, 'requestSyllabus'])
->name('api.syllabuses.requestSyllabus');

Route::get('atasan-request-syllabuses', [\App\Http\Controllers\Api\SyllabusController::class, 'atasanRequestSyllabus'])
->name('api.syllabuses.atasan.requestSyllabus');

Route::get('learning-design-syllabuses', [\App\Http\Controllers\Api\SyllabusController::class, 'learningDesignRequestSyllabus'])
->name('api.syllabuses.learning-design.requestSyllabus');

Route::get('idp-syllabuses', [\App\Http\Controllers\Api\SyllabusController::class, 'showIdpSyllabus'])
    ->name('api.syllabuses.showIdpSyllabus');

Route::get('syllabuses/{id}', [\App\Http\Controllers\Api\SyllabusController::class, 'show'])
    ->name('api.syllabuses.show');

Route::get('idp-karyawan', [\App\Http\Controllers\Api\IdpController::class, 'show'])
    ->name('api.idp.show');

Route::get('idp-karyawan-priority', [\App\Http\Controllers\Api\IdpController::class, 'showIdpPriority'])
    ->name('api.idp.showIdpPriority');

Route::get('idp-karyawan-priority1', [\App\Http\Controllers\Api\IdpController::class, 'showIdpPriority'])
    ->name('api.idp.showIdp1');

Route::get('idp', [\App\Http\Controllers\Api\IdpController::class, 'showIdp'])
    ->name('api.idp.showIdp');

Route::get('csp', [\App\Http\Controllers\Api\CspController::class, 'show'])
->name('api.csp.show');

// Route::get('levels/{id}/syllabuses', [\App\Http\Controllers\Api\LevelSyllabusController::class, 'show'])
// ->name('api.levels.syllabuses.show');

// Route::get('statuses/{id}/syllabuses', [\App\Http\Controllers\Api\StatusSyllabusController::class, 'show'])
// ->name('api.statuses.syllabuses.show');

// Route::get('locations/{id}/syllabuses', [\App\Http\Controllers\Api\LocationSyllabusController::class, 'show'])
// ->name('api.locations.syllabuses.show');

// Route::get('units/{id}/syllabuses', [\App\Http\Controllers\Api\UnitSyllabusController::class, 'show'])
// ->name('api.units.syllabuses.show');

// Route::get('competencies/{id}/syllabuses', [\App\Http\Controllers\Api\CompetencySyllabusController::class, 'show'])
// ->name('api.competencies.syllabuses.show');

// Route::get('vendors/{id}/syllabuses', [\App\Http\Controllers\Api\VendorSyllabusController::class, 'show'])
// ->name('api.vendors.syllabuses.show');

Route::get('user-needs-karyawan', [\App\Http\Controllers\Api\UserNeedController::class, 'show'])
    ->name('api.user-needs.show');
