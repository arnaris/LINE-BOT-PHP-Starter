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
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0867.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=867'
                        )
                    ),
										array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0861.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=861'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0866.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=866'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0855.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=855'
                        )
                    ),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0856.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=856'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0847.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=847'
                        )
										),
                    array(
                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0848.png',
                        'action' => array(
                              'type' => 'uri',
                              'label' => 'Full article',
                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=848'
                        )
											),
											array(
	                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0845.png',
	                        'action' => array(
	                              'type' => 'uri',
	                              'label' => 'Full article',
	                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=845'
	                        )
												),
										array(
	                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180110/0865.png',
	                        'action' => array(
	                              'type' => 'uri',
	                              'label' => 'Full article',
	                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=865'
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
