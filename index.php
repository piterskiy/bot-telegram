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
            		for($i=0;$i<=2;$i++){
    				echo $mass['orders'][$i]['fields'][0]['title'].': '.$mass['orders'][$i]['fields'][0]['description']."<br> ".$mass['orders'][$i]['date']."<br> ".$mass['orders'][$i]['fields'][1]['title'].': '.$mass['orders'][$i]['fields'][1]['description']."<br> ".$mass['orders'][$i]['fields'][2]['title'].': '.$mass['orders'][$i]['fields'][2]['description']."<br> ".$mass['orders'][$i]['fields'][3]['title'].': '.$mass['orders'][$i]['fields'][3]['description']."<br> ".'ID '.$mass['orders'][$i]['items'][0]['id']."<br> Наименование: ".$mass['orders'][$i]['items'][0]['title'].' '.$mass['orders'][$i]['items'][0]['quantity']."шт. <br> ".$mass['orders'][$i]['items'][0]['price'].' '.$mass['orders'][$i]['items'][0]['currency']."<br> ";
            			}

    	if($text == '/start'){
    		for($i=0;$i<=2;$i++){
    			for($k=0;$k<=2;$k++){
    			$messages =$mass['orders'][$i]['fields'][0]['title'].': '.$mass['orders'][$i]['fields'][0]['description']."\n ".$mass['orders'][$i]['date']."\n ".$mass['orders'][$i]['fields'][1]['title'].': '.$mass['orders'][$i]['fields'][1]['description']."\n ".$mass['orders'][$i]['fields'][2]['title'].': '.$mass['orders'][$i]['fields'][2]['description']."\n ".$mass['orders'][$i]['fields'][3]['title'].': '.$mass['orders'][$i]['fields'][3]['description']."\n ".'ID '.$mass['orders'][$i]['items'][0]['id']."\nНаименование: ".$mass['orders'][$i]['items'][$k]['title'].' '.$mass['orders'][$i]['items'][0]['quantity']."шт. \n ".$mass['orders'][$i]['items'][0]['price'].' '.$mass['orders'][$i]['items'][0]['currency'];
    		}
    			sendMessage($website, $chatId, $messages);
    		}
    	}

         function sendMessage($website, $chatId, $messages){
        file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".urlencode($messages));
       }