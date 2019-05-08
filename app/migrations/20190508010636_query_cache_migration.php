<?php

use Phinx\Migration\AbstractMigration;

class QueryCacheMigration extends AbstractMigration
{
     /**
     * This function creates a migration for a query_cache table returning all results found in query by string
     */
    public function change()
    {
	$table = $this->table("query_cache", ["id" => false, "primary_key" => ["query_id"]]);
	$table->addColumn("query_id", "integer")
		->addColumn("query", "text")
		->addColumn("result", "json")
		->addTimestamps()
		->create();
    }
}
