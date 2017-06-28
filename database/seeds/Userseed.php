<?php

use Illuminate\Database\Seeder;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	\DB::table("users")->insert(
            [
            "name"=>"Cury","email"=>"sdasda@jad",
            "password"=>bcrypt('ejemplo')

            ]
    		);
        //
    }
}
