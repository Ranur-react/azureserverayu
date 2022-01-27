<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElearningTestOption extends Model
{
    use HasFactory;

    public $table = 'elearning_test_option';

    protected $fillable = [
        'test_id',
        'option',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function test(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ElearningTest::class, 'test_id');
    }
}
