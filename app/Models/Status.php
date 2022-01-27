<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $table = 'statuses';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function syllabuses()
    {
        return $this->belongsToMany(
            Syllabus::class,
            'status_syllabus',
            'status_id',
            'syllabus_id'
        );
    }
}
