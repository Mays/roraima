<?php


	
class FcdefpgiMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FcdefpgiMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('fcdefpgi');
		$tMap->setPhpName('Fcdefpgi');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('MONDES', 'Mondes', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('MONHAS', 'Monhas', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('MONPAG', 'Monpag', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('NUMPOR', 'Numpor', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('DESPGI', 'Despgi', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DESABR', 'Desabr', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 