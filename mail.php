<?php 
header('Content-Type: application/json');
$name = $_POST['name']; 
$tel = $_POST['tel'];
$street = $_POST['street'];
$house = $_POST['house']; 
$block = $_POST['block'];
$room = $_POST['room'];
$floor = $_POST['floor']; 
$textarea = $_POST['textarea'];
$payment = $_POST['payment'];
$callback = $_POST['callback'];
$message = "Сообщение от пользователя: $name, $tel, $street, $house, $block, $room, $floor, $textarea, $payment, $callback";
// функция, которая отправляет наше письмо. 
$result = mail('starluk@mail.ru', 'Тема письма', $message); 
echo json_encode(array('status' => $result));
?>