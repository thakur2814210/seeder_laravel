<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Profile_accesses_Seeder extends Seeder
{
    
    public function run()
    {
        
        DB::table('profile_accesses')->insert([
            
            'company_id'=>'1',
            'user_id'=>'3',            
            'created_at'=>'2021-04-21 20:53:47',
            'updated_at'=>'2021-04-21 20:53:47'
            
   
           ]);
    }
}
