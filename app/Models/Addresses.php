<?php



namespace App\Models;

use App\User;



use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;



class Addresses extends Model

{

    use SoftDeletes;

    protected $fillable = [

        'user_id','type','taluka','addres','village','city_id','state_id','country_id'

    ];

    public function user()

    {

        return $this->belongsTo(User::class)->withTrashed();

    }

}

