<?php

class Autoloader 
{
	public function register()
	{
		spl_autoload_register(array($this, 'load'));
	}
	public function load($className)
	{
		$namespaceParts = explode('\\', strtolower($className));
		$namespacePartsFlipped = array_flip($namespaceParts);
		if (isset($namespacePartsFlipped['bloxx'])) {
			unset($namespaceParts[$namespacePartsFlipped['bloxx']]);
		}
		$class = array_pop($namespaceParts);
		$classPath = implode(DIRECTORY_SEPARATOR, $namespaceParts);
		$file = '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $classPath . DIRECTORY_SEPARATOR . ucfirst($class) . '.php';
		if (file_exists($file)) {
			require_once($file);
		}
	}	
}