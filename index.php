<?php
echo "Hello LINE BOT!!!";
echo "<BR>";
echo $_ENV["LINEBOT_ACCESS_TOKEN"];
echo "<BR>";
echo $_ENV["LINEBOT_CHANNEL_SECRET"];

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["LINEBOT_ACCESS_TOKEN"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["LINEBOT_CHANNEL_SECRET"]]);
$response = $bot->replyText('<reply token>', 'hello!');

?>
