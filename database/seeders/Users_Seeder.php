<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users_Seeder extends Seeder
{
    
    public function run()
    {
        
        DB::table('users')->insert([
            
            'username'=>'Tospik', 
            'slug'=>'tospik',
            'firstname'=>'Melih'  ,
            'lastname'=>'Ecevitli',
            'name'=>'MelihEcevitli',
            'email'=>'melih.ecevitli@gmail.com',
            'email_verified_at'=>'2021-04-21 22:08:34',
            'password'=>'$2y$10$SS5Nk2GpfB317JG70IibGe5pOlLZQevrklZI6PFWJ4LqYHLc0o8Eu',
            'channels'=>"{\"instagram\": {\"id\": 17841435786406000, \"username\": \"melosmokeshisha\", \"access_token\": \"IGQVJVSlJId2VXcGJod2FxdE0zQ1lvU0pFS2FERUUzQjkxOEg0OXFOdFc3c3NqbDh0Q1EzSWNCQ2xMOEZAaR0J1NWNJa094a29jemgxSXRheVdhUGpRUVdiUEFxbnk0NktEUXRyX1ZAB\"}}",
            'created_at'=>'2021-04-21 22:06:57',
            'updated_at'=>'2021-04-21 22:09:32',
            'stripe_id'=>'cus_JLVCFuw0mi4uKM',
            'birthday'=>'1992-10-16',
            'state'=>'BY'
            
           ]);
           
    }
}
