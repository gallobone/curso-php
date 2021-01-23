<?php


session_start();
$login = $_SESSION["login"];
$id_usuario = $_SESSION["id_usuario"];

session_unset();
session_destroy();

header("location: ../login.php?login=no_session");



