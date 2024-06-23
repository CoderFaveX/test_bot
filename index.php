<?php
$path = "https://api.telegram.org/bot6905825214:AAEOuNYP5bXnX6cFMCVIr4AQAlGWiMs8N-I";
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
if (strpos($message, "/testing") === 0) {
    $name = substr($message, 9);
    file_get_contents($path . "/sendmessage?chat_id=" . $chatId . "&text=Here's your name:  " . $name);
}