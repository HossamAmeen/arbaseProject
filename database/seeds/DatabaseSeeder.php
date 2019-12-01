<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

     //   factory('App\Model\User',10)->create();
       factory('App\Models\Brief',1)->create();
       //  factory('App\Models\Country',20)->create();
      //  factory('App\Models\Governorate',20)->create();
      //  factory('App\Models\City',30)->create();
          $this->call([
            UserSeed::class,
        ]);
    

    }
}
