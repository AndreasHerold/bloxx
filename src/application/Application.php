<?php
//Bootstrapper
namespace Bloxx\Application;

class Application 
{
    /**
     *
     */
	public function run()
	{
		$request = new Request();
		//$response = new Response();
		//$router = new Router();
        $view = new View();
        $dispachter = new Dispatcher($request, $view);


        return $dispachter->dispatch();
	}
}