<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Chatroom_users_Seeder extends Seeder
{
    
    public function run()
    {
        
        DB::table('chatroom_users')->insert([
          
         
          [
            'chatroom_id'=>'4',      
            'user_id'=>'1',  
            'role'=>'user',        
            'created_at'=>'2021-04-21 20:53:47',
            'updated_at'=>'2021-04-21 20:53:47'
            ],
            [
            'chatroom_id'=>'4',  
            'user_id'=>'3',  
            'role'=>'user',         
            'created_at'=>'2021-04-21 20:53:47',
            'updated_at'=>'2021-04-21 20:53:47'
                ]
        ]);
        
    }
}
