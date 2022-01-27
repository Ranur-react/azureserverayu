<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorStatus extends Model
{
    use HasFactory;

    public $table = 'vendors_statuses';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function vendors()
    {
        return $this->hasMany(Vendor::class, 'status_id', 'id');
    }
}
