<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subscriptions_Seeder extends Seeder
{
    
    public function run()
    {
        DB::table('subscriptions')->insert([
            
            'user_id'=>'1',
            'name'=>'default',   
            'stripe_id'=>'sub_JLSnTg3090N3XV',
            'stripe_status'=>'active',
            'stripe_plan'=>'price_1H6vsoJf8ErltwJdc5taOgEq',
            'stripe_plan'=>'price_1H6vsoJf8ErltwJdc5taOgEq',
            'quantity'=>'1',
            'created_at'=>'21-04-21 19:37:44',
            'updated_at'=>'2021-04-21 19:37:44'

   
           ]);
    }
}
