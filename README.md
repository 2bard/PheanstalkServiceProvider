#Pheanstalk Service Provider for Silex 

This is a service provider for the Silex PHP Microframework, it provides access to Pheanstalk.

##Installation

1. Add to your `composer.json` file

	``` json
	
		"require": {
			"lewisbaker/silex-pheanstalk": "dev-master"
		}
	
	```

2. Install the dependencies

	php composer.phar update
	

## Registering

	<?php
	
	$app->register(new LewisB\PheanstalkServiceProvider\PheanstalkServiceProvider(), array(
	    'pheanstalk.server' => '10.0.0.1'
	));


Licensed under the MIT license.