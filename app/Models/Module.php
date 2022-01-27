<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public $table = 'elearning_modules';

    protected $fillable = [
        'section',
        'elearning_id',
        'name',
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

    public function elearning(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Elearning::class, 'elearning_id');
    }

    public function video_conference(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ElearningVideoConference::class, 'module_id', 'id');
    }

    public function text(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ElearningText::class, 'module_id', 'id');
    }
}
