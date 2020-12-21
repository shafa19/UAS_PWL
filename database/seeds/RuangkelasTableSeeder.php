<?php

use Illuminate\Database\Seeder;

class RuangkelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangkelas')->insert(array(
            ['nama_ruang' => 'Regular Class',
             'kapasitas' => '20',
             'ruang_pic' => 'https://images.unsplash.com/photo-1585637071663-799845ad5212?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ],

            ['nama_ruang' => 'Speaking Room',
             'kapasitas' => '10',
             'ruang_pic' => 'https://images.unsplash.com/photo-1586704024039-94db850c6406?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
            ],

            ['nama_ruang' => 'Academic Class',
             'kapasitas' => '35',
             'ruang_pic' => 'https://images.unsplash.com/photo-1494954223365-36928270fc3c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=970&q=80'
            ],

            ['nama_ruang' => 'Listening Room',
             'kapasitas' => '15',
             'ruang_pic' => 'https://images.unsplash.com/photo-1569653402334-2e98fbaa80ee?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80'
            ],

            ['nama_ruang' => 'Private Class',
             'kapasitas' => '8',
             'ruang_pic' => 'https://images.unsplash.com/photo-1468912637438-582f3f543cba?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80'
            ],

            ['nama_ruang' => 'Elementary Class',
             'kapasitas' => '15',
             'ruang_pic' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=804&q=80'
            ]
        ));
    }
}
