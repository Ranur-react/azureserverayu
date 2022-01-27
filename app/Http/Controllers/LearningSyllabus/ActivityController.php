<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityController extends Controller
{
    public function show($id)
    {
        $activity = Activity::findOrFail($id);

        $activity_array = array( 
            'data' => $activity->properties['attributes'] ?? '',
            'old' => $activity->properties['old'] ?? '',

            'levels_new' => $activity->properties['attributes']['levels'] ?? '',
            'levels_old' => $activity->properties['old']['levels'] ?? '',

            'statuses_new' => $activity->properties['attributes']['statuses'] ?? '',
            'statuses_old' => $activity->properties['old']['statuses'] ?? '',

            'locations_new' => $activity->properties['attributes']['locations'] ?? '',
            'locations_old' => $activity->properties['old']['locations'] ?? '',

            'units_new' => $activity->properties['attributes']['units'] ?? '',
            'units_old' => $activity->properties['old']['units'] ?? '',

            'skills_will_you_gain_new' => $activity->properties['attributes']['skills_will_you_gain'] ?? '',
            'skills_will_you_gain_old' => $activity->properties['old']['skills_will_you_gain'] ?? '',

            'vendors_new' => $activity->properties['attributes']['vendors'] ?? '',
            'vendors_old' => $activity->properties['old']['vendors'] ?? '',
        );

        return json_encode($activity_array);
    }
}
