<?php
	//Inicio da Sessão
    session_start();
	//Atribuindo o valor para "usuário" com o fomulário enviado com POST
    $_SESSION["usuario"] = $_POST['user'];
	//Atribuindo o valor para "senha" com o fomulário enviado com POST
    $_SESSION["senha"] = $_POST['password'];
	//IF para analisar se a senha e usuario estão corretos
    if(isset($_SESSION["usuario"]) == "Marcell" && isset($_SESSION["senha"]) == "20135") 
    {
		//Sessão == True
        $_SESSION["user_login"] = true;
		//Enviando "usuario" para "principal.php"
        header("Location: principal.php");
    }else{
		//Sessão == False
        $_SESSION["user_login"] = false;
		//Enviando "senha" para "principal.php"
        header("Location: principal.php");
    }   
	//Marcell Gonçalves Fonseca 2ºDS A//
?> 

