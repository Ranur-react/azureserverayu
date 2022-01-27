<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elearning extends Model
{
    use HasFactory;

    public $table = 'elearnings';

    protected $fillable = [
        'name',
        'description',
        'category',
        'is_active',
        'pic_name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function modules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Module::class, 'elearning_id', 'id');
    }

    public function test(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ElearningTest::class, 'elearning_id', 'id');
    }
}
