<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section_1' => 'Mijn naam is Yarno Bachmann, ik ben 19 jaar oud en ik studeer applicatie ontwikkeling. 
Ik heb een passie voor fotografie en design, daarom ben ik dus echt een frontend man. Hierom ben ik blij dat ik gebruik kan maken van een backend plugin in Laravel. 
In mijn vrije tijd leer ik graag bij over nieuwe programmeer technieken en ook ben ik veel bezig met fotografie. In fotografie begin ik steeds beter te worden en hoop dat ik in de toekomst ook meer fotografie in mijn werk kan stoppen, in bijvoorbeeld combinatie met websites bouwen en webdesign.',
            'section_2' => 'Het v.o.f. waar ik een vennoot van ben is Kingscode. Kingscode is een bedrijf die websites maakt voor iedereen. En ik programmeer maatwerk websites voor Kingscode met behulp van Laravel(php framework) en Bootstrap om alles mooi responsive te kunnen maken. Ik doe dit bedrijf samen met Collin Lambers en in de toekomst hopelijk met een mediavormgever zodat we ons ook kunnen gaan richten op startende ondernemers zonder logo, huisstijl en website.',
                'created_at' => '2018-04-16 13:30:26',
                'updated_at' => '2018-04-19 17:50:57',
            ),
        ));
        
        
    }
}