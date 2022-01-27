<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class SyllabusStatus extends Model
{
    use HasFactory;

    public $table = 'syllabuses_statuses';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function syllabuses()
    {
        return $this->hasMany(Syllabus::class, 'status_id', 'id');
    }

}
