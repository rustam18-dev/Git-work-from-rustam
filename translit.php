<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="translit">
    <input type="submit">
</form>
</body>
</html>
<?php
$kiriliq = $_POST['translit'];
$latince=  " - " . $kiriliq;
$Kirilika = ["А", "а", "Б", "б", "В", "в",  "Г", "г", "Д", "д", "Е","е", "Ё", "ё", "Ж", "ж", "З", "з", "И", "и", "Й", "й", "К", "к", "Л", "л", "М", "м", "Н", "н", "О", "о", "П", "п", "Р" ,"р", "С", "с", "Т", "т", "У", "у", "Ф", "ф",   "Х", "х","Ц",  "ц", "Ч",  "ч", "Ш","ш",     "Щ","щ", "Ъ","ъ",  "Ь","ь", "Ы","ы", "Ю","ю", "Э","э", "Я","я", " "];
$latina = ["A", "a", "B", "b", "V", "v", "G", "g", "D", "d", "E", "e", "Yo", "yo", "Zh", "zh", "Z", "z", "I", "i", "J", "j", "K", "k", "L", "l", "M", "m", "N", "n", "O", "o", "P", "p", "R", "r", "C", "c","T", "t", "U","u", "F", "f","Kh", "kh", "C", "c","Ch", "ch", "Sh","sh", "Sh ", "sh","''", "''","'", "'", "e","e", "Yu","yu", "E", "e","Ya", "ya", " "];
$latince = str_replace($latina, $Kirilika, $latince);
$kiriliq = str_replace($Kirilika, $latina, $kiriliq);
echo $kiriliq;