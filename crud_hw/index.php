<?php
require_once ('action/action.php');

$results = mysqli_query($connection, "select * from books");
?>



<!doctype html>
<html>
<head>
    <title>Crud books</title>
    <link rel="stylesheet" href="styles/style_bootstrap.css">
</head>
<body>
<style>
    .msg {
        margin: 30px auto;
        padding: 10px;
        border-radius: 5px;
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;
    }

    .containers {
        position: relative;
        margin: 10px 10px 0px 0px;
        float: right;
        width: 300px;
    }

    form {
        width: 500px;
    }

    .books {
        margin: 10px 0px 0px 10px;
        position: absolute;
        width: 900px;
        height: 500px;

    }

    .asideL{
        margin-top: 40px;
        height: 92%;
        position: relative;
        float: left;
        width: 40%;
        background: grey;
    }

    .asideR{
        max-width: 100%;
        margin-top: 4px;
        height: 92%;
        position: relative;
        width: 60%;
        float: right;
        background: grey;
    }

    .edit {
        border: 1px solid black;
        float: right;
        background: green;
        color: #fff;
        padding: 5px;
        border-radius: 10px;
        text-decoration: none;
    }
    .delete{
        border: 1px solid black;
        float: right;
        margin-right: 8px;
        background: red;
        color: #fff;
        padding: 5px;
        border-radius: 10px;
        text-decoration: none;
    }



</style>
<?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>

<div class="books">
    <?php while ($row = mysqli_fetch_array($results)): ?>
    <a class="edit" href="index.php?edit=<?= $row['id']?>">Редактировать</a>
        <a class="delete" href="index.php" onclick="del(<?= $row['id']?>)">Удалить</a>
    <asideL class="asideL">

        <img src="<?=$row['img_url']?>" alt="">
    </asideL>

    <asideR class="asideR">
        <h1><?=$row['name']?></h1>
        <hr>
        <p><b>Автор: </b><?=$row['author']?></p>
        <hr>
        <p><b>Дата публикации:</b> <?=$row['public_of_year']?></p>
        <hr>
        <p><b>Объём:</b> <?=$row['isbn']?></p>
        <hr>
        <p><b>Язык:</b> <?=$row['lang']?></p>
        <hr>
        <p><b>Описание:</b> <?=$row['description']?></p>
    </asideR>
    <?php endwhile; ?>
</div>




<div class="containers">
    <form method="post" action="action/action.php" class="form" enctype="multipart/form-data">
        <div class="mb-3 col-7">
            <label  class="form-label">Имя</label>
            <input type="text" class="form-control" name="name" value="<?= $name?>">
        </div>
        <div class="mb-1 col-7">
            <label  class="form-label">Описание</label>
            <textarea class="form-control" name="description"><?= $description?></textarea>
        </div>
        <div class="mb-1 col-7">
            <label class="form-label">Автор</label>
            <input type="text" class="form-control" name="author" value="<?= $author?>">
        </div>
        <div class="mb-1 col-7">
            <label  class="form-label">Дата публикации</label>
            <input type="text" class="form-control" name="public_of_year" value="<?= $public_of_year?>">
        </div>
        <div class="mb-1 col-7">
            <label  class="form-label">Объём</label>
            <input type="number" class="form-control" name="isbn" value="<?= $isbn?>">
        </div>
        <div class="mb-1 col-7">
            <label  class="form-label">Язык</label>
            <input type="text" class="form-control" name="lang" value="<?= $lang?>">
        </div>
        <div class="mb-1 col-7">
            <label class="form-label">Изображение</label>
            <input type="file" class="form-control" name="img_url" value="<?= $img_url?>">
        </div>
        <input type="hidden" name="id" value="<?= $id?>">
        <?php if($update == true): ?>
            <button class="btn btn-success" type="submit" name="update" >Обновить</button>
        <?php else: ?>
            <button class="btn btn-success" type="submit" name="save" >Готово</button>
        <?php endif ?>
    </form>
</div>
<script>
    function del(z)
    {
        let delConfig = confirm('You sure?')

        if (delConfig === true) {
            document.location.href='?del=' + z;
        }
    }

</script>
</body>
</html>