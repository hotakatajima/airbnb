<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HousesTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
    }
}
