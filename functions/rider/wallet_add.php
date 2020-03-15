<?php 

global $api;
if(empty($api)) die();

//check fields
$api->required_fields(array("id","value"));

$where = array("provider_id"=>$api->params->id);

if(!$api->provider_wallet->exist($where)) $api->out( "",0,"Rider Not Found!" );

$wallet = $api->provider_wallet->get($where)[0];
$last_v = 0;
$current_v = $api->params->value;

if( $api->accounting_income->count() > 0 ){
	$income = $api->accounting_income->get($where)[0];
	$last_v = $income->current_value;
	$current_v = ( $income->current_value + $api->params->value );
}

$meta = (isset($api->params->meta)) ? $api->params->meta : "";

$api->accounting_income->create(array(
	"value" => $api->params->value,
	"last_value" => $last_v,
	"current_value" => $current_v,
	"meta" => $meta,
	"date" => date("Y-m-d H:i:s")
));

$add = array(
	"provider_id" => $api->params->id,
	"transaction_id" => $api->accounting_income->last() ,
	"transaction_alias" => "ACCOUNTING_CASH",
	"type" => "A" ,
	"amount" => $api->params->value,
	"open_balance" => $wallet->close_balance,
	"close_balance" => ( $wallet->close_balance + $api->params->value ),
	"payment_mode" => "OFFICE_CASH",
	"created_at" => date("Y-m-d H:i:s"),
	"updated_at" => date("Y-m-d H:i:s"),
);

$api->provider_wallet->create($add);

$api->out( "Added!" );



 ?>