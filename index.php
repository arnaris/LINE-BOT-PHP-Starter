<?php

/*
echo $_ENV["LINEBOT_ACCESS_TOKEN"];
echo $_ENV["LINEBOT_CHANNEL_SECRET"];
*/

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["LINEBOT_ACCESS_TOKEN"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["LINEBOT_CHANNEL_SECRET"]]);

$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
$events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);

foreach ($events as $event) {

  $outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Hello from Think Tank Bot");
  $bot->replyMessage($event->getReplyToken(), $outputText);

}
?>
