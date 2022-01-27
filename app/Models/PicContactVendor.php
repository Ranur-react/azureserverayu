<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicContactVendor extends Model
{
    use HasFactory;

    public $table = 'pic_contact_vendors';

    protected $fillable = [
        'pic_name',
        'nik',
        'position',
        'email',
        'phone_number',
        'is_pic_account_manager',
        'vendor_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function vendors(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

}
