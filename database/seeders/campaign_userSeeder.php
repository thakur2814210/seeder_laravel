<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class campaign_userSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('campaign_user')->insert([
            
         'campaign_id'=>'52',
         'user_id'=>'3',
         'state_id'=>'2',
         'created_at'=>'2021-04-21 20:53:47',
         'updated_at'=>'2021-04-21 20:53:47'

        ]);
    }
}
