<?php
error_reporting(-1);
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
//    $img_name = 'images/' . $img_url['name'];
    $uploads = '../images';
    $tmp_name = $_FILES['img_url']['tmp_name'];
    $img_url_name = basename($_FILES['img_url']['name']);
    $path_to = "$uploads/$img_url_name";
    $file = move_uploaded_file($tmp_name, $path_to);
    $path_db = "images" . "/" . $img_url_name;

    $res = mysqli_query($connection, "INSERT INTO books (name, description, author, public_of_year, isbn, lang, img_url)
    VALUES ('$name', '$description', '$author', '$public_of_year', '$isbn', '$lang', '$path_db')");

    if($res){
        $_SESSION['message'] = 'Успех';
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
//    $uploads = '../images';
//    $tmp_name = $_FILES['img_url']['tmp_name'];
//    $img_url_name = basename($_FILES['img_url']['name']);
//    $path_to = "$uploads/$img_url_name";
//    $file = move_uploaded_file($tmp_name, $path_to);
//    $path_db = "images" . "/" . $img_url_name;

    if(isset($n)){
        $name = $n['name'];
        $description = $n['description'];
        $author = $n['author'];
        $public_of_year = $n['public_of_year'];
        $isbn = $n['isbn'];
        $lang = $n['lang'];
        $path_db = $n['img_url'];

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

    $uploads = '../images';
    $tmp_name = $_FILES['img_url']['tmp_name'];
    $img_url_name = basename($_FILES['img_url']['name']);
    $path_to = "$uploads/$img_url_name";
    $file = move_uploaded_file($tmp_name, $path_to);
    $path_db = "images" . "/" . $img_url_name;

    $res = mysqli_query($connection, "update books set
                 name='$name',
                 description='$description', 
                 author='$author',
                 public_of_year='$public_of_year',
                 isbn='$isbn', lang='$lang',
                 img_url='$path_db'
                where id=$id"
    );

    if($res){
        $_SESSION['message'] = "Данные обновлены!";
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


