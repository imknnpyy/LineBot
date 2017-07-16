<?php
$access_token = '/0tB8YcUCKmFC41YK7+acYvki0/0dd0I7BTtinOhx6XUOe7fpP7UxKWWv9zIrJvDLrU9TcMWPEIudv8VOAMGwkDKzxIG1RSlWCGmq4gOoYxv8bpXE4+F7XunN4n30NDIXtxj8ZrBgsI0X0pwLWJfSQdB04t89/1O/w1cDnyilFU=';

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