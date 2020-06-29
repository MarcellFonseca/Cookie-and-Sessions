<?php
	//IF para analisar se "user_login" == true
    if( isset($_SESSION["user_login"]) == true){ 
        echo "Bem vindo ao Sistema";
    }else{ 
		//Leva o usuario para "login"
        header("Location: main2.php"); 
    }
	//Marcell Gonçalves Fonseca 2ºDS A//
?>