<?php
define( 'ROOT_PATH', dirname( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR );
define( 'SRC_PATH', ROOT_PATH . 'src'  . DIRECTORY_SEPARATOR );
define( 'APPLICATION_PATH', SRC_PATH . 'application'  . DIRECTORY_SEPARATOR );
define( 'CONTROLLER_PATH', ROOT_PATH . 'controllers'  . DIRECTORY_SEPARATOR  );
define( 'VIEW_PATH', ROOT_PATH . 'views'  . DIRECTORY_SEPARATOR  );

require_once APPLICATION_PATH . 'Autoloader.php';

$autoloader = new Autoloader();
$autoloader->register();

try {
	$application = new Bloxx\Application\Application();
	$application->run();	
} catch (Exception $e) {
	echo "UUpppps. Hier ist wohl ein Fehler aufgetreten.";
}
