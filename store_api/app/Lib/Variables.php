<?php
define('APP_STATUS', 'live');
define('APP_NAME', 'Backride Store');
define('API_KEY', '156c4675-9608-4591-b2ec-0000');
define('TEST_MOBILE_NO', '+639486601717'); //e.g +13472720544 // no should be with the country code
define('BASE_URL', 'http://63.250.37.132/backride_api/store_api/');
date_default_timezone_set('Asia/Manila');


define('UPLOADS_FOLDER_URI', 'app/webroot/uploads');
define('VERIFICATION_DOCUMENTS', 'verification_documents');
define('PREP_REGISTRATION_SUBJECT', 'Confirm your Backride Store Registration');
define('VERIFICATION_PHONENO_MESSAGE', 'Your verification code is');

//DATABASE
define('DATABASE_USER', 'phpmyadmin');
define('DATABASE_PASSWORD', '12341234vdp');
define('DATABASE_NAME', 'phpmyadmin');

//PostMark
define('POSTMARK_SERVER_API_TOKEN', 'POSTMARK SERVER API TOKON KEY HERE');
define('SUPPORT_EMAIL', 'EMAIL ADDRESS FROM WHERE YOU WANT TO SEND EMAIL HERE');

//Google Maps
define('GOOGLE_MAPS_KEY', 'GOOGLE MAP API KEY HERE');

//Twilio
define('TWILIO_ACCOUNTSID', 'TWILIO ACCOUNT ID HERE');
define('TWILIO_AUTHTOKEN', 'TWILIO AUTH TOKON HERE');
define('TWILIO_NUMBER', 'TWILIO PURCHASED NUMBER HERE');

//Firebase
define('FIREBASE_PUSH_NOTIFICATION_KEY', 'FIREBASE PUSH NOTIFICATION HERE');

define('FIREBASE_URL', 'FIREBASE REAL TIME DATABASE URL HERE');//https://foodies-abcd.firebaseio.com/

//STRIPE
define('STRIPE_API_KEY','STRIPE API KEY HERE');
define('STRIPE_CURRENCY', 'php');





//Testing


define('DEBUG_VALUE', 2); //0 means no errors will display on the screen. 2 means all the errors






?>


