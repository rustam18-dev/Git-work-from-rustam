<form method="post" action="third.php" >
    <input type="text" name="surname" placeholder="surname" ><br><br>
    <input type="submit" name="submit" >
</form >
<?php
    $name = $_POST['name'];
    $file = fopen("first.txt", "w+");
    fwrite($file, $name);
    fclose($file);



