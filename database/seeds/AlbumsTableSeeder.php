<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '5bb91e1694f038fa0257060f7eb9117e.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '66c143e3ce2f7c2ed8aaf4dbd7802076.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1c8e3bec3ab1557caa9dbe1ae3f3a50a.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'ab70c1a27b956dbd0e28aa923cea5fb8.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '7c847c25e3e37bf2691ddba157dde267.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'f08e61c7d8e09cd4a453cf2e209ed8a5.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => '247788c3b8b58933510c8860e4b68ab0.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => '8f5b5693a6554c71f74540943b63a3b8.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            8 => 
            array (
                'id' => 9,
                'image' => '3d27a9de6a70ebed8078ae56da1af75e.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            9 => 
            array (
                'id' => 10,
                'image' => 'e33d43030ced599648bca375c643b4c9.jpeg',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
        ));
        
        
    }
}