<?php 

global $api;
if(empty($api)) die();

$providers = $api->providers->get();

$api->out( $providers->count() );


 ?>