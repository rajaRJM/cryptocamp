<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Master Class',
                'slug' => 'master-class',
                'price' => '$1000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
             [
                'title' => 'Master Class',
                'slug' => 'master-class',
                'price' => '$1000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],


        ];

        
    }
}
