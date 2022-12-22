<form method ="post" action="fourth.php" >
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

