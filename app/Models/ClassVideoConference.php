<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassVideoConference extends Model
{
    use HasFactory;

    public $table = 'class_video_conference';

    protected $fillable = [
        'section_id',
        'name',
        'platform',
        'url'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ClassSection::class, 'section_id');
    }
}
