<?php

echo "I am a bot";

$access_token = 'DaWbNHyZhyoDN0lG81YBgkqGq5wzxLcSQLs3xOzZUld0S36b1JjtONYgY8gCmvIY8AhQomibXW++9EaXj9MAvf7QX0AO1uKgUsOcn/1YpiNqNYSjLm75YYXDKnx5kqtTKwmCYfR/PhIaCFPiWS/M0AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
