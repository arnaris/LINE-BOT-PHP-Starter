<div style="margin: 20px; border: dashed 2px #ccc; width: 300px;">
	<div style="margin: 15px;"><B>INSTRUCTION:</B> Fill in the news ID (max 8). Choose type of message. Fill the password. Click send.</div>
	<form action="" method="post">
    <div style="margin: 15px;">News ID:
        <div style="margin: 3px;">1) <input type="text" name="1" value="<? echo $_POST["1"]; ?>"></div>
        <div style="margin: 3px;">2) <input type="text" name="2" value="<? echo $_POST["2"]; ?>"></div>
        <div style="margin: 3px;">3) <input type="text" name="3" value="<? echo $_POST["3"]; ?>"></div>
        <div style="margin: 3px;">4) <input type="text" name="4" value="<? echo $_POST["4"]; ?>"></div>
        <div style="margin: 3px;">5) <input type="text" name="5" value="<? echo $_POST["5"]; ?>"></div>
        <div style="margin: 3px;">6) <input type="text" name="6" value="<? echo $_POST["6"]; ?>"></div>
        <div style="margin: 3px;">7) <input type="text" name="7" value="<? echo $_POST["7"]; ?>"></div>
        <div style="margin: 3px;">8) <input type="text" name="8" value="<? echo $_POST["8"]; ?>"></div>
    </div>
		<div style="margin: 15px;">Type of message:
			<input type="radio" name="type" value="test" checked="checked">Test |
	  	<input type="radio" name="type" value="real">Real
		</div>
		<div style="margin: 15px;">Password: <input type="text" name="password"></div>
		<div style="margin: 15px;"><input type="submit" value="Submit"></div>
		<input type="hidden" name="formSubmit" value="yes">
	</form>
</div>


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
			echo "Status: Real message sent";

		} else {

			$to = "R9bf96e170c4d75c57390c1b21dc458c0";
			echo "Status: Test message sent";
		}


		$columns = array();

		for($i=1;$i<9;$i++) {
			if ($_POST[$i] != "") {
				$temp = array(
									'imageUrl' => 'https://s3-ap-southeast-1.amazonaws.com/thinktank-assets/NewsPic/'.$_POST[$i].'.png',
									'action' => array(
												'type' => 'uri',
												'label' => 'Full article',
												'uri' => 'https://scbcorp.sharepoint.com/sites/scbthinktank/SitePages/article.aspx?NewListID='.ltrim($_POST[$i],"0")
										));
				array_push($columns,$temp);
			}
		}

		echo '<pre>'; print_r($columns); echo '</pre>';


		/*

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

		*/

	} else {

		echo "Status: wrong password";

	}
}

?>
