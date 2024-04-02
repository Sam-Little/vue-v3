<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');

if ($_SERVER['REQUEST_METHOD']=== 'OPTIONS') {
    header('HTTP/1.1 204 No Content');
    die();
}

$data = json_decode(file_get_contents('php://input'), true);

if (isset ($data ['message'])) {
    echo json_encode(['status'=> 'success', 'message'=>'Message received: ' . $data['message']]);
} else {
    echo json_encode(['status'=> 'error', 'message'=>'No Message received']);
}
