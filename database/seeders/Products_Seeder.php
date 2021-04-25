<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products_Seeder extends Seeder
{

    public function run()
    {
       
      DB::table('products')->insert([
            
            'name'=>'Test',
            'image_product'=>'mustermann-gmbh/1619033835SampleJPGImage_5mbmb.jpg',  
            'variations'=>"[{\"image\": \"mustermann-gmbh/1619033835SampleJPGImage_1mbmb(1).jpg\", \"quantity\": \"22\", \"variation\": \"blue\"}]" ,
            'company_id'=>'1',        
            'created_at'=>'2021-04-21 19:37:15',
            'updated_at'=>'2021-04-21 19:37:15'
            

   
           ]);
           
    }
}
