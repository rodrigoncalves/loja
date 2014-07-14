<?php 
include "logica-usuario.php";

logout();
$_SESSION["success"] = "Usuário deslogado.";
header("Location: index.php");
die();