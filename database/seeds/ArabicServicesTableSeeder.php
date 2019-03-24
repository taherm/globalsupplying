<?php

use Illuminate\Database\Seeder;

class ArabicservicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('arabicservices')->delete();
        
        \DB::table('arabicservices')->insert(array (
            0 => 
            array (
                'arabicmenu_id' => 4,
                'id' => 1,
                'title' => 'Coming Soon',
                'description' => '<p>Coming Soon</p>',
                'image' => '8210206c19ba8b71be9a76270bdb3029.png',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 15:31:03',
            ),
            1 => 
            array (
                'arabicmenu_id' => 4,
                'id' => 2,
                'title' => 'Coming Soon',
                'description' => '<p>Coming Soon</p>',
                'image' => '495009529e9a86d49a0e3cd6b7ccccf3.png',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 15:31:52',
            ),
            2 => 
            array (
                'arabicmenu_id' => 4,
                'id' => 3,
                'title' => 'Coming Soon',
                'description' => '<p>Coming Soon</p>',
                'image' => '7d0afab10436fc9554993259eac1a795.png',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 15:32:06',
            ),
        ));
        
        
    }
}