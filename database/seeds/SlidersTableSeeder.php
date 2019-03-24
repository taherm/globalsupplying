<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => 'jGaNeYIVJkDNr7XBtpqAvl4Ics3AbPB4PGaciedt.jpeg',
                'created_at' => '2019-03-13 15:15:33',
                'updated_at' => '2019-03-13 15:15:33',
            ),
            1 => 
            array (
                'id' => 3,
                'image' => '2b81a73f3d03d06c72971a412c88c3cb.jpg',
                'created_at' => '2019-03-13 15:23:31',
                'updated_at' => '2019-03-13 15:23:31',
            ),
            2 => 
            array (
                'id' => 4,
                'image' => '541202ed1c854b15563294d587d8a10d.jpg',
                'created_at' => '2019-03-13 15:27:39',
                'updated_at' => '2019-03-13 15:27:39',
            ),
            3 => 
            array (
                'id' => 5,
                'image' => 'b03acd93f828252c6ac90c51daea04dc.jpg',
                'created_at' => '2019-03-13 15:27:46',
                'updated_at' => '2019-03-13 15:27:46',
            ),
            4 => 
            array (
                'id' => 6,
                'image' => 'f0e225424d8c310d644cab61bf0a09b8.jpg',
                'created_at' => '2019-03-13 15:27:52',
                'updated_at' => '2019-03-13 15:27:52',
            ),
        ));
        
        
    }
}