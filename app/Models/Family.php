<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Family extends Model
{
    use SoftDeletes;
    
    protected $fillable = [

    'user_id','father','father_occupation','mother','mother_occupation','brother','sister'

    ];
    
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
