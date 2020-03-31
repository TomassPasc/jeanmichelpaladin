<?php
require('src/models/Personage.php');

header('Content-Type: application/json;charset=utf-8');

$req_method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];
if($path === "/api/hero" && $req_method === "GET") {
    $hero = new Personage('Jean-Michel', 100);
    $response = array("info" => $hero->infos());
    
    echo json_encode($response);
}


?>