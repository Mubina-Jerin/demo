
<?php
class Request{
	
	public $url;
	public function __construct(){

		//var_dump($_SERVER['PHP_SELF']);
		//echo "<br>";
		$this->url=$_SERVER['PHP_SELF'];
	//$this->url= $_SERVER["Request_URI"];
	
	}
}

?>