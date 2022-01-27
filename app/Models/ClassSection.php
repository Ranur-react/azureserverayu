<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    use HasFactory;

    public $table = 'class_sections';

    protected $fillable = [
        'class_id',
        'section',
        'name',
        'delivery_method',
        'date_time',
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

    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TrainingClass::class, 'class_id');
    }

    public function video_conference(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ClassVideoConference::class, 'section_id', 'id');
    }

    public function text(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ClassText::class, 'section_id', 'id');
    }
}
