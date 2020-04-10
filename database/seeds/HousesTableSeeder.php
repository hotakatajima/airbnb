<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house = new \App\House([
            'housetype' => 'Apartment',
            'roomtype'=> 'Private',
            'accommodate'=> 4,
            'bedrooms'=> 4,
            'bathrooms'=> 4,
            'price'=> 2000,
            'name'=> 'AYOAYO cafe',
            'description'=> 'This is so greate accommodation, everyone can feel comfortable.',
            'amenitie1'=> 1,
            'amenitie2'=> 0,
            'amenitie3'=> 0,
            'amenitie4'=> 0,
            'amenitie5'=> 1,
            'address'=> 'Cebu city',
            'publish' => 1,
            'user_id' => 1
        ]);
        
        $house->save();
    }
}
