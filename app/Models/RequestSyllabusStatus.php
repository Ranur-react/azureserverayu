<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSyllabusStatus extends Model
{
    use HasFactory;

    public $table = 'request_syllabuses_statuses';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function requestSyllabuses()
    {
        return $this->hasMany(RequestSyllabus::class, 'status_id', 'id');
    }
}
