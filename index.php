<?php
    set_time_limit(0);

    $botToken = "257002841:AAF73D-lPHhpnqru8jp-R9qPq5FPM1KSOx8";
    $website = "https://api.telegram.org/bot".$botToken;
    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];
    $chatId = $message["chat"]["id"];
    $text = $message["text"];


    	if($text == '/start'){

    			$messages ='Введите Sid за тем токен';
    			sendMessage($website, $chatId, $messages);
    			$content = file_get_contents("php://input");
    			 $id = $message["text"];

    	}

         function sendMessage($website, $chatId, $messages){
        file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messages);
       }

       function apiDelivery($id, $token){
       	$url = "http://apideliverycity.ru/api/orders?sid=".$id."&token=".$token;
    	$content = file_get_contents($url);
        $mass = json_decode($content, TRUE);
        $messages = var_dump($mass);
        sendMessage($website, $chatId, $messages);
       }    
