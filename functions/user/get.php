<?php 

global $api;
if(empty($api)) die();

//check fields
$api->required_fields(array("id"));

$where = array("id"=>$api->params->id);

if(!$api->users->exist($where)) $api->out( "",0,"Passenger Not Found!" );
$user = $api->users->get($where)[0];

$api->out( $user );



 ?>