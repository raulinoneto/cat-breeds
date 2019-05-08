<?php

use Phinx\Migration\AbstractMigration;

class CatBreedsMigration extends AbstractMigration
{
    /**
     * This function creates a migration for a table that store all searched cat breeds
     */
    public function change()
    {
    	$table = $this->table("cat_breeds", ["id"=>false, "primary_key"=>["cat_breeds_id"]]);
    	$table->addColumn("cat_breeds_id", "integer")
    		->addColumn("api_id", "string", ["unique" => true])
    		->addColumn("name", "sting")
    		->addColumn("experimental", "integer")
    		->addColumn("data", "json")
    		->create();

    }
}
