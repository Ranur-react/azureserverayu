<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Vendor extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $table = 'vendors';

    protected $fillable = [
        'pt_name',
        'partner_name',
        'supplier_number',
        'address',
        'postal_code',
        'telephone_number',
        'ext',
        'fax',
        'email',
        'phone_number',
        'category',
        'cluster_1',
        'cluster_2_primary',
        'cluster_2_optional',
        'status_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vendor_logo')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/gif']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('avatar')
            ->width(128)
            ->height(128)
            ->sharpen(10);
    }

    public function vendorStatus(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(VendorStatus::class, 'status_id');
    }

    // public function jobFamilies(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    // {
    //     return $this->belongsToMany(
    //         JobFamily::class,
    //         'job_family_vendor',
    //         'vendor_id',
    //         'job_family_id'
    //     );
    // }

    public function syllabuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Syllabus::class,
            'syllabus_vendor',
            'vendor_id',
            'syllabus_id'
        );
    }

    public function picContactVendors(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PicContactVendor::class, 'vendor_id', 'id');
    }

    public function userNeedsVendors()
    {
        return $this->hasMany(UserNeed::class, 'vendor_id', 'id');
    }
}
