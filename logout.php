<?php 
require_once "logica-usuario.php";

logout();
$_SESSION["success"] = "Usuário deslogado.";
header("Location: index.php");
die();