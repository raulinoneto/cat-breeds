<?php

use Phinx\Migration\AbstractMigration;

class QueryCacheMigration extends AbstractMigration
{
     /**
     * This function creates a migration for a query_cache table returning all results found in query by string
     */
    public function change()
    {
	$table = $this->table("query_cache");
	$table->addColumn("query", "text")
		->addColumn("data", "json")
		->addTimestamps()
		->create();
    }
}
