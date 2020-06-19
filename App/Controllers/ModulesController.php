<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class ModulesController extends Action
{
	public function read()
	{
		$module = Container::getModel('Module');

		return $module->read();
	}
}

?>