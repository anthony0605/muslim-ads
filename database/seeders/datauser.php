<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datauser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            [
                'name' => 'Ali',
                'age' => '17',
                'gender' => 'M',
                'city' => 'semarang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Aisyah',
                'age' => '35',
                'gender' => 'F',
                'city' => 'solo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Salim',
                'age' => '29',
                'gender' => 'M',
                'city' => 'jogja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Budi',
                'age' => '24',
                'gender' => 'M',
                'city' => 'semarang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Eko',
                'age' => '18',
                'gender' => 'M',
                'city' => 'solo ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Umar',
                'age' => '20',
                'gender' => 'M',
                'city' => 'jogja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Abdurrahman',
                'age' => '32',
                'gender' => 'M',
                'city' => 'semarang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            ,[
                'name' => 'Daniel',
                'age' => '23',
                'gender' => 'M',
                'city' => 'solo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Linda',
                'age' => '28',
                'gender' => 'F',
                'city' => 'jogja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Hasan',
                'age' => '40',
                'gender' => 'M',
                'city' => 'semarang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Husna',
                'age' => '19',
                'gender' => 'F',
                'city' => 'solo ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Putri',
                'age' => '45',
                'gender' => 'F',
                'city' => 'jogja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Wahyu',
                'age' => '51',
                'gender' => 'M',
                'city' => 'semarang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Mansur',
                'age' => '47',
                'gender' => 'M',
                'city' => 'solo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'Sarah',
                'age' => '32',
                'gender' => 'F',
                'city' => 'jogja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('datauser')->insert($data);    
     
    }
}
