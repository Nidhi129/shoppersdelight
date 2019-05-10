<?php

use Illuminate\Database\Seeder;
use App\Blueraydisc;

class BlueraydiscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BLueraydisc::create([
            'slug' => 'disc-fourteen',
            'disc_name' => 'Race',
            'type' =>'Blue Ray Movies',
            'condition'=> 'NEW',
            'original_price' => 800,
            'discount_price' => 600,
            'quantity' => 6,
            'description'=> 'abc',

        ]);


             BLueraydisc::create([
            'slug' => 'disc-fifteen',
            'disc_name' => 'Gangs Of Wasseypur 1 & 2',
            'type' =>'Blue Ray Movies',
            'condition'=> 'NEW',
            'original_price' => 1200,
            'discount_price' => 1000,
            'quantity' => 1,
            'description'=> 'abc',

        ]);


             BLueraydisc::create([
            'slug' => 'disc-sixteen',
            'disc_name' => 'Gravity',
            'type' =>'Blue Ray Movies',
            'condition'=> 'NEW',
            'original_price' => 1200,
            'discount_price' => 800,
            'quantity' => 6,
            'description'=> 'abc',

        ]);


    }
}
