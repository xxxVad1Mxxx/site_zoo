<?php
/* Принимаем данные из формы */
$name = $_POST['name']; 
$email = $_POST['email'];
$text_message = $_POST['message'];

/* Подключаемся к БД */
$db = mysqli_connect('localhost', 'root','', 'pokemonDB'); 
 
/* Записываем данные из формы в БД */
$sql = "INSERT INTO pokemons(name, email, message) VALUES ('$name', '$email', '$text_message')";
$result=mysqli_query($db, $sql);
header('Location: https://site-main/information.php');
exit;
?>