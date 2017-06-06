<?php

    set_time_limit(0);

    // Установка токена
    $botToken = "257002841:AAF73D-lPHhpnqru8jp-R9qPq5FPM1KSOx8";
    $website = "https://api.telegram.org/bot".$botToken;
    // Получаем запрос от Telegram 
    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];
    // Получаем внутренний номер чата Telegram и команду, введённую пользователем в   чате 
    $chatId = $message["chat"]["id"];
    $text = $message["text"];
    // Пример обработки команды
    if ($text == '/start') {
    	$json = file_get_contents("php://input");
    	$sid = $message["text"];
    	$token = $message["text"];
    	$url = "http://apideliverycity.ru//api/orders?sid=".$sid."&token=".$token;
    	$update = json_decode($json, TRUE);
        $welcomemessage = 'Введите токен';

       // Отправляем сформированное сообщение обратно в Telegram пользователю   
       file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$welcomemessage);    
    }    
?>