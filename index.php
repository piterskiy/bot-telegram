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
	$url = "http://apideliverycity.ru/api/orders?sid=".$sid."&token=".$token.'&limit=6';
    	$content = file_get_contents($url);
        $mass = json_decode($content, TRUE);
            		for($i=0;$i<=6;$i++){
            			for ($k=0; $k <=6 ; $k++) { 
            				foreach ($variable as $key => $value) {

    				echo $mass['orders'][$i][$key][$k][$value];
            				}
            			}
    		}
    	if($text == '/start'){
    			$messages =$mass['orders']['0']['fields'][0]['title'].': '.$mass['orders']['0']['fields'][0]['description']."\n ".$mass['orders']['0']['date']."\n ".$mass['orders']['0']['fields'][1]['title'].': '.$mass['orders']['0']['fields'][1]['description']."\n ".$mass['orders']['0']['fields'][2]['title'].': '.$mass['orders']['0']['fields'][2]['description']."\n ".$mass['orders']['0']['fields'][3]['title'].': '.$mass['orders']['0']['fields'][3]['description']."\n ".'ID '.$mass['orders']['0']['items'][0]['id']."\nНаименование: ".$mass['orders']['0']['items'][0]['title'].' '.$mass['orders']['0']['items'][0]['quantity']."шт. \n ".$mass['orders']['0']['items'][0]['price'].' '.$mass['orders']['0']['items'][0]['currency'];
    			sendMessage($website, $chatId, $messages);


    	}

         function sendMessage($website, $chatId, $messages){
        file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".urlencode($messages));
       }

       function apiDelivery($id, $token){
       	$url = "http://apideliverycity.ru/api/orders?sid=".$id."&token=".$token;
    	$content = file_get_contents($url);
        $mass = json_decode($content, TRUE);
        $messages = var_dump($mass);
        sendMessage($website, $chatId, $messages);
       }    
