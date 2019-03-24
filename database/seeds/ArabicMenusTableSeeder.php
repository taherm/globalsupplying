<?php

use Illuminate\Database\Seeder;

class ArabicmenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('arabicmenus')->delete();
        
        \DB::table('arabicmenus')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'الدورات',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'المؤلفات',
                'created_at' => '2019-03-13 14:52:23',
                'updated_at' => '2019-03-13 14:52:23',
            ),
        ));
        
        
    }
}