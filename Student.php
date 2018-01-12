<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Ryan
 */
class Student {
    
    /*
     * Constructor that creates a student that contains name, email, and grades
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     * Adds email of the student
     * 
     * @param $which where the email is used
     * @param $address the email address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /*
     * Adds grade of the student
     * 
     * @param $grade the grade of the student
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /*
     * Calculates the average grade of the student
     * 
     * @return $total Total grade is added and divided by the count of 
     * number of grades
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /*
     * Returns the student's name, email, grade in a format
     * 
     * @return $result Stores everything in result and returns
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>'. $result . '</pre>';
    }
}
