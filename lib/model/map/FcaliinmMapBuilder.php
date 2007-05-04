<?php


	
class FcaliinmMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FcaliinmMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('fcaliinm');
		$tMap->setPhpName('Fcaliinm');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODCATFIS', 'Codcatfis', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('CODUSO', 'Coduso', 'string', CreoleTypes::VARCHAR, true, 3);

		$tMap->addColumn('ANOVIG', 'Anovig', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('VALORM', 'Valorm', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('PORVF', 'Porvf', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('ALITER', 'Aliter', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('ALICON', 'Alicon', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 