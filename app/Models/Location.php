<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location';
    protected $primaryKey = 'location_id';
    public $timestamps = false;

    protected $fillable = [
        'location_code',
        'description',
        'address_line_1',
        'address_line_2',
        'town_or_city',
        'postal_code',
        'region_1',
        'admins',
    ];

    public function syllabuses()
    {
        return $this->belongsToMany(
            Syllabus::class,
            'location_syllabus',
            'location_id',
            'syllabus_id'
        );
    }

    public function organizationUnits()
    {
        return $this->hasMany(OrganizationUnit::class, 'location_id', 'location_id');
    }
}
