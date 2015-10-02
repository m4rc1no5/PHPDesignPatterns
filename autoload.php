<?php
/*** class Loader ***/
function autoLoader($class){

	$ggFileName = str_replace("\\","/",$class);
	$file = $ggFileName . '.php';

	//wycinamy PHPDesignPattern
	$file = substr($file, 18);

	if (file_exists($file)){

		include $file;
		return true;
	}

	return false;
}

/*** register the loader functions ***/
spl_autoload_register('autoLoader');