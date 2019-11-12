<?php
session_start();

$usuariosJson = file_get_contents("../bdd/json/usuarios.json");
$usuariosPHP = json_decode($usuariosJson, true);

$contra = "Contraseña";
$errorContra = "";

if($_POST){
foreach($usuariosPHP as $usuario){
    if($usuario["nombre_usuario"] == $_POST["usuario-login"]){
        $usuarioLogueado = $usuario;
        break;
    }else{
        $perUsuario = $_POST["nombre_usuario"];
        var_dump($perUsuario);
        header("Location:../php/login.php");
        break;
    }
    } if($usuarioLogueado["contraseña_usuario"] != $_POST["contrasenia-login"]){
        $errorContra = "La contraseña ingresada es incorrecta";
        $contra = "";
        header("Location:../php/login.php");
    } 
    if($usuarioLogueado["nombre_usuario"] == $_POST["usuario-login"] && $usuarioLogueado["contraseña_usuario"] == $_POST["contrasenia-login"]){
        header("Location:../php/indexLogueado.php");
    }
} 
?>