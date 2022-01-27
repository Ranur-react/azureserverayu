<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public $table = 'class_attendance';

    protected $fillable = [
        'enrollment_id',
        'section_id',
        'attendance',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function enrolled_users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Enrollment::class, 'user_id');
    }

    public function class_sections(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClassSection::class, 'section_id', 'id');
    }
}
