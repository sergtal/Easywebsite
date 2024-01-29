<?php
 $login = $_POST['login'];
 if($login == '') {
  echo 'Введите логин';
   exit();
}

 $dsn = 'mysql:host=localhost;dbname=id13833485_gamebase';
 $pdo = new PDO($dsn, 'id13833485_sergebase', 'Sergey67142?');

 $sql = 'INSERT INTO tasks(task) VAlUES(:task)';
 
?>