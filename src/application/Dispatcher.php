<?php
//Bootstrapper
namespace Bloxx\Application;

class Dispatcher
{
    const CONTROLLER_KEY = 'Controller';
    const ACTION_KEY = 'Action';
    const CONTROLLER_NAMESPACE = '\Bloxx\Controller\\';
    /**
     * @var \Bloxx\Application\Request
     */
    protected $request;

    /**
     * Dispatcher constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function dispatch()
    {
        $controllerName = $this->request->getParam('controller', 'index');
        $controllerName = self::CONTROLLER_NAMESPACE . ucfirst($controllerName);
        $controller = new $controllerName($this->request);

        $actionName = $this->request->getParam('action', 'index');
        $action = ucfirst($actionName) . self::ACTION_KEY;
        $result = $controller->$action();
    }
}