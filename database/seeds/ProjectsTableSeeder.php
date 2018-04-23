<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('projects')->delete();

        \DB::table('projects')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Kingscode',
                'image' => 'projects/April2018/sMDmvClgehAajycjrF7M.png',
                'created_at' => '2018-04-16 13:21:13',
                'updated_at' => '2018-04-16 13:21:13',
            ),
        ));


    }
}
