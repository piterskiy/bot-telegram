<?php
    set_time_limit(0);

    $botToken = "257002841:AAF73D-lPHhpnqru8jp-R9qPq5FPM1KSOx8";
    $website = "https://api.telegram.org/bot".$botToken;
    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];
    $chatId = $message["chat"]["id"];
    $text = $message["text"];

$sid ='hfgjixbl';
$token = 'cxUUe9jdFLALvhZKa6niBC9UFvc5BSQRnDNxi9Ex';
	$url = "http://apideliverycity.ru/api/orders?sid=".$sid."&token=".$token;
    	$content = file_get_contents($url);
        $mass = json_decode($content, TRUE);
var_dump($mass->orders);
    	if($text == '/start'){

    			$messages =$mass;
    			sendMessage($website, $chatId, $messages);


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
