<?php
namespace LewisB\PheanstalkServiceProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class PheanstalkServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['pheanstalk'] = $app->share(function ($app) {
		   $server = isset($app['pheanstalk.server']) ? $app['pheanstalk.server'] : "127.0.0.1";
           return new \Pheanstalk\Pheanstalk((string)$server);
        });

    }

    public function boot(Application $app)
    {

    }
}