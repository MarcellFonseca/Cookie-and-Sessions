<?php 
    $name = $_GET['name']; //Recebendo o nome do formulário de HTML;
    $email = $_GET['email']; //Recebendo o email do formulário de HTML;
    $city = $_GET['city']; //Recebendo o local de nascimento do formulário de HTML;

    setcookie('name', $name, time()+3600*24);
    setcookie('email', $email, time()+3600*24);
    setcookie('city', $city, time()+3600*24);

    header("Location: msg.php");
	//Marcell Gonçalves Fonseca 2ºDS A//
?>