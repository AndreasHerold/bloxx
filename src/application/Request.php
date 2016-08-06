<?php
//Bootstrapper
namespace Bloxx\Application;

class Request
{
    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';
	protected $requestParams = array();
    protected $requestUri = '';
    protected $requestMethod = '';
	
	public function __construct()
	{
		$this->requestParams = $_REQUEST;
        $this->requestUri = $_SERVER['REQUEST_URI'];
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
	}

    /**
     * @return string
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    public function isPost()
    {
        if ($this->requestMethod == Request::METHOD_POST) {
            return true;
        }
        return false;
    }
	public function getAllParams()
	{
		return $this->requestParams;
	}
	
	public function getParam($key, $default = '')
	{
		if (array_key_exists($key, $this->requestParams)) {
		    return $this->requestParams[$key];
        }
        return $default;
	}


}