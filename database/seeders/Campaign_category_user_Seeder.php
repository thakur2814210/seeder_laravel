<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Campaign_category_user_Seeder extends Seeder
{
   
    public function run()
    {
        DB::table('campaign_category_user')->insert([
            [
            'campaign_category_id'=>'2',
            'user_id'=>'1',             //actual value is 56
            'created_at'=>'2021-04-21 22:07:34',
            'updated_at'=>'2021-04-21 22:07:34'
            ],
            [
                'campaign_category_id'=>'6',
                'user_id'=>'1',      //actual value is 56
                'created_at'=>'2021-04-21 22:07:34',
                'updated_at'=>'2021-04-21 22:07:34'
                ],
                [
                    'campaign_category_id'=>'7',
                    'user_id'=>'1',      //actual value is 56
                    'created_at'=>'2021-04-21 22:07:34',
                    'updated_at'=>'2021-04-21 22:07:34'
                    ]

   
           ]);
    }
}
