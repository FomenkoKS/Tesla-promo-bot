<?php

include("Telegram.php");
require_once('service.php');

$telegram = new Telegram(BOT_ID);
$service = new Service($telegram);

$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$message = $telegram->Message();

if(in_array($message['from']['id'],SU)){
    if($text=="/debug"){
        $telegram->sendMessage(['chat_id'=>$message['from']['id'],'text'=>'Очередь очищена']);
    }
}
