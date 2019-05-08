<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

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
    		->addColumn("experimental", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("temperament", "string")
    		->addColumn("life_span", "string")
    		->addColumn("alt_names", "string")
    		->addColumn("wikipedia_url", "string")
    		->addColumn("origin", "string")
    		->addColumn("weight_imperial", "string")
    		->addColumn("country_code", "string")
    		->addColumn("experimental", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("hairless", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("natural", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("rare", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("rex", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("suppress_tail", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("short_legs", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("hypoallergenic", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("adaptability", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("affection_level", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("child_friendly", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("dog_friendly", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("energy_level", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("grooming", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("health_issues", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("intelligence", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("shedding_level", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("social_needs", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("stranger_friendly", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addColumn("vocalisation", "integer", ["limit"=>MysqlAdapter::INT_TINY]])
    		->addTimestamps()
    		->create();
    }
}
