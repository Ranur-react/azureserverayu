<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/', function () {
    //     return view('Karyawan/Home/index');
    // });

    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::post('/mark-as-read', [App\Http\Controllers\HomeController::class, 'markNotification'])->name('markNotification');

    // sub group super admin
    Route::group([
        'prefix' => 'super-admin',
        'middleware' => 'role:Super Admin',
        'as' => 'super-admin.',
    ], function () {
        Route::get('/dashboard', [
            App\Http\Controllers\SuperAdmin\DashboardController::class,
            'index'
        ])->name('dashboard.index');
        Route::group(['prefix' => 'user-management', 'as' => 'user-management.'], function () {
            Route::resource(
                'permissions',
                'App\Http\Controllers\SuperAdmin\UserManagement\PermissionController',
                ['except' => ['show']]
            );
            Route::resource(
                'roles',
                'App\Http\Controllers\SuperAdmin\UserManagement\RoleController',
                ['except' => ['show']]
            );
            Route::get('users/{id}/restore', [
                App\Http\Controllers\SuperAdmin\UserManagement\UserController::class,
                'restore'
            ])->name('users.restore');
            Route::resource(
                'users',
                'App\Http\Controllers\SuperAdmin\UserManagement\UserController',
                ['except' => ['show']]
            );
        });
        Route::group(['prefix' => 'log', 'as' => 'log.'], function () {
            Route::get('/login-log', [
                App\Http\Controllers\SuperAdmin\Log\LoginLogController::class,
                'index'
            ])->name('loginLog.index');
        });
    });
    Route::get('/super-admin/create-karyawan', function () {
        return view('SuperAdmin/UserManagement/Karyawan/createkaryawan');
    });
    Route::get('/super-admin/daftar-karyawan', function () {
        return view('SuperAdmin/UserManagement/Karyawan/index');
    });
    Route::get('/super-admin/edit-karyawan', function () {
        return view('profile/editkaryawan');
    });

//
//    //sub group learning design and atasan learning design
//    Route::group([
//        'prefix' => 'learning-design',
//        // 'middleware' => ['role:Learning Design|Atasan Learning Design'],
//        'as' => 'learning-design.',
//    ], function () {

        // Route::get('/home', [App\Http\Controllers\LearningDesign\HomeController::class, 'index'])->name('home.index');
        Route::group([
            'prefix' => 'learning-syllabus',
            'as' => 'learning-syllabus.',
        ], function () {
            //Job Family directory
            Route::delete(
                'job-families/archive/force-delete',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilyController::class,
                    'forceDelete'
                ]
            )->name('job-families.archive.force_delete');
            Route::get(
                'job-families/archive/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilyController::class,
                    'restoreArchive'
                ]
            )->name('job-families.archive.restore');
            Route::get(
                'job-families/{jobFamily_id}/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilyController::class,
                    'restore'
                ]
            )->name('job-families.restore');
            Route::get(
                'job-families/archive',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilyController::class,
                    'archive'
                ]
            )->name('job-families.archive');
            // Route::get(
            //     'job-families/{jobFamily_id}/ajax-archive-syllabuses',
            //     [App\Http\Controllers\LearningDesign\LearningSyllabus\JobFamilySubJobFamilyController::class, 'archiveAjaxSyllabus'])
            // ->name('job-families.archiveAjaxSyllabus');
            Route::resource(
                'job-families',
                'App\Http\Controllers\LearningSyllabus\JobFamilyController',
                ['except' => ['show']]
            );

            //Sub Job Family directory
            Route::delete(
                'job-families/{job_family}/sub-job-families/archive/force-delete',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilyController::class,
                    'forceDelete'
                ]
            )->name('job-families.sub-job-families.archive.force_delete');
            Route::get(
                'job-families/{job_family}/sub-job-families/archive/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilyController::class,
                    'restoreArchive'
                ]
            )->name('job-families.sub-job-families.archive.restore');
            Route::get(
                'job-families/{job_family}/sub-job-families/{subJobFamily_id}/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilyController::class,
                    'restore'
                ]
            )->name('job-families.sub-job-families.restore');

            Route::get(
                'job-families/{job_family}/sub-job-families/archive',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilyController::class,
                    'archive'
                ]
            )->name('job-families.sub-job-families.archive');

            //Get syllabus ajax for job family
            Route::get(
                'job-families/{job_family}/sub-job-families/ajax-syllabuses',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilyController::class,
                    'getAjaxSyllabus']
            )
            ->name('job-families.sub-job-families.getAjaxSyllabus');

            Route::resource(
                'job-families.sub-job-families',
                'App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilyController'
            );

            // Job Family Syllabus
            Route::get(
                'job-families/{job_family}/syllabuses/archive/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                    'restoreArchive'
                ]
            )->name('job-families.syllabuses.archive.restore');
            Route::get(
                '/job-families/{job_family}/syllabuses/{syllabus_id}/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                    'restore'
                ]
            )->name('job-families.syllabuses.restore');
            Route::delete(
                'job-families/{job_family}/syllabuses/archive/force-delete',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                    'forceDelete'
                ]
            )->name('job-families.syllabuses.archive.force_delete');
            Route::put(
                'job-families/{job_family}/syllabuses/{syllabus}/activate',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                    'activate'
                ]
            )->name('job-families.syllabuses.activate');
            Route::put(
                'job-families/{job_family}/syllabuses/{syllabus}/deactivate',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                    'deactivate'
                ]
            )->name('job-families.syllabuses.deactivate');

            //select2 jobfamily routes for get ajax location, units, syllabus

            Route::get(
                'job-families/{job_family}/syllabuses/ajax-select2-locations',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                'getSelect2LocationsAjax'
                ]
            )->name('job-families.syllabuses.getSelect2LocationsAjax');

            Route::get(
                'job-families/{job_family}/syllabuses/ajax-select2-organization-units',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                'getSelect2OrganizationUnitsAjax'
                ]
            )->name('job-families.syllabuses.getSelect2OrganizationUnitsAjax');

            Route::get(
                'job-families/{job_family}/syllabuses/ajax-select2-competencies',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                'getSelect2CompetenciesAjax'
                ]
            )->name('job-families.syllabuses.getSelect2CompetenciesAjax');

            Route::get(
                'job-families/{job_family}/syllabuses/ajax-select2-vendors',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                'getSelect2VendorsAjax'
                ]
            )->name('job-families.syllabuses.getSelect2VendorsAjax');

            Route::resource(
                'job-families.syllabuses',
                'App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController'
            );

            //Sub Job Family Syllabus
            Route::put(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/{syllabus}/activate',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'activate'
                ]
            )->name('job-families.sub-job-families.syllabuses.activate');
            Route::put(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/{syllabus}/deactivate',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'deactivate'
                ]
            )->name('job-families.sub-job-families.syllabuses.deactivate');
            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/archive/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'restoreArchive'
                ]
            )->name('job-families.sub-job-families.syllabuses.archive.restore');
            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/{syllabus_id}/restore',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'restore'
                ]
            )->name('job-families.sub-job-families.syllabuses.restore');
            Route::delete(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/archive/force-delete',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'forceDelete'
                ]
            )->name('job-families.sub-job-families.syllabuses.force_delete');
            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/archive',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'archive'
                ]
            )->name('job-families.sub-job-families.syllabuses.archive');

            //Get syllabus ajax for sub job family
            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/ajax-syllabuses',
                [
                    App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                    'getAjaxSyllabus'
                ]
            )->name('job-families.sub-job-families.syllabuses.getAjaxSyllabus');

            //select2 subjobfamily routes for get ajax location, units, syllabus

            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/ajax-select2-locations',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                'getSelect2LocationsAjax'
                ]
            )->name('job-families.sub-job-families.syllabuses.getSelect2LocationsAjax');

            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/ajax-select2-organization-units',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                'getSelect2OrganizationUnitsAjax'
                ]
            )->name('job-families.sub-job-families.syllabuses.getSelect2OrganizationUnitsAjax');

            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/ajax-select2-competencies',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController::class,
                'getSelect2CompetenciesAjax'
                ]
            )->name('job-families.sub-job-families.syllabuses.getSelect2CompetenciesAjax');

            Route::get(
                'job-families/{job_family}/sub-job-families/{sub_job_family}/syllabuses/ajax-select2-vendors',
                [
                App\Http\Controllers\LearningSyllabus\JobFamilySyllabusController::class,
                'getSelect2VendorsAjax'
                ]
            )->name('job-families.sub-job-families.syllabuses.getSelect2VendorsAjax');

            Route::resource(
                'job-families.sub-job-families.syllabuses',
                'App\Http\Controllers\LearningSyllabus\JobFamilySubJobFamilySyllabusController'
            );

            Route::get(
                'syllabuses-activity/{id}',
                [
                App\Http\Controllers\LearningSyllabus\ActivityController::class, 'show'
                ]
            )->name('activity.show');

            // User has permission to approve catalog syllabus
            Route::group(['middleware' => ['permission:learning_syllabus_approve']], function () {
                Route::get(
                    'request-syllabus/ajax-syllabus',
                    [
                        App\Http\Controllers\LearningSyllabus\RequestSyllabusController::class,
                        'getPendingSyllabus'
                    ]
                )->name('getPendingSyllabus');
                Route::resource(
                    'request-syllabus',
                    'App\Http\Controllers\LearningSyllabus\RequestSyllabusController',
                    ['only' => ['index']]
                );
                Route::put(
                    'request-syllabus/{id}/job-families/{job_family}/reject',
                    [
                        App\Http\Controllers\LearningSyllabus\RequestSyllabusJobFamilyController::class,
                        'reject'
                    ]
                )->name('request-syllabus.job-families.reject');
                Route::resource(
                    'request-syllabus.job-families',
                    'App\Http\Controllers\LearningSyllabus\RequestSyllabusJobFamilyController',
                    ['only' => ['edit', 'update']]
                );
            });
        });

        Route::get(
            'show-syllabuses-ajax/{id}',
            [
                App\Http\Controllers\SyllabusController::class,
                'show'
            ]
        )->name('syllabuses.ajax.show');

        // Learning Need Analaysis
        Route::group(
            [
            'prefix' => 'learning-need-analysis',
            'as' => 'learning-need-analysis.'
            ],
            function () {
                Route::get(
                    'home',
                    [App\Http\Controllers\LearningNeedAnalysis\HomeController::class, 'index']
                )->name('home.index');

                Route::get(
                    'csp/{id}/syllabuses/ajax-csp-syllabuses',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'getCspSyllabuses'
                    ]
                )->name('csp.getCspSyllabuses');

                Route::get(
                    'csp/{id}/syllabuses/ajax-not-csp-syllabuses',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'getNotCspSyllabuses'
                    ]
                )->name('csp.getNotCspSyllabuses');

                Route::get(
                    'csp/{id}/syllabuses/edit-csp-syllabuses',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'editCspSyllabuses'
                    ]
                )->name('csp.syllabuses.editCspSyllabuses');

                Route::post(
                    'csp/{id}/syllabuses/store-csp-syllabuses',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'storeCspSyllabuses'
                    ]
                )->name('csp.storeCspSyllabuses');

                Route::post(
                    'csp/{id}/syllabuses/destroy-csp-syllabuses',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'destroyCspSyllabuses'
                    ]
                )->name('csp.destroyCspSyllabuses');

                Route::get(
                    'csp/{csp_id}/restore',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'restore'
                    ]
                )->name('csp.restore');

                Route::get(
                    'csp/restore',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'restoreArchive'
                    ]
                )->name('csp.restore.archive');

                Route::delete(
                    'csp/archive/force-delete',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'forceDelete'
                    ]
                )->name('csp.archive.forceDelete');

                Route::get(
                    'csp/archive',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'archive'
                    ]
                )->name('csp.archive');

                Route::get(
                    'csp/ajax-syllabus',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CspController::class,
                        'getAjaxSyllabus'
                    ]
                )->name('csp.getAjaxSyllabus');

                Route::resource('csp', 'App\Http\Controllers\LearningNeedAnalysis\CspController');
                Route::resource('csp.syllabuses', 'App\Http\Controllers\LearningNeedAnalysis\CspSyllabusController');

            //            Route::post(
            //                'carts-csp',
            //                [App\Http\Controllers\LearningDesign\LearningNeedAnalysis\CartCspController::class, 'store']
            //            )->name('carts-csp.store');
            //            Route::delete(
            //                'carts-csp/{id}',
            //                [App\Http\Controllers\LearningDesign\LearningNeedAnalysis\CartCspController::class, 'destroy']
            //            )->name('carts-csp.destroy');
               
                Route::get(
                    'idp-period/{idp_id}/restore',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpPeriodController::class,
                        'restore'
                    ]
                )->name('idp-period.restore');
                Route::get(
                    'idp-period/restore',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpPeriodController::class,
                        'restoreArchive'
                    ]
                )->name('idp-period.restore.archive');
                Route::delete(
                    'idp-period/archive/force-delete',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpPeriodController::class,
                        'forceDelete'
                    ]
                )->name('idp-period.archive.forceDelete');
                Route::get(
                    'idp-period/archive',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpPeriodController::class,
                        'archive'
                    ]
                )->name('idp-period.archive');

                Route::resource('idp-period', 'App\Http\Controllers\LearningNeedAnalysis\IdpPeriodController');
                Route::get(
                    'idp-period/{idpPeriod}/syllabuses/{syllabus}/employee-list',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpPeriodSyllabusController::class,
                        'getIdpEmployee'
                    ]
                )->name('idp-period.syllabuses.getIdpEmployee');
                Route::get(
                    'idp-period/{idpPeriod}/syllabuses/{syllabus}/employee-list-priority-1',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpPeriodSyllabusController::class,
                        'getIdpEmployeePriority1'
                    ]
                )->name('idp-period.syllabuses.getIdpEmployeePriority1');
                
                Route::resource('idp-period.syllabuses', 'App\Http\Controllers\LearningNeedAnalysis\IdpPeriodSyllabusController');

                Route::post(
                    'idp/{nik}/idp-period/{idp_period_id}/carts-idp',
                    [App\Http\Controllers\LearningNeedAnalysis\CartIdpController::class, 'store']
                )->name('carts-idp.store');
                Route::delete(
                    'idp/{nik}/idp-period/{idp_period_id}/carts-idp/{id}',
                    [App\Http\Controllers\LearningNeedAnalysis\CartIdpController::class, 'destroy']
                )->name('carts-idp.destroy');

                Route::get(
                    'idp/{nik}/idp-period/{idp_period_id}/create',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpController::class,
                        'createIdp'
                    ]
                )->name('idp.createIdp');

                Route::get(
                    'idp-syllabuses',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\IdpController::class,
                        'showIdpSyllabus'
                    ]
                )->name('idp.showIdpSyllabus');

                Route::get(
                    'idp/{nik}/idp-period/{idp_user_id}/detail',
                    [App\Http\Controllers\LearningNeedAnalysis\IdpController::class, 'detail']
                )->name('idp.detail');

                Route::delete(
                    'idp/{nik}/idp-period/{idp_user_id}/delete',
                    [App\Http\Controllers\LearningNeedAnalysis\IdpController::class, 'destroyIdp']
                )->name('idp.destroyIdp');

                Route::resource('idp', 'App\Http\Controllers\LearningNeedAnalysis\IdpController');
                Route::resource('idp-pool', 'App\Http\Controllers\LearningNeedAnalysis\IdpPoolController');

                Route::post(
                    'carts-user-needs',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CartUserNeedController::class,
                        'store'
                    ]
                )->name('carts-user-needs.store');

                Route::delete(
                    'carts-user-needs/{id}',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\CartUserNeedController::class,
                        'destroy'
                    ]
                )->name('carts-user-needs.destroy');


                Route::get(
                    'user-needs/ajax-syllabus',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                        'getAjaxSyllabus'
                    ]
                )->name('user-needs.getAjaxSyllabus');

                // Route::get(
                //     'user-needs/request-syllabuses/ajax-request-syllabus',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\RequestSyllabusController::class,
                //         'atasanRequestSyllabus'
                //     ]
                // )->name('request-syllabuses.atasanRequestSyllabus');

                // Route::get(
                //     'user-needs-karyawan/{id}',
                //     [App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                //         'atasanAjaxUserNeeds']
                // )
                //     ->name('user-needs.atasanAjaxUserNeeds');

                // Route::get(
                //     'user-needs-history',
                //     [App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                //         'historyAtasanUserNeeds']
                // )
                //     ->name('user-needs.historyAtasanUserNeeds');

                // Route::put(
                //     'user-needs/{id}/reject',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                //         'reject'
                //     ]
                // )->name('user-needs.reject');

                // Route::put(
                //     'user-needs/{id}/approve',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                //         'approve'
                //     ]
                // )->name('user-needs.approve');

                // Route::resource('user-needs/request-syllabuses', 'App\Http\Controllers\LearningDesign\LearningNeedAnalysis\RequestSyllabusController');

                Route::get(
                    'user-needs/ajax-select2-vendors',
                    [
                    App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                    'getSelect2VendorsAjax'
                    ]
                )->name('user-needs.getSelect2VendorsAjax');

                Route::get(
                    'user-needs/ajax-employees',
                    [
                    App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                    'getAjaxEmployees'
                    ]
                )->name('user-needs.getAjaxEmployees');

                Route::get(
                    'user-needs/ajax-employees',
                    [
                    App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                    'getAjaxEmployees'
                    ]
                )->name('user-needs.getAjaxEmployees');

                Route::get(
                    'user-needs/{user_need}/ajax-employees',
                    [
                    App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                    'getUserNeedAjaxEmployees'
                    ]
                )->name('user-needs.getUserNeedAjaxEmployees');

                Route::get('user-needs/download-format', [
                    App\Http\Controllers\LearningNeedAnalysis\UserNeedController::class,
                    'downloadFormat'
                ])->name('user-needs.downloadFormat');

                Route::get('user-needs/request-training', [
                    App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                    'index'
                ])->name('user-needs.request-training.index');

                Route::get('user-needs/request-training/{user_need}/edit/ajax-employees', [
                    App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                    'getUserNeedAjaxEmployees'
                ])->name('user-needs.request-training.getUserNeedAjaxEmployees');

                Route::get('user-needs/request-training/{user_need}/edit', [
                    App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                    'edit'
                ])->name('user-needs.request-training.edit');

                Route::put(
                    'user-needs/request-training/{user_need}/approve-hcbp',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                        'approveHcbp'
                    ]
                )->name('user-needs.request-training.approveHcbp');

                Route::put(
                    'user-needs/request-training/{user_need}/reject-hcbp',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                        'rejectHcbp'
                    ]
                )->name('user-needs.request-training.rejectHcbp');

                Route::put(
                    'user-needs/request-training/{user_need}/approve-learning-design',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                        'approveLearningDesign'
                    ]
                )->name('user-needs.request-training.approveLearningDesign');

                Route::put(
                    'user-needs/request-training/{user_need}/reject-learning-design',
                    [
                        App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                        'rejectLearningDesign'
                    ]
                )->name('user-needs.request-training.rejectLearningDesign');

                Route::resource('user-needs', 
                'App\Http\Controllers\LearningNeedAnalysis\UserNeedController');
               
                // Route::get('user-needs/request-training/{user_need}/edit/ajax-employees', [
                //     App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                //     'getUserNeedAjaxEmployees'
                // ])->name('user-needs.request-training.getUserNeedAjaxEmployees');

                // Route::get('user-needs/request-training/{user_need}/edit', [
                //     App\Http\Controllers\LearningNeedAnalysis\RequestTrainingController::class,
                //     'edit'
                // ])->name('user-needs.request-training.edit');

                // Route::get('user-needs/hcbp/request-training', [
                //     App\Http\Controllers\LearningNeedAnalysis\Hcbp\RequestTrainingController::class,
                //     'index'
                // ])->name('user-needs.hcbp.request-training.index');

                // Route::get('user-needs/hcbp/request-training/{user_need}/edit/ajax-employees', [
                //     App\Http\Controllers\LearningNeedAnalysis\Hcbp\RequestTrainingController::class,
                //     'getUserNeedAjaxEmployees'
                // ])->name('user-needs.hcbp.request-training.getUserNeedAjaxEmployees');

                // Route::get('user-needs/hcbp/request-training/{user_need}/edit', [
                //     App\Http\Controllers\LearningNeedAnalysis\Hcbp\RequestTrainingController::class,
                //     'edit'
                // ])->name('user-needs.hcbp.request-training.edit');

                // Route::put(
                //     'user-needs/hcbp/request-training/{user_need}/approve',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\Hcbp\RequestTrainingController::class,
                //         'approve'
                //     ]
                // )->name('user-needs.hcbp.request-training.approve');

                // Route::put(
                //     'user-needs/hcbp/request-training/{user_need}/reject',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\Hcbp\RequestTrainingController::class,
                //         'reject'
                //     ]
                // )->name('user-needs.hcbp.request-training.reject');

                // Route::get('user-needs/learning-design/request-training', [
                //     App\Http\Controllers\LearningNeedAnalysis\LearningDesign\RequestTrainingController::class,
                //     'index'
                // ])->name('user-needs.learning-design.request-training.index');

                // Route::get('user-needs/learning-design/request-training/{user_need}/edit/ajax-employees', [
                //     App\Http\Controllers\LearningNeedAnalysis\LearningDesign\RequestTrainingController::class,
                //     'getUserNeedAjaxEmployees'
                // ])->name('user-needs.learning-design.request-training.getUserNeedAjaxEmployees');

                // Route::get('user-needs/learning-design/request-training/{user_need}/edit', [
                //     App\Http\Controllers\LearningNeedAnalysis\LearningDesign\RequestTrainingController::class,
                //     'edit'
                // ])->name('user-needs.learning-design.request-training.edit');

                // Route::put(
                //     'user-needs/learning-design/request-training/{user_need}/approve',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\LearningDesign\RequestTrainingController::class,
                //         'approve'
                //     ]
                // )->name('user-needs.learning-design.request-training.approve');

                // Route::put(
                //     'user-needs/learning-design/request-training/{user_need}/reject',
                //     [
                //         App\Http\Controllers\LearningNeedAnalysis\LearningDesign\RequestTrainingController::class,
                //         'reject'
                //     ]
                // )->name('user-needs.learning-design.request-training.reject');
            }
        );

        Route::get('curriculum/request-curriculum', [
            App\Http\Controllers\Curriculum\RequestCurriculumController::class,
            'index'
        ])->name('curriculum.request-curriculum.index');

        Route::delete(
            'curriculum/archive/force-delete',
            [
                App\Http\Controllers\Curriculum\CurriculumController::class,
                'forceDelete'
            ]
        )->name('curriculum.archive.forceDelete');
        Route::get(
            'curriculum/archive/restore',
            [
                App\Http\Controllers\Curriculum\CurriculumController::class,
                'restoreArchive'
            ]
        )->name('curriculum.archive.restore');
        Route::get(
            'curriculum/{curriculum_id}/restore',
            [
                App\Http\Controllers\Curriculum\CurriculumController::class,
                'restore'
            ]
        )->name('curriculum.restore');
        Route::get(
            'curriculum/archive',
            [
                App\Http\Controllers\Curriculum\CurriculumController::class,
                'archive'
            ]
        )->name('curriculum.archive');
        
        Route::get(
            'curriculum/idp-period/{idpPeriod}/syllabuses/{syllabus}/employee-list',
            [
                App\Http\Controllers\Curriculum\CurriculumController::class,
                'getIdpEmployee'
            ]
        )->name('curriculum.idp-period.syllabuses.getIdpEmployee');
        Route::get(
            'curriculum/idp-period/{idpPeriod}/syllabuses/{syllabus}/employee-list-priority-1',
            [
                App\Http\Controllers\Curriculum\CurriculumController::class,
                'getIdpEmployeePriority1'
            ]
        )->name('curriculum.idp-period.syllabuses.getIdpEmployeePriority1');

        Route::resource('curriculum', 'App\Http\Controllers\Curriculum\CurriculumController');
        Route::get('curriculum/{curriculum}/syllabuses/ajax-syllabuses', [
            App\Http\Controllers\Curriculum\CurriculumSyllabusController::class,
            'getAjaxCurriculumSyllabuses'
            ])->name('curriculum.syllabuses.getAjaxCurriculumSyllabuses');
        Route::resource('curriculum.syllabuses', 'App\Http\Controllers\Curriculum\CurriculumSyllabusController');
//    });

    //sub group learning operations
    Route::group([
        'prefix' => 'learning-operation',
        'middleware' => 'role:Learning Operation',
        'as' => 'learning-operation.',
    ], function () {
        Route::get(
            '/home',
            [App\Http\Controllers\LearningOperation\HomeController::class, 'index']
        )->name('home.index');
        Route::resource('delivery-plan', 'App\Http\Controllers\LearningOperation\DeliveryPlan\TrainingClassController');
        Route::resource('delivery-plan.section', 'App\Http\Controllers\LearningOperation\DeliveryPlan\ClassSectionController');
        Route::resource('delivery-plan.section.video-conference', 'App\Http\Controllers\LearningOperation\DeliveryPlan\ClassVideoConferenceController');
        Route::resource('delivery-plan.section.text', 'App\Http\Controllers\LearningOperation\DeliveryPlan\ClassTextController');

        // Content Management
        Route::resource('content-management', 'App\Http\Controllers\LearningOperation\ContentManagement\ElearningController');
        Route::put('content-management/{elearning}/deactivate', [App\Http\Controllers\LearningOperation\ContentManagement\ElearningController::class, 'deactivate'])->name('content-management.deactivate');
        Route::put('content-management/{elearning}/activate', [App\Http\Controllers\LearningOperation\ContentManagement\ElearningController::class, 'activate'])->name('content-management.activate');
        Route::resource('content-management.module', 'App\Http\Controllers\LearningOperation\ContentManagement\ModuleController');
        Route::put('content-management/{elearning}/module/{section}/deactivate', [App\Http\Controllers\LearningOperation\ContentManagement\ModuleController::class, 'deactivate'])->name('content-management.module.deactivate');
        Route::put('content-management/{elearning}/module/{section}/activate', [App\Http\Controllers\LearningOperation\ContentManagement\ModuleController::class, 'activate'])->name('content-management.module.activate');
        Route::resource('content-management.module.text', 'App\Http\Controllers\LearningOperation\ContentManagement\ElearningTextController');

        // Enrollment
        Route::resource('enrollment', 'App\Http\Controllers\LearningOperation\Enrollment\EnrollmentController');
        Route::get('enrollment/elearning/{id}', [App\Http\Controllers\LearningOperation\Enrollment\EnrollmentController::class, 'showElearning'])
        ->name('enrollment.elearning.show');
        Route::get('enrollment/class/{id}', [App\Http\Controllers\LearningOperation\Enrollment\EnrollmentController::class, 'showClass'])->name('enrollment.class.show');
    });

    //sub group learning design and atasan learning design and learing operation
    Route::group([
        'prefix' => 'master-data',
        'as' => 'master-data.',
    ], function () {
            Route::resource('levels', 'App\Http\Controllers\MasterData\LevelController');
            Route::get('levels/{level}/syllabuses/ajax-syllabuses', [
                App\Http\Controllers\MasterData\LevelSyllabusController::class,
                'getAjaxLevelSyllabuses'
                ])->name('levels.syllabuses.getAjaxLevelSyllabuses');
            Route::resource('levels.syllabuses', 'App\Http\Controllers\MasterData\LevelSyllabusController');
            Route::resource('statuses', 'App\Http\Controllers\MasterData\StatusController');
            Route::get('statuses/{status}/syllabuses/ajax-syllabuses', [
                App\Http\Controllers\MasterData\StatusSyllabusController::class,
                'getAjaxStatusSyllabuses'
                ])->name('statuses.syllabuses.getAjaxStatusSyllabuses');
            Route::resource('statuses.syllabuses', 'App\Http\Controllers\MasterData\StatusSyllabusController');

            Route::get('locations/ajax-locations', [
            App\Http\Controllers\MasterData\LocationController::class,
            'getAjaxLocations'
            ])->name('locations.getAjaxLocations');
            
            Route::post('locations/import', [
                App\Http\Controllers\MasterData\LocationController::class,
                'import'
            ])->name('locations.import');

            Route::get('locations/export', [
                App\Http\Controllers\MasterData\LocationController::class,
                'export'
            ])->name('locations.export');

            Route::get('locations/download-format', [
                App\Http\Controllers\MasterData\LocationController::class,
                'downloadFormat'
            ])->name('locations.downloadFormat');

            Route::resource('locations', 'App\Http\Controllers\MasterData\LocationController');
            Route::get('locations/{location}/syllabuses/ajax-syllabuses', [
                App\Http\Controllers\MasterData\LocationSyllabusController::class,
                'getAjaxLocationSyllabuses'
                ])->name('locations.syllabuses.getAjaxLocationSyllabuses');
            Route::resource('locations.syllabuses', 'App\Http\Controllers\MasterData\LocationSyllabusController');

            Route::get('ajax-select2-locations', [
            App\Http\Controllers\MasterData\OrganizationUnitController::class,
            'getselect2LocationAjax'
            ])->name('organization-units.getselect2LocationAjax');

            Route::get('organization/ajax-units', [
            App\Http\Controllers\MasterData\OrganizationUnitController::class,
            'getAjaxUnits'
            ])->name('organization-units.getAjaxUnits');

            Route::post('organization-units/import', [
                App\Http\Controllers\MasterData\OrganizationUnitController::class,
                'import'
            ])->name('organization-units.import');

            Route::get('organization-units/export', [
                App\Http\Controllers\MasterData\OrganizationUnitController::class,
                'export'
            ])->name('organization-units.export');

            Route::get('organization-units/download-format', [
                App\Http\Controllers\MasterData\OrganizationUnitController::class,
                'downloadFormat'
            ])->name('organization-units.downloadFormat');
            
            Route::resource('organization-units', 'App\Http\Controllers\MasterData\OrganizationUnitController');

            Route::get(
                'organization-units/{id}/syllabuses/ajax-syllabuses',
                [
                App\Http\Controllers\MasterData\OrganizationUnitSyllabusController::class,
                'getAjaxOrganizationUnitSyllabuses'
                ]
            )->name('organization-units.syllabuses.getAjaxOrganizationUnitSyllabuses');

            Route::resource(
                'organization-units.syllabuses',
                'App\Http\Controllers\MasterData\OrganizationUnitSyllabusController'
            );
    });

    Route::group(
        [
        'prefix' => 'setup-settings',
        'as' => 'setup-settings.'
        ],
        function () {
            Route::get(
                'competencies/ajax-competencies',
                [
                App\Http\Controllers\SetupSettings\CompetencyController::class,
                'getAjaxCompetencies'
                ]
            )->name('competencies.getAjaxCompetencies');
            Route::resource('competencies', 'App\Http\Controllers\SetupSettings\CompetencyController');
            Route::get('competencies/{id}/syllabuses/ajax-syllabuses', [
                App\Http\Controllers\SetupSettings\CompetencySyllabusController::class,
                'getAjaxCompetencySyllabuses'
                ])->name('competencies.syllabuses.getAjaxCompetencySyllabuses');
            Route::resource(
                'competencies.syllabuses',
                'App\Http\Controllers\SetupSettings\CompetencySyllabusController'
            );
            
            Route::post(
                'vendors/{vendor}/store-images',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'storeImage']
            )->name('vendors.store_image');

            Route::delete(
                'vendors/{vendor}/destroy-images',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'destroyImage']
            )->name('vendors.destroy_image');

            Route::delete(
                'vendors/{vendor}/pic-account/{pic_contact_vendor}',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'destroyPicAccount']
            )->name('vendors.destroyPicAccount');

            Route::delete(
                'vendors/{vendor}/pic-finance/{picContactVendor}',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'destroyPicFinance']
            )->name('vendors.destroyPicFinance');
            
            Route::put(
                'vendors/{vendor}/pic-accounts/update',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'updatePicAccount']
            )->name('vendors.updatePicAccount');

            Route::post(
                'vendors/{vendor}/pic-accounts/store',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'storePicAccounts']
            )->name('vendors.storePicAccounts');

            Route::post(
                'vendors/{vendor}/pic-finances/store',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'storePicFinances']
            )->name('vendors.storePicFinances');

            Route::put(
                'vendors/{vendor}/pic-accounts/update',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'updatePicAccounts']
            )->name('vendors.updatePicAccounts');

            Route::put(
                'vendors/{vendor}/pic-finances/update',
                [App\Http\Controllers\SetupSettings\VendorController::class, 'updatePicFinances']
            )->name('vendors.updatePicFinances');

            Route::get('vendors/ajax-vendors', [
                App\Http\Controllers\SetupSettings\VendorController::class,
                'getAjaxVendors'
                ])->name('vendors.getAjaxVendors');

            Route::resource('vendors', 'App\Http\Controllers\SetupSettings\VendorController');
            Route::put(
                '/vendors/{vendor}/syllabuses/{syllabus}/reject',
                [App\Http\Controllers\SetupSettings\VendorSyllabusController::class, 'reject']
            )->name('vendors.syllabuses.reject');

            Route::get(
                'vendors/{vendor}/syllabuses/ajax-syllabuses',
                [
                App\Http\Controllers\SetupSettings\VendorSyllabusController::class,
                'getAjaxVendorSyllabuses'
                ]
            )->name('vendors.syllabuses.getAjaxVendorSyllabuses');

            Route::resource(
                'vendors.syllabuses',
                'App\Http\Controllers\SetupSettings\VendorSyllabusController'
            );
        }
    );

    //sub group Karyawan
    Route::resource('my-course', 'App\Http\Controllers\Karyawan\MyCourseController');
    Route::get('/individual-development-plan', [
        App\Http\Controllers\Karyawan\IdpController::class, 'index'
    ])->name('idp.index');
    Route::get('/individual-development-plan', [
        App\Http\Controllers\Karyawan\IdpController::class, 'index'
    ])->name('idp.index');
    Route::get('/individual-development-plan', [
        App\Http\Controllers\Karyawan\IdpController::class, 'index'
    ])->name('idp.index');
    Route::get('/individual-development-plan/{id}', [
        App\Http\Controllers\Karyawan\IdpController::class, 'show'
    ])->name('idp.show');
    // for testing view
    // Learning Operation
    Route::get('/learning-operation/content-management/{id}/edit/feedback', function () {
        return view('LearningOperation/ContentManagement/feedback');
    });
    // Route::get('/learning-operation/content-management/{id}/view', function () {
    //     return view('Karyawan/MyCourse/Course/Enroll/index');
    // });
    Route::get('/learning-operation/content-management/{id}/feedback', function () {
        return view('LearningOperation/ContentManagement/feedbackresult');
    });
    Route::get('/learning-operation/content-management/{id}/feedback/{idkaryawan}', function () {
        return view('LearningOperation/ContentManagement/feedbackkaryawan');
    });

    // Data & Report
    Route::get('/data-report', function () {
        return view('DataReport/index');
    });
    Route::get('/data-report/karyawan/{id}', function () {
        return view('DataReport/show');
    });

    // Learning Design
    // User Needs
    Route::get('/learning-design/learning-need-analysis/user-needs/hcbp', function () {
        return view('LearningDesign/LearningNeedAnalysis/UserNeeds/requesthcbp');
    });
    // // Learning Design
    Route::get('/learning-design/kurikulum/{id}', function () {
        return view('LearningDesign/LearningDesign/show');
    });


    // Route::get('/atasan-karyawan/home', function () {
    //     //         return view('AtasanLearningDesign/Home/index');
    //     //     });

    //         Route::resource('user-needs', 'App\Http\Controllers\Atasan\UserNeedController');
    //     });
    //     Route::get('/atasan-karyawan/learning-need-analysis', function () {
    //         return view('AtasanKaryawan/LearningNeedAnalysis/Home/index');
    //     });
    //     // // IDP
    //     // Route::get('/atasan-karyawan/learning-need-analysis/idp', function () {
    //     //     return view('AtasanKaryawan/LearningNeedAnalysis/IDP/index');
    //     // });
    //     // Route::get('/atasan-karyawan/learning-need-analysis/idp/{id}', function () {
    //     //     return view('AtasanKaryawan/LearningNeedAnalysis/IDP/Detail/index');
    //     // });
    //     // Route::get('/atasan-karyawan/learning-need-analysis/idp/{id}/detail', function () {
    //     //     return view('AtasanKaryawan/LearningNeedAnalysis/IDP/Detail/show');
    //     // });
    //     // User Needs
    //     Route::get('/atasan-karyawan/learning-need-analysis/user-needs', function () {
    //         return view('AtasanKaryawan/LearningNeedAnalysis/UserNeeds/index');
    //     });
    //     Route::get('/atasan-karyawan/learning-need-analysis/user-needs/create', function () {
    //         return view('AtasanKaryawan/LearningNeedAnalysis/UserNeeds/create');
    //     });
    // });

    Route::get('/syllabus', function () {
        return view('LearningDesign/LearningSyllabus/JobFamily/Syllabus/nouseshow');
    });

    // Karyawan
    Route::get('/karyawan/learning-plan', function () {
        return view('Karyawan/LearningPlan/index');
    });
    Route::get('/karyawan/learning-plan/{id}', function () {
        return view('Karyawan/LearningPlan/show');
    });
    // Route::get('/karyawan/my-course', function () {
    //     return view('Karyawan/MyCourse/index');
    // });
    // Route::get('/karyawan/my-course/view/{id}', function () {
    //     return view('Karyawan/MyCourse/Course/NotEnroll/index');
    // });
    // Route::get('/karyawan/my-course/{id}', function () {
    //     return view('Karyawan/MyCourse/Course/Enroll/index');
    // });

    // Export
    Route::get('/pdf', function () {
        return view('LearningDesign/LearningSyllabus/SubJobFamily/Competency/Syllabus/export_rfi');
    });

    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    //  Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
    //   Route::get('map', function () {return view('pages.maps');})->name('map');
    //   Route::get('icons', function () {return view('pages.icons');})->name('icons');
    //   Route::get('table-list', function () {return view('pages.tables');})->name('table');
    Route::put(
        'profile/password',
        ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']
    );
});
