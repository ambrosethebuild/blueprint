<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'certificate_type_id',
        'reference',
        'document',
        'expiry_date',
        'remarks',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'certificate_type_id' => 'integer',
    ];


    public function certificateType()
    {
        return $this->belongsTo(\App\CertificateType::class);
    }
}
