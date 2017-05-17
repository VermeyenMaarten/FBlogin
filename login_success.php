<?php

$code = $_GET['code'];

$access_code = file_get_contents('https://graph.facebook.com/v2.9/oauth/access_token?client_id=809797432512443&redirect_uri=http://syntra.dev/login_success.php/&client_secret=f4e5b60b9dcd59c8251038814270c9bd&code=' . $code);

$accessCode = (json_decode($access_code));

$access = $accessCode->access_token;


$inspect = file_get_contents('https://graph.facebook.com/debug_token?input_token=809797432512443|JQxPgmH06zdhDg9ywThgrUGDjAo&access_token=' . $access);

$find = file_get_contents('https://graph.facebook.com/me?fields=id,name,picture&access_token=' . $access);

$show = (json_decode($find));

$_SESSION['name'] = $show->name;
echo $show->name;
echo '<br>';
echo '<img src="'.$show->picture->data->url.'" />';
?>

