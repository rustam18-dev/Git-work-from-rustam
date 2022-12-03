<?php
$glob_dohod = 0;
$glob_rashod = 0;
$res = 0;
$his_dohod=[];
$his_rashod=[];
$comment_dohod=[];
$comment_rashod=[];
$date_dohod=[];
$date_rashod=[];
function balans(){
	echo 'На Вашем балансе : $' . $GLOBALS["res"] = $GLOBALS["glob_dohod"] - $GLOBALS["glob_rashod"];
	bar();
}

function dokhod(){
	 echo "Введите Ваш Доход: ";
     $dohod = readline('Введите Ваш Доход: ');
	 echo "Напишите комментарий Вашему доходу: ";
     $comment_d = readline('Напишите коментарий Вашему доходу: ');
	 $GLOBALS["glob_dohod"] = $dohod + $GLOBALS["glob_dohod"];
	 array_push($GLOBALS["his_dohod"],$dohod);
	 print_r( $GLOBALS["his_dohod"]);
	 array_push($GLOBALS["comment_dohod"],$comment_d);
	 print_r( $GLOBALS["comment_dohod"]);
	 $date_d = date("Y-m-d H:i:s");
	 array_push($GLOBALS["date_dohod"],$date_d);
	bar();
}

function raskhod(){
	 echo "Введите Ваш Расход: ";
     $rashod = readline('Введите Ваш Расход: ');
	 echo "Напишите комментарий Вашему расходу: ";
     $comment_r = readline('Напишите коментарий Вашему расходу: ');
	 $GLOBALS["glob_rashod"] = $rashod + $GLOBALS["glob_rashod"];
	 array_push($GLOBALS["his_rashod"],$rashod);
	 print_r( $GLOBALS["his_rashod"]);
	 array_push($GLOBALS["comment_rashod"],$comment_r);
	 print_r( $GLOBALS["comment_rashod"]);
	 $date_r = date("Y-m-d H:i:s");
	 array_push($GLOBALS["date_rashod"],$date_r);
	bar();
}

function istoriya_dokhoda(){
	 echo 'История Вашего Дохода:'. "\n";
	 for ($i=0;$i<count($GLOBALS["his_dohod"]);$i++){
		  echo '$' . $GLOBALS["his_dohod"][$i] .'  '. $GLOBALS["comment_dohod"][$i] .
			  '  ' . $GLOBALS["date_dohod"][$i] . "\n";
	 }
	bar();
}

function istoriya_raskhoda(){
	 echo 'История Вашего Расхода:'. "\n";
	 for ($i=0;$i<count($GLOBALS["his_rashod"]);$i++){
		  echo '$' . $GLOBALS["his_rashod"][$i] .'  '. $GLOBALS["comment_rashod"][$i] .
				'  ' . $GLOBALS["date_rashod"][$i] ."\n";
	 }
	bar();
}

function instruksiya(){
	 echo 'Иструкция по использованию:' . "\n"
		 . 'При нажатии цифры 1 Вам появляется Ваш баланс.' . "\n"
		  . 'При нажатии цифры 2 Вы должны ввысти сумму Вашего дохода, и дать ему коментарий.' . "\n"
		  . 'При нажатии цифры 3 Вы должны ввысти сумму Вашего расхода, и дать ему коментарий.' . "\n"
		  . 'При нажатии цифры 4 появляется история всех Ваших доходов.' . "\n"
		  . 'При нажатии цифры 5 появляется история всех Ваших расходов.' . "\n"
		  . 'При нажатии цифры 6 появляется инструкция по использованию программы.' . "\n"
		  . 'При нажатии цифры 7 Вы выходите из программы.' . "\n";
	bar();
}

function exite(){
	 echo "Вы вышли из программы !";
}

function bar(){
	 echo '
Нажмите на следующие цифры по их назначению:
1) Иструкция по использованию
2) Баланс
3) Добавить доход
4) Добавить расход
5) История доходов
6) История расходов
7) Выход из программы
';

     $in_data = readline('Введите цифру от 1 до 7 , по их назначениям : ');
	 if ($in_data == 2) {
		  balans();
	 } elseif ($in_data == 3) {
		  dokhod();
	 } elseif ($in_data == 4) {
		  raskhod();
	 } elseif ($in_data == 5) {
		  istoriya_dokhoda();
	 } elseif ($in_data == 6) {
		  istoriya_raskhoda();
	 } elseif ($in_data == 1) {
		  instruksiya();
	 } elseif ($in_data == 7) {
		  exite();
	 } else {
		  echo 'Введите цифру от 1 до 7 !!!';
	 }
}
bar();























?>
