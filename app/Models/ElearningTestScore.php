<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElearningTestScore extends Model
{
    use HasFactory;

    public $table = 'elearning_test_score';

    protected $fillable = [
        'enrollment_id',
        'score_pretest',
        '_score_posttest'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function enrollment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Enrollment::class, 'enrollment_id');
    }
}
