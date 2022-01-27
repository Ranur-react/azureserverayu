<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Idp extends Model
{
    use HasFactory;

    public $table = 'idp';

    protected $fillable = [
        'idp_period_id',
        'nik',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function syllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Syllabus::class,
            'idp_syllabus',
            'idp_id',
            'syllabus_id'
        )->withPivot(['priority'])
            ->orderby('priority');
    }

    public function idpPeriod(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(IdpPeriod::class, 'idp_period_id');
    }

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class, 'nik');
    }
}
