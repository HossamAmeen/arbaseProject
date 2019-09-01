<?php

namespace App\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name' , 'country_id'];

    public function governorate(){
        return $this->belongsTo(Governorate::class);
    }
}
