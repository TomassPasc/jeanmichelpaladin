<?php
require('src/models/Personage.php');

header('Content-Type: application/json;charset=utf-8');


$req_method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//methode POST


if($path === "/api/hero" && $req_method === "GET") {
    $hero = new Personage('Jean-Michel', 100);
    $response = array("info" => $hero->infos());
    
    echo json_encode($response);
}

//methode POST


if($path === "/api/hero/create" && $req_method === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $hero = new Personage($data['name'],$data['hp']);
    $response = array("info" => $hero->infos());
    
    echo json_encode($response);

} 

?>