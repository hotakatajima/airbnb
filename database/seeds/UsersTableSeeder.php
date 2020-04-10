<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'hotaka',
            'email' => 'hotaka@gmail.com',
            'password' => Hash::make('hotahota'),
            'status' => 'host',
            'image' => '/avatars/1586057248.jpg'
        ]);
        
        $user->save();

        $user = new \App\User([
            'name' => 'yutaka',
            'email' => 'yutaka@gmail.com',
            'password' => Hash::make('yutaka00'),
            'status' => 'user',
            'image' => null
        ]);
        
        $user->save();

        $user = new \App\User([
            'name' => 'daisuke',
            'email' => 'daisuke@gmail.com',
            'password' => Hash::make('daisuke00'),
            'status' => 'user',
            'image' => null
        ]);
        
        $user->save();

    }
}
