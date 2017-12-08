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
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00790.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=790'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00787.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=787'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00786.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=786'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00782.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=782'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00781.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=781'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00774.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=774'
                        )
											),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00766.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=766'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00748.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=748'
                        )
										),
										array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20171208/00747.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=747'
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
