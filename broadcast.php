<?php

require_once('./LINEBotTiny.php');
$channelAccessToken = $_ENV["LINEBOT_ACCESS_TOKEN"];
$channelSecret = $_ENV["LINEBOT_CHANNEL_SECRET"];
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$to = "U212277b8642589de08cd7861d4f456d6";

$client->pushMessage(array(
		'to' => $to,
    'messages' => array(
        array(
            'type' => 'template',
            'altText' => 'Weekly market intelligence',
            'template' => array(
                'type' => 'image_carousel',
                'columns' => array(
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/001.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=623'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/002.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=622'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/003.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=620'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/004.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=632'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/005.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=614'
                        )
                    )
                )
            )
        )
    )
));

echo "OK";

?>
