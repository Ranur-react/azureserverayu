<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElearningTestPosttestUser extends Model
{
    use HasFactory;

    public $table = 'elearning_test_posttest_user';

    protected $fillable = [
        'enrollment_id',
        'test_id',
        'option_id',
        'is_correct'
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
