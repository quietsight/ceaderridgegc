<?php
/**
*
*	Settings
*	
*
*
*/

// Set the base url of the site
define('BASE_URL','http://cedarridgegc.net');
// Set if the site is dev or production
define('IS_PRODUCTION',true);
// Set the Page title
define('TITLE',"Cedar Ridge");

// Database setup
	// Development
	define('MY_SQL_SERVER_D','mysql.quietsight.com');
	define('MY_SQL_USER_D','quietsight_root');
	define('MY_SQL_PASS_D', 'r00tk1T');
	define('MY_SQL_DB_D', '_DATABASE_');
	// Production
	define('MY_SQL_SERVER_P','mysql.quietsight.com');
	define('MY_SQL_USER_P','quietsight_root');
	define('MY_SQL_PASS_P', 'r00tk1T');
	define('MY_SQL_DB_P', '_DATABASE_');

/**
*
*	Functions
*	
*
*
*/
function init(){
	set_exception_handler('exception_handler');
	return(true);
}
function get_file($file){
	if(file_exists($file)){
		include($file);
	}
}
function css($c=false){
	echo("<!-- CSS Files -->\n");
	echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"http://files.quietsight.com/css/skeliton.css\" />\n");
	if($c){
		for($i = 0; $i<count($c); $i++){
			echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"". BASE_URL ."/". $c[$i] ."\" />\n");
		}
	}
	echo("\n<!-- End CSS -->\n\n");
}
function js($j=false){
	echo("<!-- JS Files -->\n");
	echo("<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>\n");
	echo("<script type=\"text/javascript\" src=\"http://files.quietsight.com/js/tools.js\"></script>\n");
	echo("<script type=\"text/javascript\" src=\"http://files.quietsight.com/js/boot.js\"></script>\n");
	if($j){
		for($i = 0; $i<count($j); $i++){
			echo("<script type=\"text/javascript\" src=\"". BASE_URL ."/". $j[$i] ."\"></script>\n");
		}
	}
	echo("\n<!-- End JS -->\n\n");
}
function title($a=false){
	if(!$a){
		echo("<title>" . TITLE . "</title>\n");
		return;
	}
	echo("<title>" . TITLE . " | " . $a . "</title>\n");
}
function __autoload($class){
	include_once($class . ".php");
}
function qs_var_dump($var){
	echo("<pre><code>\n");
	var_dump($var);
	echo("\n</code></pre>");
}
function exception_handler($exception) {
		echo("<pre><code>Uncaught exception: [" . $exception->getMessage() . "]</code></pre>\n");
}
function newID(){
	$id = new QSID;
	return $id->new_id(1);
}
?>