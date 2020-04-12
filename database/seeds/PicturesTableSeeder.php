<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $picture = new \App\Picture([
            'picture' => '/avatars/1586058303.jpeg',
            'house_id' => 1
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586520061.jpg',
            'house_id' => 1
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586523704.jpg',
            'house_id' => 1
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586058303.jpeg',
            'house_id' => 2
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586520061.jpg',
            'house_id' => 2
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586523704.jpg',
            'house_id' => 2
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586058303.jpeg',
            'house_id' => 3
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586520061.jpg',
            'house_id' => 3
        ]);
            
        $picture->save();

        $picture = new \App\Picture([
            'picture' => '/avatars/1586523704.jpg',
            'house_id' => 3
        ]);
            
        $picture->save();
    }
}
