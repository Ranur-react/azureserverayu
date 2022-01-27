<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Csp extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'csp';

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function syllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Syllabus::class,
            'csp_syllabus',
            'csp_id',
            'syllabus_id'
        );
    }

    // public function setStartDateAttribute($value)
    // {
    //     $this->attributes['start_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }

    // public function setEndDateAttribute($value)
    // {
    //     $this->attributes['end_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }
}
