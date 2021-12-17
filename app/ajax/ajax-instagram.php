<?php 
$file = glob("public/images/instagram/*.json");
$file = $file[count($file)-1];
$filename= explode('/', $file);
$filename = end($filename);
$filename = explode('.', $filename)[0];

if (intval($filename)+60*60*24 < time()) {
unlink($file);
$response = file_get_contents('https://www.instagram.com/ldk_karisma/?__a=1');
$insta = json_decode($response);
$instagram = $insta->graphql->user->edge_owner_to_timeline_media->edges;

$fp = fopen('public/images/instagram/'.time().'.json', 'w');
fwrite($fp, json_encode($instagram));
fclose($fp);
}