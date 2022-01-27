<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNeedStatus extends Model
{
    use HasFactory;

    public $table = 'user_needs_statuses';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function userNeeds()
    {
        return $this->hasMany(UserNeed::class, 'status_id', 'id');
    }
}
