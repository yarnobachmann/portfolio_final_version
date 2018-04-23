<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Sofie portret foto',
                'image' => 'images/April2018/TscaPcgJ7wsvJX7Gf5rR.jpeg',
                'created_at' => '2018-04-16 12:27:06',
                'updated_at' => '2018-04-16 12:27:06',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Muurbegroeiing boven oud houten bankje',
                'image' => 'images/April2018/aHxtiT1MT4X7UCtPu9xe.jpg',
                'created_at' => '2018-04-16 13:01:11',
                'updated_at' => '2018-04-16 13:04:29',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Sofie met zonnebril effect',
                'image' => 'images/April2018/d9kGvn8wnGPa4ayzMdRX.jpg',
                'created_at' => '2018-04-16 13:09:44',
                'updated_at' => '2018-04-16 13:09:44',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Captain morgan lage sluiterstijd',
                'image' => 'images/April2018/AiFJqWMAKe5B8D94rGGF.jpg',
                'created_at' => '2018-04-17 19:35:11',
                'updated_at' => '2018-04-17 19:35:11',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Oldtimer in Rotterdam',
                'image' => 'images/April2018/kwU2yHsetRmygXub0f8g.jpg',
                'created_at' => '2018-04-17 19:36:47',
                'updated_at' => '2018-04-17 19:36:47',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Sofie bovenaf view',
                'image' => 'images/April2018/4xPfz0F5iC3CvWEk6zZ9.jpg',
                'created_at' => '2018-04-17 20:10:12',
                'updated_at' => '2018-04-17 20:10:12',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Zwart/Wit foto van Sofie',
                'image' => 'images/April2018/fNIxwLAE3q5RNVD2RiFc.jpg',
                'created_at' => '2018-04-17 20:22:04',
                'updated_at' => '2018-04-17 20:23:13',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Harry Potter brug in Schotland',
                'image' => 'images/April2018/QkSAuqQq6uKuMUZKXEeX.jpg',
                'created_at' => '2018-04-18 23:23:52',
                'updated_at' => '2018-04-18 23:23:52',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Valkparkiet bij oude dierentuin Emmen',
                'image' => 'images/April2018/fOgDo9XXrByAaUViahq4.jpg',
                'created_at' => '2018-04-18 23:25:04',
                'updated_at' => '2018-04-18 23:25:04',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Mijn kat in een liggende positie',
                'image' => 'images/April2018/Fe7kRY6rAKyynBt6oBd0.jpg',
                'created_at' => '2018-04-18 23:27:14',
                'updated_at' => '2018-04-18 23:27:14',
            ),
        ));
        
        
    }
}