<?php

require_once('./LINEBotTiny.php');
$channelAccessToken = $_ENV["LINEBOT_ACCESS_TOKEN"];
$channelSecret = $_ENV["LINEBOT_CHANNEL_SECRET"];
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$to = "C1bf97c635541efd0d001ecbffd684625";

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
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0835.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=835'
                        )
                    ),
										array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0836.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=836'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0828.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=828'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0829.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=829'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0831.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=831'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0815.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=815'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171228/0816.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=816'
                        )
											),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171103/010.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Visit',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/'
                        )
                    )
                )
            )
        )
    )
));

echo "OK";

?>
