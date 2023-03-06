<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lifestyle extends Model
{
    use SoftDeletes;
    
    protected $fillable = [

        'user_id','diet','drink','smoke','spectcals'

    ];
    
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
