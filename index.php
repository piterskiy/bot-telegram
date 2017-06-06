<?php

    set_time_limit(0);

    // Установка токена
    // $botToken = "257002841:AAF73D-lPHhpnqru8jp-R9qPq5FPM1KSOx8";
    // $website = "https://api.telegram.org/bot".$botToken;
    // // Получаем запрос от Telegram 
    // $content = file_get_contents("php://input");
    // $update = json_decode($content, TRUE);
    // $message = $update["message"];
    // // Получаем внутренний номер чата Telegram и команду, введённую пользователем в   чате 
    // $chatId = $message["chat"]["id"];
    // $text = $message["text"];
    // // Пример обработки команды
 
    	/*$url = "http://apideliverycity.ru//api/orders?sid=".$sid."&token=".$token;*/
    	$url = "http://apideliverycity.ru/api/orders?sid=hfgjixbl&token=cxUUe9jdFLALvhZKa6niBC9UFvc5BSQRnDNxi9Ex";
    	$content = file_get_contents("http://apideliverycity.ru/api/orders?sid=hfgjixbl&token=cxUUe9jdFLALvhZKa6niBC9UFvc5BSQRnDNxi9Ex");
        $mass = json_decode($content, TRUE);

        foreach ($mass as $key => $value) {
    // $arr[3] будет перезаписываться значениями $arr при каждой итерации цикла
    echo "{$key} => {$value} ";
    print_r($arr);
}
       // Отправляем сформированное сообщение обратно в Telegram пользователю   
    	// sendMessage($website, $chatId, $message);
        // function sendMessage($website, $chatId, $message){
       // file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messages);
       // }    
?>