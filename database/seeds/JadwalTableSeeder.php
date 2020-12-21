<?php

use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert(array(
            ['materi' => 'English Conversation 1 & 2',
             'pemateri' => 'Ms. Shafa Ilona',
             'waktu' => 'Monday, 16.30-18.00 WIB & Friday, 18.30-20.00 WIB',
             'lama_pertemuan' => '90'
            ],

            ['materi' => 'English for Academic',
             'pemateri' => 'Ms. Venina Yuliya',
             'waktu' => 'Tuesday, 15.00-16.00 WIB & Thursday, 17.00-18.00 WIB',
             'lama_pertemuan' => '60'
            ],

            ['materi' => 'English for IELTS Preparation',
             'pemateri' => 'Mr. Arka Sena',
             'waktu' => 'Saturday, 18.30-20.30 WIB & Sunday, 18.30-20.30 WIB',
             'lama_pertemuan' => '120'
            ],

            ['materi' => 'English for Intermediate',
             'pemateri' => 'Mr. Bara Satrio',
             'waktu' => 'Wednesday, 16.30-18.00 WIB & Thursday, 18.30-20.00 WIB',
             'lama_pertemuan' => '90'
            ]
        ));
    }
}
