<?php

class StudentAppSeeder extends Seeder
{
    public function run()
    {
        //clean our database----------------------------------------
        DB::table ('students')->delete();

        //seed our students table-----------------------------------
        //we'll create five different students
        $s1 = Student ::create (array(
            'firstname'=>'tiger',
            'lastname'=>'woods',
            'birthdate'=>'1975-12-30',
            'motto'=>"I'm a real player!",
        ));
        $s2 = Student ::create (array(
            'firstname'=>'patrick',
            'lastname'=>'mcgee',
            'birthdate'=>'1930-08-22',
            'motto'=>'I love bcit!',
        ));
        $s3 = Student ::create (array(
            'firstname'=>'charlie',
            'lastname'=>'cheen',
            'birthdate'=>'1968-03-13',
            'motto'=>'WINNING!',
        ));
        $s4 = Student ::create (array(
            'firstname'=>'jason',
            'lastname'=>'harrison',
            'birthdate'=>'2000-01-31',
            'motto'=>'tiger',
        ));
        $s5 = Student ::create (array(
            'firstname'=>'tony',
            'lastname'=>'baloney',
            'birthdate'=>'1999-10-31',
            'motto'=>'Laravel makes life so eay!',
        ));

        $this->command->info('The Students are created!!!');
    }

}