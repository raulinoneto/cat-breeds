<?php
namespace App\Helpers;

use Interop\Container\ContainerInterface;

class ConnectionHelper 
{
	/**
	* This function veriry the database connection to prevent errors in some places
	* @param Interop\Container\ContainerInterface	container
	* @return bool
	*/
	public static function hasDatabaseConnection(ContainerInterface $container) : bool
	{
		try {
			$pdo = $container->db::connection()->getPdo();
			return true;
		} catch (\Exception $e) {
			return false;
		}
	}
}