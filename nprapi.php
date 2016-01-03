<?php 
require_once('configuration.php');
define( 'NPR_API_URL', 'http://api.npr.org/' );
define( 'NPR_API_DEFAULT_ACTION', 'query' );
define( 'NPR_OUTPUT_FORMAT', 'JSON' );
define( 'NPR_FIELDS', 'all' );

class NprApi {
	
	public function get_stories() {
		$url = 'http://api.npr.org/query?id=1004&numResults=25&output=json&apiKey=' . NPR_API_KEY;
		$xmls = file_get_contents($url);
		return $xmls;
	}
}

$nprapi = new NprApi();
echo $nprapi->get_stories();


?>