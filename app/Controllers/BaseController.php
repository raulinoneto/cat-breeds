<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

class BaseController {

	/**
	* Container configurations
	* @var Interop\Container\ContainerInterface
	*/
	protected $container;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

}
