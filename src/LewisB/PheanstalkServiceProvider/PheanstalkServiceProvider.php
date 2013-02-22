<?php
namespace LewisB\PheanstalkServiceProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class PheanstalkServiceProvider implements ServiceProviderInterface
{
	private $defaultServer = "127.0.0.1";
    
    public function register(Application $app)
    {
        $app['pheanstalk'] = $app->share(function ($app) {    
		   $server = isset($app['pheanstalk.server']) ? $app['pheanstalk.server'] : $this->defaultServer;
		   $pheanstalk = new \Pheanstalk_Pheanstalk((string)$server);
           return $pheanstalk;
        });
        
    }

    public function boot(Application $app)
    {
    	
    }
}