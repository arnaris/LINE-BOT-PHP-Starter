<?php

require_once('./LINEBotTiny.php');
$channelAccessToken = $_ENV["LINEBOT_ACCESS_TOKEN"];
$channelSecret = $_ENV["LINEBOT_CHANNEL_SECRET"];
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$to = "";

if ($_POST["formSubmit"] == "yes") {

	if ($_POST['password'] == "SCBThinkTank") {

		if ($_POST['type'] == "real") {

			//$to = "C1bf97c635541efd0d001ecbffd684625";
			$to = "R9bf96e170c4d75c57390c1b21dc458c0";
			echo "Real message push sent";

		} else {

			$to = "R9bf96e170c4d75c57390c1b21dc458c0";
			echo "Test message push sent";
		}

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
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0927.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=927'
		                        )
		                    ),
												array(
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0933.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=933'
		                        )
												),
		                    array(
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0935.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=935'
		                        )
		                    ),
		                    array(
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0923.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=923'
		                        )
		                    ),
		                    array(
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0887.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=887'
		                        )
												),
		                    array(
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0913.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=913'
		                        )
												),
		                    array(
		                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0920.png',
		                        'action' => array(
		                              'type' => 'uri',
		                              'label' => 'Full article',
		                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=920'
		                        )
													),
													array(
			                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0905.png',
			                        'action' => array(
			                              'type' => 'uri',
			                              'label' => 'Full article',
			                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=905'
			                        )
														),
												array(
			                        'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/20180126/0891.png',
			                        'action' => array(
			                              'type' => 'uri',
			                              'label' => 'Full article',
			                              'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID=891'
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

	}
}

?>

<form action="" method="post">
	<input type="radio" name="type" value="test">Test<br>
  <input type="radio" name="type" value="real">Real<br>
  Password: <input type="text" name="password">
 	<input type="hidden" name="formSubmit" value="yes">
 	<input type="submit" value="Submit">
</form>
