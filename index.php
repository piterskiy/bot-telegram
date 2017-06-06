<?php

    set_time_limit(0);


    $botToken = "257002841:AAF73D-lPHhpnqru8jp-R9qPq5FPM1KSOx8";
    $website = "https://api.telegram.org/bot".$botToken;
    
    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];
    $chatId = $message["chat"]["id"];
    $text = $message["text"];
switch ($text ) {
	case 'hi':
		$messages = 'Привет';
		sendMessage($website, $chatId, $messages);
		break;
}
     
         function sendMessage($website, $chatId, $message){
        file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messages);
       }    
?>