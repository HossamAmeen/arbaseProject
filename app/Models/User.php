<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{

    use Notifiable, HasApiTokens, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name' , 'full_name','email', 'phone' ,'password', 'role' , 'image' 
        , 'active', 'activation_token',"user_id"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activation_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    //public function setPasswordAttribute($pass){
       // return  $this->attributes['password'];
      //  $this->attributes['password'] = Hash::make($pass);
 
 //   }
}
