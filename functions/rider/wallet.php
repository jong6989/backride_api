<?php 

global $api;
if(empty($api)) die();

//check fields
$api->required_fields(array("id"));

$where = array("provider_id"=>$api->params->id);

if(!$api->provider_wallet->exist($where)) $api->out( "",0,"Rider Not Found!" );
$wallet = $api->provider_wallet->get($where)[0];

$api->out( $wallet );



 ?>