<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class IdpPeriod extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'idp_period';

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function idp(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Idp::class, 'idp_period_id', 'id');
    }

    // public function setStartDateAttribute($value)
    // {
    //     $this->attributes['start_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }

    //    public function getStartDateAttribute()
    //    {
    //        return Carbon::createFromFormat('Y-m-d', $this->attributes['start_date'])->format('m/d/Y');
    //    }

    // public function setEndDateAttribute($value)
    // {
    //     $this->attributes['end_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }
    //
    //    public function getEndDateAttribute()
    //    {
    //        return Carbon::createFromFormat('Y-m-d', $this->attributes['end_date'])->format('m/d/Y');
    //    }
}
