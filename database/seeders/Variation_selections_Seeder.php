<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Variation_selections_Seeder extends Seeder
{
   
    public function run()
    {
      
      DB::table('variation_selections')->insert([

            'variant'=>"[\"blue\"]",
            'user_id'=>'3', 
            'product_id'=>'1',
            'campaign_id'=>'52',       
            'created_at'=>'2021-04-21 20:53:47',
            'updated_at'=>'2021-04-21 20:53:47'
   
           ]);
           
           
    }

}
