<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerExpectation extends Model
{
    use SoftDeletes;
    
    protected $fillable = [

    'user_id','height','height_max','weight','marital_status_id','children_acceptable','residence_country_id','religion_id','caste_id','education','profession','smoking_acceptable','drinking_acceptable','diet','manglik','preferred_country_id','preferred_state_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class)->withTrashed();
    }

    public function caste()
    {
        return $this->belongsTo(Caste::class)->withTrashed();
    }

    public function sub_caste()
    {
        return $this->belongsTo(SubCaste::class)->withTrashed();
    }
    public function family_value()
    {
        return $this->belongsTo(FamilyValue::class)->withTrashed();
    }
    public function member_language()
    {
        return $this->belongsTo(MemberLanguage::class, 'language_id')->withTrashed();
    }
    public function marital_status()
    {
        return $this->belongsTo(MaritalStatus::class)->withTrashed();
    }

}
