<?php



class CctiptraMapBuilder {

	
	const CLASS_NAME = 'lib.model.creditos.map.CctiptraMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cctiptra');
		$tMap->setPhpName('Cctiptra');

		$tMap->setUseIdGenerator(true);

		$tMap->setPrimaryKeyMethodInfo('cctiptra_SEQ');

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NOMTIPTRA', 'Nomtiptra', 'string', CreoleTypes::VARCHAR, false, null);

		$tMap->addColumn('DESTIPTRA', 'Destiptra', 'string', CreoleTypes::VARCHAR, false, null);

	} 
} 