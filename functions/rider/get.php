<?php 

global $api;
if(empty($api)) die();

//check fields
$api->required_fields(array("id"));

$where = array("id"=>$api->params->id);

if(!$api->providers->exist($where)) $api->out( "",0,"Rider Not Found!" );
$provider = $api->providers->get($where)[0];

$api->out( $provider );



 ?>