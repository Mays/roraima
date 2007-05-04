<?php


	
class FcdesvehMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FcdesvehMapBuilder';	

    
    private $dbMap;

	
    public function isBuilt()
    {
        return ($this->dbMap !== null);
    }

	
    public function getDatabaseMap()
    {
        return $this->dbMap;
    }

    
    public function doBuild()
    {
		$this->dbMap = Propel::getDatabaseMap('propel');
		
		$tMap = $this->dbMap->addTable('fcdesveh');
		$tMap->setPhpName('Fcdesveh');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('NUMDES', 'Numdes', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('PLAVEH', 'Plaveh', 'string', CreoleTypes::VARCHAR, true, 8);

		$tMap->addColumn('FECDES', 'Fecdes', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('MOTDES', 'Motdes', 'string', CreoleTypes::VARCHAR, true, 200);

		$tMap->addColumn('FUNREC', 'Funrec', 'string', CreoleTypes::VARCHAR, true, 40);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 