<?php
class Employee{
    public $first_name;
    public $last_name;
    public $age;
    public $salary;


    function set_first_name($first_name){
        $this->first_name = $first_name;
    }

    function get_firs_name(){
        return $this->first_name;
    }

    function set_last_name($last_name){
        $this->last_name = $last_name;
    }

    function get_last_name(){
        return $this->last_name;
    }

    function set_age($age){
        $this->isAgeCorrect($age);
        $this->age = $age;
    }
    private  function isAgeCorrect($age){
        if ($age > 1 and $age < 100 ) {
            $this->age = $age;
        }

    }

    function get_age(){
        return $this->age;
    }

    function set_salary($salary = 150){
        $this->salary = $salary;
    }

    function get_salary(){
        return $this->salary . ' <span style="color: green; font-weight: bold;">TJS</span>';
    }

}

$Salary = new Employee();
$Salary->set_salary(350);
echo  "<b>Зарплата: </b>" . $Salary->get_salary() . "<br>";
$Salary->set_age(18);
echo "<b>Возраст: </b>" . $Salary->get_age()  . "<br>";