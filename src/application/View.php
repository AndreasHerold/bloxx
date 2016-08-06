<?php
//Bootstrapper
namespace Bloxx\Application;

class View
{
	protected $layout = 'default';

    protected $actionView = '';

    protected $viewParams = array();


    public function render($params)
    {
        ob_start();
        include (VIEW_PATH . $this->actionView);
        $actionContent = ob_get_contents();
        ob_clean();

        ob_start();
        include (VIEW_PATH . 'layouts' . DIRECTORY_SEPARATOR . $this->layout . '.phtml');
        $content = ob_get_contents();
        ob_clean();

        return $content;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->viewParams)) {
            return $this->viewParams[$name];
        }
        return '';
    }

    /**
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @return string
     */
    public function getActionView()
    {
        return $this->actionView;
    }

    /**
     * @param string $actionView
     */
    public function setActionView($actionView)
    {
        $this->actionView = $actionView;
    }



}