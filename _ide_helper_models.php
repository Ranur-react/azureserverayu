<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Attendance
 *
 * @property int $id
 * @property int $enrollment_id
 * @property int|null $section_id
 * @property int $attendance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClassSection[] $class_sections
 * @property-read int|null $class_sections_count
 * @property-read \App\Models\Enrollment $enrolled_users
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereAttendance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereEnrollmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 */
	class Attendance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassSection
 *
 * @property int $id
 * @property int $class_id
 * @property int $section
 * @property string $name
 * @property string $delivery_method
 * @property string $date_time
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TrainingClass $classes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClassVideoConference[] $video_conferences
 * @property-read int|null $video_conferences_count
 * @method static \Database\Factories\ClassSectionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereDeliveryMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSection whereUpdatedAt($value)
 */
	class ClassSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassText
 *
 * @property int $id
 * @property int $section_id
 * @property string $name
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ClassSection $section
 * @method static \Database\Factories\ClassTextFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassText whereUpdatedAt($value)
 */
	class ClassText extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassVideoConference
 *
 * @property int $id
 * @property int $section_id
 * @property string $name
 * @property string $platform
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ClassSection $sections
 * @method static \Database\Factories\ClassVideoConferenceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassVideoConference whereUrl($value)
 */
	class ClassVideoConference extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Csp
 *
 * @property int $id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Csp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Csp newQuery()
 * @method static \Illuminate\Database\Query\Builder|Csp onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Csp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Csp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Csp withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Csp withoutTrashed()
 */
	class Csp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Curriculum
 *
 * @property int $id
 * @property string $start_date
 * @property string $end_date
 * @property int $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\CurriculumStatus $curriculumStatus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum newQuery()
 * @method static \Illuminate\Database\Query\Builder|Curriculum onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum query()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Curriculum withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Curriculum withoutTrashed()
 */
	class Curriculum extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CurriculumStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Curriculum[] $curriculum
 * @property-read int|null $curriculum_count
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurriculumStatus whereUpdatedAt($value)
 */
	class CurriculumStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Elearning
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $category
 * @property string $pic_name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Database\Factories\ElearningFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning query()
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning wherePicName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elearning whereUpdatedAt($value)
 */
	class Elearning extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ElearningText
 *
 * @property int $id
 * @property int $module_id
 * @property string $name
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Module $module
 * @method static \Database\Factories\ElearningTextFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText query()
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningText whereUpdatedAt($value)
 */
	class ElearningText extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ElearningVideoConference
 *
 * @property-read \App\Models\Module $module
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningVideoConference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningVideoConference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElearningVideoConference query()
 */
	class ElearningVideoConference extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property string $person_id
 * @property string $nik
 * @property string $name
 * @property string|null $title
 * @property int|null $position_id
 * @property string|null $organization
 * @property string|null $band
 * @property string|null $nik_atasan
 * @property string $nama_atasan
 * @property string|null $email
 * @property string|null $section
 * @property string|null $department
 * @property string|null $division
 * @property string|null $bgroup
 * @property string|null $egroup
 * @property string|null $directorate
 * @property string|null $admins
 * @property string|null $area_group
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hcbp[] $hcbp
 * @property-read int|null $hcbp_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Idp[] $idp
 * @property-read int|null $idp_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserNeed[] $userNeeds
 * @property-read int|null $user_needs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAdmins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAreaGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereBand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereBgroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDirectorate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEgroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNamaAtasan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNikAtasan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereOrganization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePersonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitle($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Enrollment
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $class_id
 * @property int|null $elearning_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Elearning|null $elearning
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereElearningId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment whereUserId($value)
 */
	class Enrollment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hcbp
 *
 * @property string $nik
 * @property string $region
 * @property string $area
 * @property string $directorate
 * @property-read \App\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp whereDirectorate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hcbp whereRegion($value)
 */
	class Hcbp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Idp
 *
 * @property int $id
 * @property int $idp_period_id
 * @property string $nik
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @property-read \App\Models\IdpPeriod $idpPeriod
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Idp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Idp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Idp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Idp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idp whereIdpPeriodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idp whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idp whereUpdatedAt($value)
 */
	class Idp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IdpPeriod
 *
 * @property int $id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Idp[] $idp
 * @property-read int|null $idp_count
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod newQuery()
 * @method static \Illuminate\Database\Query\Builder|IdpPeriod onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdpPeriod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|IdpPeriod withTrashed()
 * @method static \Illuminate\Database\Query\Builder|IdpPeriod withoutTrashed()
 */
	class IdpPeriod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobFamily
 *
 * @property int $id
 * @property string $name
 * @property int $number
 * @property string $job_family_code
 * @property string $description
 * @property int|null $parent_id
 * @property int $level
 * @property string $level_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @property-read \Illuminate\Database\Eloquent\Collection|JobFamily[] $jobFamilySubJobFamily
 * @property-read int|null $job_family_sub_job_family_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $pending_syllabuses
 * @property-read int|null $pending_syllabuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RequestSyllabus[] $requestSyllabuses
 * @property-read int|null $request_syllabuses_count
 * @property-read JobFamily|null $subJobFamilyJobFamily
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily newQuery()
 * @method static \Illuminate\Database\Query\Builder|JobFamily onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereJobFamilyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereLevelDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobFamily whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|JobFamily withTrashed()
 * @method static \Illuminate\Database\Query\Builder|JobFamily withoutTrashed()
 */
	class JobFamily extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Level
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Level newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Level query()
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereUpdatedAt($value)
 */
	class Level extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Location
 *
 * @property int $location_id
 * @property string|null $location_code
 * @property string|null $description
 * @property string|null $address_line_1
 * @property string|null $address_line_2
 * @property string|null $town_or_city
 * @property int|null $postal_code
 * @property string|null $region_1
 * @property string|null $admins
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrganizationUnit[] $organizationUnits
 * @property-read int|null $organization_units_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdmins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRegion1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereTownOrCity($value)
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MasterData
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MasterData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterData query()
 */
	class MasterData extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Module
 *
 * @property int $id
 * @property int $elearning_id
 * @property int $section
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Elearning $elearning
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ElearningText[] $text
 * @property-read int|null $text_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ElearningVideoConference[] $video_conference
 * @property-read int|null $video_conference_count
 * @method static \Database\Factories\ModuleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereElearningId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrganizationUnit
 *
 * @property int $organization_id
 * @property int|null $location_id
 * @property string|null $date_from
 * @property string|null $date_to
 * @property string|null $name
 * @property string|null $internal_external_flag
 * @property string|null $type
 * @property-read \App\Models\Location|null $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereInternalExternalFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationUnit whereType($value)
 */
	class OrganizationUnit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PicContactVendor
 *
 * @property int $id
 * @property string|null $pic_name
 * @property string|null $nik
 * @property string|null $position
 * @property string|null $email
 * @property string|null $phone_number
 * @property int $is_pic_account_manager
 * @property int $vendor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Vendor $vendors
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereIsPicAccountManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor wherePicName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PicContactVendor whereVendorId($value)
 */
	class PicContactVendor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PrfCompetencyCatalog
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $definition
 * @property string|null $definition_english
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PrfCompetencyRequirement[] $prfCompetencyRequirements
 * @property-read int|null $prf_competency_requirements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereDefinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereDefinitionEnglish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyCatalog whereUpdatedAt($value)
 */
	class PrfCompetencyCatalog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PrfCompetencyRequirement
 *
 * @property int $id
 * @property int|null $position_id
 * @property int|null $job_id
 * @property int|null $competency_id
 * @property int|null $minimum_requirement
 * @property string|null $minimum_requirement_description
 * @property string|null $legal_entity
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string|null $created_by
 * @property-read \App\Models\PrfCompetencyCatalog|null $prfCompetencyCatalog
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereCompetencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereLegalEntity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereMinimumRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereMinimumRequirementDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrfCompetencyRequirement whereUpdatedBy($value)
 */
	class PrfCompetencyRequirement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RequestSyllabus
 *
 * @property int $id
 * @property string $training_name
 * @property string $training_summary
 * @property string $training_background
 * @property string $training_description
 * @property string $learning_scope
 * @property int|null $syllabus_id
 * @property int $status_id
 * @property int $job_family_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User $destroyer
 * @property-read \App\Models\User|null $editor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Level[] $levels
 * @property-read int|null $levels_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Location[] $locations
 * @property-read int|null $locations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Status[] $statuses
 * @property-read int|null $statuses_count
 * @property-read \App\Models\Syllabus|null $syllabus
 * @property-read \App\Models\JobFamily $syllabusJobFamily
 * @property-read \App\Models\RequestSyllabusStatus $syllabusStatus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrganizationUnit[] $units
 * @property-read int|null $units_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vendor[] $vendors
 * @property-read int|null $vendors_count
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereJobFamilyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereLearningScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereSyllabusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereTrainingBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereTrainingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereTrainingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereTrainingSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabus whereUpdatedBy($value)
 */
	class RequestSyllabus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RequestSyllabusStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RequestSyllabus[] $requestSyllabuses
 * @property-read int|null $request_syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestSyllabusStatus whereUpdatedAt($value)
 */
	class RequestSyllabusStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Status
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubJobFamily
 *
 * @property-read \App\Models\JobFamily $subJobFamilyJobFamily
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $subJobFamilySyllabus
 * @property-read int|null $sub_job_family_syllabus_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubJobFamily newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubJobFamily newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubJobFamily query()
 */
	class SubJobFamily extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Syllabus
 *
 * @property int $id
 * @property int $number
 * @property string $syllabus_code
 * @property string $training_name
 * @property string $training_summary
 * @property string $training_background
 * @property string $training_description
 * @property \Illuminate\Support\Collection|null $levels
 * @property \Illuminate\Support\Collection|null $statuses
 * @property \Illuminate\Support\Collection|null $locations
 * @property \Illuminate\Support\Collection|null $units
 * @property \Illuminate\Support\Collection|null $skills_will_you_gain
 * @property string $learning_scope
 * @property \Illuminate\Support\Collection|null $vendors
 * @property int $status_id
 * @property int $job_family_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Csp[] $csp
 * @property-read int|null $csp_count
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Idp[] $idp
 * @property-read int|null $idp_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Level[] $levelsSyllabuses
 * @property-read int|null $levels_syllabuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Location[] $locationsSyllabuses
 * @property-read int|null $locations_syllabuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PrfCompetencyCatalog[] $prfCompetencyCatalog
 * @property-read int|null $prf_competency_catalog_count
 * @property-read \App\Models\RequestSyllabus|null $requestSyllabus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Status[] $statusesSyllabuses
 * @property-read int|null $statuses_syllabuses_count
 * @property-read \App\Models\JobFamily $syllabusJobFamily
 * @property-read \App\Models\SyllabusStatus $syllabusStatus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrganizationUnit[] $unitsSyllabuses
 * @property-read int|null $units_syllabuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserNeed[] $userNeedsSyllabuses
 * @property-read int|null $user_needs_syllabuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vendor[] $vendorsSyllabuses
 * @property-read int|null $vendors_syllabuses_count
 * @method static \Database\Factories\SyllabusFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus newQuery()
 * @method static \Illuminate\Database\Query\Builder|Syllabus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereJobFamilyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereLearningScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereLevels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereLocations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereSkillsWillYouGain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereStatuses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereSyllabusCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereTrainingBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereTrainingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereTrainingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereTrainingSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Syllabus whereVendors($value)
 * @method static \Illuminate\Database\Query\Builder|Syllabus withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Syllabus withoutTrashed()
 */
	class Syllabus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SyllabusStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SyllabusStatus whereUpdatedAt($value)
 */
	class SyllabusStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TrainingClass
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $level
 * @property string $pic_name
 * @property string $start_date
 * @property string $end_date
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClassSection[] $sections
 * @property-read int|null $sections_count
 * @method static \Database\Factories\TrainingClassFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass wherePicName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingClass whereUpdatedAt($value)
 */
	class TrainingClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $nik
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $last_login_time
 * @property string|null $last_login_ip
 * @property-read \App\Models\Employee $employee
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserNeed
 *
 * @property int $id
 * @property string $name_of_program
 * @property string $objective_program
 * @property string $training_urgency
 * @property string $future_plans_after_training
 * @property string $content
 * @property int $vendor_id
 * @property string $trainer
 * @property string $specialities_trainer
 * @property string $method
 * @property string $date
 * @property string $start_time
 * @property string $end_time
 * @property string $hcbp_nik
 * @property string $created_by_nik
 * @property int $status_id
 * @property int|null $syllabus_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $createdEmployee
 * @property-read \App\Models\Employee $hcbp
 * @property-read \App\Models\Syllabus|null $syllabus
 * @property-read \App\Models\UserNeedStatus $userNeedStatus
 * @property-read \App\Models\Vendor $userNeedVendor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $userNeedsEmployees
 * @property-read int|null $user_needs_employees_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereCreatedByNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereFuturePlansAfterTraining($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereHcbpNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereNameOfProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereObjectiveProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereSpecialitiesTrainer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereSyllabusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereTrainer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereTrainingUrgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeed whereVendorId($value)
 */
	class UserNeed extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserNeedStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserNeed[] $userNeeds
 * @property-read int|null $user_needs_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNeedStatus whereUpdatedAt($value)
 */
	class UserNeedStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vendor
 *
 * @property int $id
 * @property string|null $pt_name
 * @property string|null $partner_name
 * @property string|null $supplier_number
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $telephone_number
 * @property string|null $ext
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $phone_number
 * @property string|null $category
 * @property string|null $cluster_1
 * @property string|null $cluster_2_primary
 * @property string|null $cluster_2_optional
 * @property int $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PicContactVendor[] $picContactVendors
 * @property-read int|null $pic_contact_vendors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syllabus[] $syllabuses
 * @property-read int|null $syllabuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserNeed[] $userNeedsVendors
 * @property-read int|null $user_needs_vendors_count
 * @property-read \App\Models\VendorStatus $vendorStatus
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCluster1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCluster2Optional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCluster2Primary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePartnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePtName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereSupplierNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereTelephoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUpdatedAt($value)
 */
	class Vendor extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\VendorStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vendor[] $vendors
 * @property-read int|null $vendors_count
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VendorStatus whereUpdatedAt($value)
 */
	class VendorStatus extends \Eloquent {}
}

