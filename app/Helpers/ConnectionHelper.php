<?php
namespace App\Helpers

use Interop\Container\ContainerInterface;

class ConnectionHelper 
{

	public static function databaseConnection(ContainerInterface $container) : bool
	{
		try {
			$pdo = container->db::connection()->getPdo();
			return true;
		} catch ($e) {
			return false;
		}
	}
}