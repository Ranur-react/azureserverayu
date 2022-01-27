<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumStatus extends Model
{
    use HasFactory;

    public $table = 'curriculum_statuses';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function curriculum()
    {
        return $this->hasMany(Curriculum::class, 'status_id', 'id');
    }
}
