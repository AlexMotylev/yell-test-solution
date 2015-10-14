<?php

/**
 * Автолоадер для подгрузки классов
 */

$appConfig = include 'config.php';

function autoloader($class) {
	foreach($GLOBALS['appConfig']['includePaths'] as $path){
		if(is_file($filePath = $path . $class . '.php')){
			include $filePath;
		}
	}
}

spl_autoload_register('autoloader');
