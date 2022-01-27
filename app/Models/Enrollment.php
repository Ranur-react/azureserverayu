<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    public $table = 'enrollments';

    protected $fillable = [
        'user_id',
        'status',
        'elearning_id',
        'class_id',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function elearning(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Elearning::class, 'elearning_id');
    }

    public function pretest_answer(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ElearningTestPretestUser::class, 'enrollment_id', 'id');
    }

    public function test_score(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ElearningTestScore::class, 'enrollment_id', 'id');
    }
}
