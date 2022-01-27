<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingClass extends Model
{
    use HasFactory;

    public $table = 'classes';

    protected $fillable = [
        'name',
        'description',
        'level',
        'pic_name',
        'start_date',
        'end_date',
        'is_active'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function sections(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClassSection::class, 'class_id', 'id');
    }
}
