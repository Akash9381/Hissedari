<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Modules\CpPanel\Entities\CpBankDetail;
use Modules\CpPanel\Entities\CpCorporateOfficeAddress;
use Modules\CpPanel\Entities\CpDocument;
use Modules\CpPanel\Entities\CpPanel;
use Modules\CpPanel\Entities\CpRegisterOfficeAddress;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function InvestorData(){
        return $this->hasOne(InvertorDetail::class,'user_id','id');
    }

    public function CpData(){
        return $this->hasOne(CpPanel::class,'user_id','id');
    }
    public function CpBankDetails(){
        return $this->hasMany(CpBankDetail::class,'user_id','id');
    }
    public function CpDocuments(){
        return $this->hasOne(CpDocument::class,'user_id','id');
    }
    public function CpCorporateOffice(){
        return $this->hasOne(CpCorporateOfficeAddress::class,'user_id','id');
    }
    public function CpRegisterOffice(){
        return $this->hasOne(CpRegisterOfficeAddress::class,'user_id','id');
    }
}
