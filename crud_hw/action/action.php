<?php
session_start();

$hostname = 'localhost';
$name = 'root';
$password = '';
$dbname = 'crud';

$connection = mysqli_connect($hostname, $name, $password, $dbname);
$name = '';
$description = '';
$author = '';
$public_of_year = 0;
$isbn = '';
$lang = '';
$img_url = '';
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $public_of_year = $_POST['public_of_year'];
    $isbn = $_POST['isbn'];
    $lang = $_POST['lang'];
    $img_url = $_FILES['img_url'];


    $res = mysqli_query($connection, "INSERT INTO books (name, description, author, public_of_year, isbn, lang, img_url)
    VALUES ('$name', '$description', '$author', '$public_of_year', '$isbn', '$lang', '$img_url')");

    if($res){
        $_SESSION['message'] = "Данные сохранены";
        header('location: ../index.php');
    } else {
        $_SESSION['message'] = "Ошибка в БД";
        header('location: ../index.php');
    }
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $res = mysqli_query($connection, "select * from books where id=$id");
    $n = mysqli_fetch_array($res);

    if(isset($n)){
        $name = $n['name'];
        $description = $n['description'];
        $author = $n['author'];
        $public_of_year = $n['public_of_year'];
        $isbn = $n['isbn'];
        $lang = $n['lang'];
        $img_url = $n['img_url'];
    }
}

if (isset($_POST['update'])) {
    $id= $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $public_of_year = $_POST['public_of_year'];
    $isbn = $_POST['isbn'];
    $lang = $_POST['lang'];
    $img_url = $_FILES['img_url'];

    $res = mysqli_query($connection, "update books set name='$name', description='$description', author='$author', public_of_year='$public_of_year', isbn='$isbn', lang='$lang', img_url='$img_url' where id=$id");

    if($res){
        $_SESSION['message'] = "Данные обновлены";
        header('location: ../index.php');
    } else {
        $_SESSION['message'] = "Ошибка в БД";
        header('location: ../index.php');
    }
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $update = true;
    $res = mysqli_query($connection, "delete from books where id=$id");
    if($res){
        $_SESSION['message'] = "Данные удалены";
        header('location: index.php');
    } else {
        $_SESSION['message'] = "Ошибка в БД";
        header('location: index.php');
    }
}
?>


