<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 06.08.2016
 * Time: 16:45
 */

namespace Bloxx\Controller;

use \Bloxx\Application\Request;
use \Bloxx\Application\View;

class Abstractcontroller
{
    /**
     * @var Request
     */
    protected $request;
    /**
     * @var View
     */
    protected $view;

    /**
     * AbstractController constructor.
     * @param Request $request
     * @param View $view
     */
    public function __construct(Request $request, View $view)
    {
        $this->request = $request;
        $this->view = $view;

        $this->init();
    }

    /**
     *
     */
    public function init() {}

    public function preAction() {}

    public function postAction() {}

    /**
     * @return \Bloxx\Application\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function setLayout($name)
    {
        $this->view->setLayout($name);
    }

    public function setActionView($name)
    {
        $this->view->setActionView($name);
    }


}