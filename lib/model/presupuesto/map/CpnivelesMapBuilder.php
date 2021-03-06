<?php



class CpnivelesMapBuilder {

	
	const CLASS_NAME = 'lib.model.presupuesto.map.CpnivelesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cpniveles');
		$tMap->setPhpName('Cpniveles');

		$tMap->setUseIdGenerator(true);

		$tMap->setPrimaryKeyMethodInfo('cpniveles_SEQ');

		$tMap->addColumn('CATPAR', 'Catpar', 'string', CreoleTypes::VARCHAR, true, 1);

		$tMap->addColumn('CONSEC', 'Consec', 'double', CreoleTypes::NUMERIC, true, 2);

		$tMap->addColumn('NOMABR', 'Nomabr', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('NOMEXT', 'Nomext', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('LONNIV', 'Lonniv', 'double', CreoleTypes::NUMERIC, false, 2);

		$tMap->addColumn('STANIV', 'Staniv', 'string', CreoleTypes::VARCHAR, false, 1);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 