<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationUnit extends Model
{
    use HasFactory;

    public $table = 'organization_units';

    protected $primaryKey = 'organization_id';
    
    public $timestamps = false;

    protected $fillable = [
        'location_id',
        'date_from',
        'date_to',
        'name',
        'internal_external_flag',
        'type',
    ];

    public function syllabuses()
    {
        return $this->belongsToMany(
            Syllabus::class,
            'organization_unit_syllabus',
            'organization_id',
            'syllabus_id'
        );
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

}
