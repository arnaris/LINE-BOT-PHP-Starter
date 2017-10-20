<?php

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["LINEBOT_ACCESS_TOKEN"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["LINEBOT_CHANNEL_SECRET"]]);

$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
$events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);

try {
  $events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
} catch(\LINE\LINEBot\Exception\InvalidSignatureException $e) {
  eco "error";
} catch(\LINE\LINEBot\Exception\UnknownEventTypeException $e) {
  eco "error";
} catch(\LINE\LINEBot\Exception\UnknownMessageTypeException $e) {
  eco "error";
} catch(\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
  eco "error";
}

foreach ($events as $event) {

  $outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Hello from Think Tank Bot");
  $bot->replyMessage($event->getReplyToken(), $outputText);

}

echo $_ENV["LINEBOT_ACCESS_TOKEN"];
echo $_ENV["LINEBOT_CHANNEL_SECRET"];

?>
