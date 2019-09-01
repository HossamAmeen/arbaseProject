<?php

namespace App\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name' , 'country_id'];
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
