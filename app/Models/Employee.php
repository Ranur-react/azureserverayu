<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use HasFactory, Notifiable;

    public $table = 'employee';

    protected $primaryKey = 'nik';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nik',
        'name',
        'title',
        'position_id',
        'organization',
        'band',
        'nik_atasan',
        'nama_atasan',
        'email',
        'section',
        'department',
        'division',
        'bgroup',
        'egroup',
        'directorate',
        'admins',
        'area_group'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function hcbp()
    {
        return $this->hasMany(Hcbp::class, 'nik', 'nik');
    }

    public function idp()
    {
        return $this->hasMany(Idp::class, 'nik', 'nik');
    }

    public function userNeeds()
    {
        return $this->belongsToMany(
            UserNeed::class,
            'user_need_employee',
            'nik',
            'user_need_id'
        );
    }
}
