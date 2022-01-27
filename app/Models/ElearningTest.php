<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElearningTest extends Model
{
    use HasFactory;

    public $table = 'elearning_test';

    protected $fillable = [
        'elearning_id',
        'pertanyaan',
        'option_correct_id'
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

    public function test_option(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ElearningTestOption::class, 'test_id', 'id');
    }
}
