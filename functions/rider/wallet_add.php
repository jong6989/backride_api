<?php 

global $api;
if(empty($api)) die();

//check fields
$api->required_fields(array("id","value"));

$where = array("provider_id"=>$api->params->id);

if(!$api->provider_wallet->exist($where)) $api->out( "",0,"Rider Not Found!" );

$wallet = $api->provider_wallet->get($where)[0];
$income = $api->accounting_income->get($where)[0];

$meta = ($api->params->meta) ? $api->params->meta : "";

$api->accounting_income->add(array(
	"value" => $api->params->value,
	"last_value" => $income->current_value,
	"current_value" => ( $income->current_value + $api->params->value ),
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

$api->out( "Added!" );



 ?>