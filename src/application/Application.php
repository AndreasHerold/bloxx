<?php
//Bootstrapper
namespace Bloxx\Application;

use Bloxx\Application\Request;
use Bloxx\Application\Response;
use Bloxx\Application\Router;
use Bloxx\Application\Dispatcher;

class Application 
{
	public function run()
	{
		$request = new Request();
		$response = new Response();
		//$router = new Router();
		$dispachter = new Dispatcher($request);

        $dispachter->dispatch();
	}
}