<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert(array(
            ['nama_course' => 'Conversation Class',
             'short_desc' => 'English course for 12-17 years old teenagers with practicing daily conversation using english until you become fluent.',
             'long_desc' => 'Students will encouraged by to speak english since day one joining class, such as telling their daily activities, trending news, or even learn directly from native speakers that usually happens once before the final test.',
             'harga' => '180000',
             'course_pic' => 'https://cdn.mindful.org/work.jpg?q=80&fm=jpg&fit=crop&w=1400&h=875'
            ],

            ['nama_course' => 'IELTS Preparation Class',
             'short_desc' => 'Course that preparing you to become candidates to sit in IELTS test.',
             'long_desc' => 'This program offers interactive learning systems, coursework of tasks and assignments to make you clearly understand the materials and achieve the best possible IELTS test result.',
             'harga' => '350000',
             'course_pic' => 'https://ieltstutorials.online/images/ielts_slider_bg_3.jpg'
            ],

            ['nama_course' => 'Academic Class',
             'short_desc' => 'This program provide strong foundation in the core language and study skills to succeed in academic life.',
             'long_desc' => 'It includes a wide variety of topics to which you can apply to your daily life. The lessons include themes such as workplace, social, academic, culture and everyday communication. Based on your schedule and preferences, you can choose the lesson day, time, teacher, and topic that best suit your needs.',
             'harga' => '125000',
             'course_pic' => 'https://allkidspanish.com/wp-content/uploads/2018/02/private-1.jpg'
            ],

            ['nama_course' => 'Private Class',
             'short_desc' => 'Inovatively english course program that will improve your english skills faster than usual.',
             'long_desc' => 'You are GUARANTEED to speak english fluently. With professionals teachers and different materials, feel the sensation by joining this programs.',
             'harga' => '400000',
             'course_pic' => 'https://shared.ontariotechu.ca/shared/department/student-life/student-life-photos/academic-support/conversation-cafe.jpg'
            ]
        ));
    }
}
