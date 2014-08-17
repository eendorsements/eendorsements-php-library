<?php

require_once "../eEndorsementsAPIExchange.php";

$settings = array(
	'apiKey' => 'e91b551137ea834591282ad12780261b',
	'apiSecretKey' => '08b2af83f209b3a8d5bba2edf774b625'
);

$ee = new eEndorsementsAPIExchange($settings);

$username = "abcstaffing";

$result = $ee->makeRequest('http://eendorsements.com/api/endorsements/view/' . $username);

echo $result;