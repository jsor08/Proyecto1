<?php
session_start();

/Simulación de una base de datso de usuarios
$users = [
    "Percy@dada.xd" => "1234"
];

$username = $_POST["userEmail"];
$password = $_POST["userPassworf"];
 
//Verificar las credenciales

if(isset($users[$userEmail]) && $users[$userEmail] === $userPassword) {
    // Iniciar sesión
    $_SESSION["userEmail"] = $userEmail;
    // Redigir a la página principal
    header("location: index.php");
    exit();
} else {
    // Credenciales incorrectas, redigirirá de vuelva al formulario de inicio
    header("location: login.html");
    exit();
}