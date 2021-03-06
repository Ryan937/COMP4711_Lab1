<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include ('student.php');
        
        /*
         * Creates an array called students
         */
        $students = array();
        
         
        /*
         * Adding a student named John Doe with 2 emils and 3 grades
         */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        /*
         * Adding a student named Albert Einstein with 3 emails and 3 grades
         */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        /*
         * ADding myself with 3 emils and 3 grades
         */
        $third = new Student();
        $third->surname = "Cha";
        $third->first_name = "Ryan Sungjoo";
        $third->add_email('home','lsj937@gmail.com');
        $third->add_email('work1','scha14@bcit.ca');
        $third->add_email('work2','csj937@naver.com');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        $students['a789'] = $third;
        
        /*
         * Sorting the students in order
         */
        ksort($students);
        
        /*
         * Using the toString method to display the students
         */
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
