<?php

require_once('./LINEBotTiny.php');
$channelAccessToken = $_ENV["LINEBOT_ACCESS_TOKEN"];
$channelSecret = $_ENV["LINEBOT_CHANNEL_SECRET"];
$client = new LINEBotTiny($channelAccessToken, $channelSecret);

$userID = "R9bf96e170c4d75c57390c1b21dc458c0";

$res = $bot->getProfile($userID);
if ($res->isSucceeded()) {
    $profile = $res->getJSONDecodedBody();
    $displayName = $profile['displayName'];
    $statusMessage = $profile['statusMessage'];
    $pictureUrl = $profile['pictureUrl'];

    echo $displayName . "<BR>";
    echo $statusMessage . "<BR>";
    echo "<img src=" . $pictureUrl .">";
}


?>
