<?php


/*
$access_token = $_ENV["LINEBOT_ACCESS_TOKEN"];

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
*/


require_once('./LINEBotTiny.php');
$channelAccessToken = $_ENV["LINEBOT_ACCESS_TOKEN"];
$channelSecret = $_ENV["LINEBOT_CHANNEL_SECRET"];
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    /*
                    $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                              'type' => 'text',
                              'text' => $message['text']
                            ),
                            array(
                              'type' => 'text',
                              'text' => $message['text']
                            )
                          )
                    ));
                    */
                    $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'template', // 訊息類型 (模板)
                                'altText' => 'Example buttons template', // 替代文字
                                'template' => array(
                                    'type' => 'carousel', // 類型 (旋轉木馬)
                                    'columns' => array(
                                        array(
                                            'thumbnailImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 圖片網址 <不一定需要>
                                            'title' => 'Example Menu 1', // 標題 1 <不一定需要>
                                            'text' => 'Description 1', // 文字 1
                                            'actions' => array(
                                                array(
                                                    'type' => 'postback', // 類型 (回傳)
                                                    'label' => 'postback 1', // 標籤 1
                                                    'data' => 'action=buy&itemid=123' // 資料
                                                ),
                                                array(
                                                    'type' => 'message', // 類型 (訊息)
                                                    'label' => 'Message example 1', // 標籤 2
                                                    'text' => 'Message example 1' // 用戶發送文字
                                                ),
                                                array(
                                                    'type' => 'uri', // 類型 (連結)
                                                    'label' => 'Uri example 1', // 標籤 3
                                                    'uri' => 'https://github.com/GoneTone/line-example-bot-php' // 連結網址
                                                )
                                            )
                                        ),
                                        array(
                                            'thumbnailImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 圖片網址 <不一定需要>
                                            'title' => 'Example Menu 2', // 標題 2 <不一定需要>
                                            'text' => 'Description 2', // 文字 2
                                            'actions' => array(
                                                array(
                                                    'type' => 'postback', // 類型 (回傳)
                                                    'label' => 'postback 2', // 標籤 1
                                                    'data' => 'action=buy&itemid=123' // 資料
                                                ),
                                                array(
                                                    'type' => 'message', // 類型 (訊息)
                                                    'label' => 'Message example 2', // 標籤 2
                                                    'text' => 'Message example 2' // 用戶發送文字
                                                ),
                                                array(
                                                    'type' => 'uri', // 類型 (連結)
                                                    'label' => 'Uri example 2', // 標籤 3
                                                    'uri' => 'https://github.com/GoneTone/line-example-bot-php' // 連結網址
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ));


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


echo "OK";

?>
