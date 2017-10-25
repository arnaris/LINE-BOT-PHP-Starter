<?php

require_once('./LINEBotTiny.php');
$channelAccessToken = $_ENV["LINEBOT_ACCESS_TOKEN"];
$channelSecret = $_ENV["LINEBOT_CHANNEL_SECRET"];
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userID = "";
$groupID = "";
$roomID = "";
foreach ($client->parseEvents() as $event) {
    $userID = $event['source']['userId'];
    $groupID = $event['source']['groupId'];
    $roomID = $event['source']['roomId'];
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':

                    break;
                default:
                    error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};

error_log('ID: ' . $userID . ' | ' . $groupID . ' | ' . $roomID);
echo "OK";

?>
