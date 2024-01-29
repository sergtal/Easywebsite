<?php
$login = filter_var(trim($_POST['login']));
 if($login == '') {
  echo "Введите логин";
   exit();
}
 $name = filter_var(trim($_POST['name']));
 if($name == '') {
  echo "Введите имя";
   exit();
}
 $pass = filter_var(trim($_POST['pass']));
 if($pass == '') {
  echo "Введите пароль";
   exit();
}

$hashedPass=password_hash($pass, PASSWORD_DEFAULT)

try {
  $conn = new PDO("mysql:host=localhost;dbname=id13833485_gamebase", "id13833485_sergebase", "Sergey67142?");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (login, password, name)
  VALUES ('$login', '$pass', '$name')";
 
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

 header('Location: /');
?>