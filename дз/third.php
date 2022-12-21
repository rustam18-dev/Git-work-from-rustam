<form method ="post" >
    <input type="number" name="age" placeholder="age"><br><br>
    <input type="submit"  name="submit" >
</form >

<?php
if (!empty($_POST['surname'])) {
    $surname = $_POST['surname'];
    $file = fopen("second.txt", "w+");
    fwrite($file, $surname);
    fclose($file);


}

if (!empty($_POST['age'])){
    $age = $_POST['age'];
    $file = fopen("third.txt", "w+");
    fwrite($file, $age);
    fclose($file);


    $fileName = file_get_contents('first.txt');
    echo "Имя: " . $fileName . "<br>";
    $fileSurname = file_get_contents('second.txt');
    echo "Фамилия: " . $fileSurname . "<br>";
    $fileAge = file_get_contents('third.txt');
    echo "Возраст: " . $fileAge . "<br>";

}
