<?php
echo "Задание 1";
echo "<br><br>";
class Employee {
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
        $this->age = $age;
    }

    function get_age(){
        return $this->age;
    }

    function set_salary($salary){
        $this->salary = $salary;
    }

    function get_salary(){
        return $this->salary;
    }



}

$Emlpoyee = new Employee();
$Emlpoyee->set_first_name("Фaрxoд");
$Emlpoyee->get_firs_name();
$Emlpoyee->set_last_name("Илхомов");
$Emlpoyee->get_last_name();
$Emlpoyee->set_age(23);
$Emlpoyee->get_age();
$Emlpoyee->set_salary(1800);
$Emlpoyee->get_salary();

$Emlpoyee2 = new Employee();
$Emlpoyee2->set_first_name("Ибрoxим");
$Emlpoyee2->get_firs_name();
$Emlpoyee2->set_last_name("Чалолов");
$Emlpoyee2->get_last_name();
$Emlpoyee2->set_age(28);
$Emlpoyee2->get_age();
$Emlpoyee2->set_salary(2360);
$Emlpoyee2->get_salary();

echo  "<b>Имя:</b> " . $Emlpoyee->get_firs_name() . "<br>";
echo "<b>Фамилия:</b>  " . $Emlpoyee->get_last_name() . "<br>";
echo "<b>Возраст:</b>  " . $Emlpoyee->get_age() . "<br>";
echo "<b>Зарплата:</b>  " . $Emlpoyee->get_salary() . "<br>";

echo "<br>";

echo  "<b>Имя:</b> " . $Emlpoyee2->get_firs_name() . "<br>";
echo "<b>Фамилия:</b>  " . $Emlpoyee2->get_last_name() . "<br>";
echo "<b>Возраст:</b>  " . $Emlpoyee2->get_age() . "<br>";
echo "<b>Зарплата:</b>  " . $Emlpoyee2->get_salary() . "<br>";

echo  "<br><br>";

$SumSalary = $Emlpoyee->get_salary() + $Emlpoyee2->get_salary();
$SumAge = $Emlpoyee->get_age() + $Emlpoyee2->get_age();
echo "<b>Сумма зарплат работников составит:</b> " . $SumSalary . "<br>";
echo "<b>Сумма возрастов работников составит:</b> " . $SumAge  . "<br>";



echo "<br><br>";
?>
<div style="border: 1px solid black"></div>
<?php
echo "<br>";
echo "Задание 2";
echo "<br><br>";


class person {
    public $first_name = "Алишер";
    public $last_name;
    public $age = 36;

    function set_name($name){
        $this->first_name = $name;
    }
    function get_name(){
        return $this->first_name;
    }
    function set_Age($age){
        if ($age >= 18) {
            $this->age = $age;
        }
    }
    function get_age(){
        return $this->age;
    }
}

$Person = new person();
$Person->set_age(24);

echo "<b>Возраст ". $Person->get_name(). "a:</b> " . $Person->get_age()."<br><br>";

class User extends Employee {
    public $address;

    function set_address($address){
        $this->address = $address;
    }
    function get_address(){
        return $this->address;
    }

}
$address = new User();
$address->set_address("<b>Адрес:</b> Исмоили Сомони 40 ") ;
$address->get_address();
echo $address->get_address() . "<br>";
echo "<b>dоubleSalаry:</b> ". $SumSalary*2;










