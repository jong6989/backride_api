<?php 
Class settings{
	public static $dbHost = "localhost";
	public static $dbUser = "phpmyadmin";
	public static $dbPass = "12341234vdp";
	public static $databaseInstall = array(

			// backride palawan 
			array("phpmyadmin","admin_wallet",""),
			array("phpmyadmin","providers",""),
			array("phpmyadmin","provider_profiles",""),
			array("phpmyadmin","provider_wallet",""),
			array("phpmyadmin","user_wallet",""),
			array("phpmyadmin","wallet_passbooks",""),
			array("phpmyadmin","users",""),

			array("phpmyadmin","accounting_income","value INT(11) default 0,last_value INT(11) default 0,current_value INT(11) default 0 ,data TEXT,meta TEXT ,date VARCHAR(64) NOT NULL"),

				
		);

	public static $initialData = array(
			// array( "users", array( "user_key"=>"SHA256:1000:NqGykZzQN3irawfpt8RzIeiVLpLgJxRa:sz8+YAHZ2PKOQweniipasHSkY+KxA/py","data"=>"{}", "id_number"=>"00","status"=>1, "user_level"=>99 ) ),
		);
}
 ?>