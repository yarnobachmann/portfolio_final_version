<?php

use Illuminate\Database\Seeder;

class ProjectViewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_views')->delete();
        
        \DB::table('project_views')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section_1' => 'Kingscode is een programmeurs bedrijf dat websites bouwt voor iedereen, van Wordpress tot maatwerk. Kingscode werkt samen met jou jouw ideeën uit en zorgt voor een mooi eindresultaat.
Ook kan Kingscode pakketten leveren bij het maatwerk, zoals het onderhoud pakket of het analytics pakket.',
            'section_2' => 'Collin Lamber en ik (Yarno Bachmann) zijn deze v.o.f. begonnen om unieke en bijzondere dingen te creëren in jouw belang en wensen.
In de toekomst ben ik van plan om fotografie ook te verwerken in ons bedrijf, maar voor nu als basis houden we het op websites bouwen! Bent u geïnteresseerd of heeft u vragen? U kunt onze website bezoeken voor contact of meer informatie over Kingscode.',
                'side_image' => 'project-views/April2018/PAA3zG7t4URFFcEKow1u.jpg',
                'right_image' => 'project-views/April2018/vYMwD75kZSxv08CcUXWh.png',
                'link_website' => 'http://www.kingscode.ga/',
                'project_id' => 1,
                'created_at' => '2018-04-16 18:38:59',
                'updated_at' => '2018-04-19 12:14:20',
                'project_name' => 'Kingscode',
            ),
        ));
        
        
    }
}