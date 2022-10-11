<?php
include 'savedata.php';
function getapi($word) {
$json = file_get_contents('http://api.duckduckgo.com/?q='.$word.'&format=json&pretty=1');
$data = json_decode($json, true);
subcrawl($data['AbstractURL']);
}

