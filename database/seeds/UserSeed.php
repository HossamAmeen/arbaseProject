<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'full_name'=> 'admin',
            'email' => 'asd@asd.asd',
            'password' => bcrypt('admin'),
            'user_name' => "admin",
            'phone' => "01010079798",
            'user_id' => "1",
            "activation_token"=>Str::random(40),
            'role' => 1,
        ]);  
    }
    
}
