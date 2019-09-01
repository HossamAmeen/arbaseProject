<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

     //   factory('App\Model\User',10)->create();
       factory('App\Model\Bref',1)->create();
         factory('App\Model\Country',20)->create();
        factory('App\Model\Governorate',20)->create();
        factory('App\Model\City',30)->create();
          $this->call([
            UserSeed::class,
        ]);
    

    }
}
