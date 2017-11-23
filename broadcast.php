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
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00736.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=736'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00737.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=737'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00726.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=726'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00717.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=717'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00725.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=725'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00735.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=735'
                        )
											),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00728.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=728'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171123/00724.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=724'
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
