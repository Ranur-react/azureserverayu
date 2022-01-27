<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hcbp extends Model
{
    use HasFactory;

    public $table = 'hcbp';

    protected $primaryKey = 'nik';
    
    public $incrementing = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nik',
        'region',
        'area',
        'directorate',
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'nik', 'nik');
    }

}
