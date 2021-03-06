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
     * @var \Bloxx\Application\View
     */
    protected $view;

    /**
     * Dispatcher constructor.
     * @param Request $request
     * @param View $view
     */
    public function __construct(Request $request, View $view)
    {
        $this->request = $request;
        $this->view = $view;
    }

    /**
     * @return string
     */
    public function dispatch()
    {
        $controllerName = $this->request->getParam('controller', 'index');
        $controllerClass = self::CONTROLLER_NAMESPACE . ucfirst($controllerName);

        $actionName = $this->request->getParam('action', 'index');
        $action = ucfirst($actionName) . self::ACTION_KEY;

        $this->view->setActionView($controllerName . DIRECTORY_SEPARATOR . $actionName);

        $controller = new $controllerClass($this->request, $this->view);
        $controller->preAction();
        $result = $controller->$action();
        $controller->postAction();

       return $this->view->render($result);
    }
}