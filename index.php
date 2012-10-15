<?php

	// Include Autoload
	require_once('src/Core/Autoload/Autoload.php');
	
	// Register Autoloading
	$autoload = new Autoload();
	$autoload->addLibrary('src/', 'Core');
	$autoload->register();

	// Play around with HTTP Request and Response objects
	
	$request = new \Core\Http\Request();
	
	// Set a cookie
	$request->cookie->setCookie('cookie', 'testing');

	// Start and set session
	$request->session->start();
	$request->session->set('session', 'testing');
	
	// Return HTTP Request Method / Verb
	echo "Method: " . $request->method() . "<br />";
	
	// Return HTTP absolute URI
	echo "Absolute URI: " . $request->absoluteUri(). "<br />";
	
	// Get Response object
	$response = new \Core\Http\Response();
	
	// Send custom 404 message
	$response->setStatusCode(404);
	$response->setContent('Page not found!');
	$response->send();

?>