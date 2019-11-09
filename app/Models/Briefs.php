<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Briefs extends Model
{
      protected $fillable = ['title' , 'email' , 'address' ,'description', 'descriptionPoint' , 'phone' ,  'phone2' ,'facebook' , 'video' , 'twitter' ,'instagram' ];
}
