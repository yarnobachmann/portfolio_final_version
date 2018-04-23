<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'yarnobachmann@gmail.com',
                'phone_number' => '+31 6 37241371',
                'street_name' => 'Oranjedorpstraat',
                'house_number' => '58',
                'recidence' => 'Nieuw-Dordrecht',
                'created_at' => '2018-04-16 14:03:57',
                'updated_at' => '2018-04-16 14:10:18',
                'whapp_number' => '31637241371',
            ),
        ));
        
        
    }
}