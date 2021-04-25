<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Messages_Seeder extends Seeder
{
    
    public function run()
    {
        DB::table('messages')->insert([
            
            'chatroom_id'=>'1', //forgein key constarint actual value is 4
            'user_id'=>'3',  
            'type'=>'mag',   
            'campaign_id'=>'52',   
            'content'=>'eyJpdiI6IlZDRDFNNEFwOVR3dTVEOUJTa283SUE9PSIsInZhbHVlIjoiWWJrUVdDNlE0dzRZOENNR05XREJYV0RZNWs3RE80U05VYWhpeHJHYkdCUlhaak54aHJNb0ZLWXdDUWt4RWF4OE5BOUlYTEtFcjYwc2RJY25OejFQRW5TUXhLN09jdHZDNWphOGZlVWZcL3hBPSIsIm1hYyI6IjhiYjc5NDhhY2RmYzM5ZmZiZTg0ZGNkNDY4YzY4ZDYzZmExMWQ1MDg5ODgyZGVmODBjZDhhYzM3MmMyYWNlMTQifQ==',  
            'created_at'=>'2021-04-21 20:53:47',
            'updated_at'=>'2021-04-21 20:53:47'
            
           ]);
    }
}
