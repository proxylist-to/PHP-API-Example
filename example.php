<?php

//API KEY FROM https://proxylist.to/dashboard/
$API_KEY = "PROXY-xxxxxxxx-LIST-xxxxxxxx-TO";

//HTTP PROXY LIST
$http = file_get_contents("https://api.proxylist.to/http?key={$API_KEY}");

//SOCKS4 PROXY LIST
$socks4 = file_get_contents("https://api.proxylist.to/socks4?key={$API_KEY}");

//SOCKS5 PROXY LIST
$socks5 = file_get_contents("https://api.proxylist.to/socks5?key={$API_KEY}");

//FOR AN ARRAY, SPLIT BY NEWLINE
$httpArray = explode("\n", $http);

?>
