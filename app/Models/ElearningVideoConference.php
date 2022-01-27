<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElearningVideoConference extends Model
{
    use HasFactory;

    public $table = 'elearning_video_conference';

    protected $fillable = [
        'module_id',
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

    public function module(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
