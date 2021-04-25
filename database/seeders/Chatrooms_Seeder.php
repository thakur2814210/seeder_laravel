<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Chatrooms_Seeder extends Seeder
{
    
    public function run()
    {
        DB::table('chatrooms')->insert([
            
            
            'type'=>'private',   
            'created_at'=>'2021-04-21 20:53:47',
            'updated_at'=>'2021-04-21 20:53:47'
            
           ]);
    }
}
