<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new \App\Reservation([
            'user_id' => 1, 
            'house_id' => 1, 
            'checkin_date'=> date('2020-04-03'), 
            'checkout_date' => date('2020-04-05'), 
            'passed_day' => 0
        ]);

        $reservation->save();

        $reservation = new \App\Reservation([
            'user_id' => 1, 
            'house_id' => 1, 
            'checkin_date'=> date('2020-06-23'), 
            'checkout_date' => date('2020-06-25'), 
            'passed_day' => 0
        ]);

        $reservation->save();
    }
}
