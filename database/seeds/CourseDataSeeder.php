<?php

use Illuminate\Database\Seeder;

class CourseDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new \App\Course(['category' => 'categor 1', 'coursename' => 'ITCP',
        'subcategory' => 'subcategory 1', 'lecture' => 'lecture 1' , 'section' => 'section 1'
            ]);
            $course->save();
            
        $course = new \App\Course(['category' => 'categor 2', 'coursename' => 'OOP',
        'subcategory' => 'subcategory 2', 'lecture' => 'lecture 2' , 'section' => 'section 2'
            ]);
            $course->save();
            
        $course = new \App\Course(['category' => 'categor 3', 'coursename' => 'AOOP',
        'subcategory' => 'subcategory 3', 'lecture' => 'lecture 3' , 'section' => 'section 3'
            ]);
            $course->save();

        $course = new \App\Course(['category' => 'categor 4', 'coursename' => 'DBMS',
        'subcategory' => 'subcategory 4', 'lecture' => 'lecture 4' , 'section' => 'section 4'
            ]);
            $course->save();
    }
}