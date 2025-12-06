<?php
session_start();

require_once "./config.php";

$_SESSION["key"] = $_POST["key"];

echo json_encode(array('key' => $_SESSION["key"], 'error'=>true, 'cats'=>"https://http.cat/404"));
// echo json_encode(array('redirect' => "https://bubblez.app/"))
?>