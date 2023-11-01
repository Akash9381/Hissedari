<?php

namespace Modules\CpPanel\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CpCorporateOfficeAddress extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        return \Modules\CpPanel\Database\factories\CpCorporateOfficeAddressFactory::new();
    }
}
