<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(array(
            ['nama_siswa' => 'Kania Adisty',
            'jk' => 'Female',
            'usia' => '19',
            'alamat' => 'Garuda Street No.10',
            'email' => 'adisty@gmail.com',
            'no_telp' => '082394792037'
            ],

            ['nama_siswa' => 'Mima Bernika',
             'jk' => 'Female',
             'usia' => '17',
             'alamat' => 'Buah Batu Residence No.7',
             'email' => 'mimabern@gmail.com',
             'no_telp' => '089746253846'
            ],

            ['nama_siswa' => 'August Joey',
             'jk' => 'Male',
             'usia' => '20',
             'alamat' => 'Kutilang Street Block A2',
             'email' => 'joeyyy@gmail.com',
             'no_telp' => '085738268304'
            ],

            ['nama_siswa' => 'Flavio Kanaka',
             'jk' => 'Male',
             'usia' => '18',
             'alamat' => 'Cempaka Asri B12',
             'email' => 'flaviokana@gmail.com',
             'no_telp' => '081738490264'
            ],

            ['nama_siswa' => 'Audrey Leona',
             'jk' => 'Female',
             'usia' => '17',
             'alamat' => 'Ijen Street No.8',
             'email' => 'leonaudrey@gmail.com',
             'no_telp' => '082263748910'
            ]
        ));
    }
}
