<?php

$botToken = "221133654:AAFM8xbHjhIn88KcUk79iwCZc8-FVw3gfJw";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

$chat_id = $updateArray["result"][0]["message"]["chat"]["id"];
git
file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=test");