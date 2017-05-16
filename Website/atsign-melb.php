<!-- 
TEAM 18
YAO PAN
777241
MIN-YING CHEN
779101
JINGFENG ZHANG
755121
SIYU FENG
745399
LIANYU ZENG
733863
 -->
<?php
$couch_dsn = "http://115.146.94.24:5984/";
$couch_db = "followers";
require_once "resource/couch.php";
require_once "resource/couchClient.php";
require_once "resource/couchDocument.php";
$client = new couchClient ( $couch_dsn, $couch_db );

try {
	$data = $client->group_level ( 1 )->getView ( 'count', 'atsign_melbourne' );
} catch ( Exception $e ) {
	if ($e->code () == 404) {
		echo "Document not found\n";
	} else {
		echo "Error: " . $e->getMessage () . " (errcode=" . $e->getCode () . "\n";
	}
	exit ( 1 );
}
$temp = $data->rows;

usort ( $temp, function ($a, $b) { // Sort the array using a user defined function
	return $a->value > $b->value ? - 1 : 1; // Compare the scores
} );

$arr2 = json_encode ($temp);

echo "getProfileMElb($arr2)";





?>