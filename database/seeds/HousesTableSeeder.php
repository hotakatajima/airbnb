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

        $house = new \App\House([
            'housetype' => 'House',
            'roomtype'=> 'Shared',
            'accommodate'=> 3,
            'bedrooms'=> 3,
            'bathrooms'=> 3,
            'price'=> 3000,
            'name'=> 'iioffice',
            'description'=> 'This is also office but can sleep here.',
            'amenitie1'=> 0,
            'amenitie2'=> 1,
            'amenitie3'=> 0,
            'amenitie4'=> 1,
            'amenitie5'=> 1,
            'address'=> 'Cebu city',
            'publish' => 1,
            'user_id' => 2
        ]);
        
        $house->save();

        $house = new \App\House([
            'housetype' => 'Apartment',
            'roomtype'=> 'Entire',
            'accommodate'=> 2,
            'bedrooms'=> 1,
            'bathrooms'=> 2,
            'price'=> 1500,
            'name'=> 'Avida',
            'description'=> 'This is so spacious apartment.',
            'amenitie1'=> 1,
            'amenitie2'=> 1,
            'amenitie3'=> 0,
            'amenitie4'=> 1,
            'amenitie5'=> 0,
            'address'=> 'IT park',
            'publish' => 1,
            'user_id' => 1
        ]);
        
        $house->save();
    }
}
