<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert(array(
            ['nama_service' => 'Modul',
             'keterangan' => 'You will get text book everytime youre joining one of our classes. There are few materials depends on what courses you took, and also some exercises in it.',
             'service_pic' => 'https://images.unsplash.com/photo-1607746747627-8f2311dac2bf?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=771&q=80'
            ],

            ['nama_service' => 'Sertificate',
             'keterangan' => 'After finishing all meeting in the course that you choose, you will get a sertificate with your final score inside, such as writing score, listening, accumulation score, and others depends on what course you took.',
             'service_pic' => 'https://www.britishmotormuseum.co.uk/hubfs/BritishMotorMuseum_September2019/Images/certificate-header-image.png'
            ],

            ['nama_service' => 'Competence Test',
             'keterangan' => 'In every English Smart programs there will be a competence test that will due twice, in the middle and in the last course. And the test result will be shown at the next meeting.',
             'service_pic' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ],

            ['serve_name' => 'Native Speaker',
             'keterangan' => 'In some of our program, you will get the chance to improve your speaking skill by talking directly with our native speaker.',
             'service_pic' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=890&q=80'
            ],

            ['serve_name' => 'IELTS Preparation Test',
             'keterangan' => 'In IELTS Preparation class, you will also get the preparation test that will be your exercise before doing the real IELTS test.',
             'service_pic' => 'https://images.unsplash.com/photo-1584601218757-8a412705aaa6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ]
        ));
    }
}
