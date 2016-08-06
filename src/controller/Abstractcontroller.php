<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 06.08.2016
 * Time: 16:45
 */

namespace Bloxx\Controller;


class Abstractcontroller
{
    /**
     * @var \Bloxx\Application\Request
     */
    protected $_request;

    /**
     * AbstractController constructor.
     * @param \Bloxx\Application\Request $_request
     */
    public function __construct(\Bloxx\Application\Request $_request)
    {
        $this->_request = $_request;

        $this->init();
    }

    /**
     *
     */
    public function init()
    {

    }

    /**
     * @return \Bloxx\Application\Request
     */
    public function getRequest()
    {
        return $this->_request;
    }


}