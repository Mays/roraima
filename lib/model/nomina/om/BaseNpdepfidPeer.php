<?php


abstract class BaseNpdepfidPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'npdepfid';

	
	const CLASS_DEFAULT = 'lib.model.nomina.Npdepfid';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CODEMP = 'npdepfid.CODEMP';

	
	const FECNOM = 'npdepfid.FECNOM';

	
	const FECING = 'npdepfid.FECING';

	
	const DEVENGADO = 'npdepfid.DEVENGADO';

	
	const DIASDEPOSITO = 'npdepfid.DIASDEPOSITO';

	
	const FIDEICOMISO = 'npdepfid.FIDEICOMISO';

	
	const CODCAR = 'npdepfid.CODCAR';

	
	const CODNOM = 'npdepfid.CODNOM';

	
	const ID = 'npdepfid.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Codemp', 'Fecnom', 'Fecing', 'Devengado', 'Diasdeposito', 'Fideicomiso', 'Codcar', 'Codnom', 'Id', ),
		BasePeer::TYPE_COLNAME => array (NpdepfidPeer::CODEMP, NpdepfidPeer::FECNOM, NpdepfidPeer::FECING, NpdepfidPeer::DEVENGADO, NpdepfidPeer::DIASDEPOSITO, NpdepfidPeer::FIDEICOMISO, NpdepfidPeer::CODCAR, NpdepfidPeer::CODNOM, NpdepfidPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('codemp', 'fecnom', 'fecing', 'devengado', 'diasdeposito', 'fideicomiso', 'codcar', 'codnom', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Codemp' => 0, 'Fecnom' => 1, 'Fecing' => 2, 'Devengado' => 3, 'Diasdeposito' => 4, 'Fideicomiso' => 5, 'Codcar' => 6, 'Codnom' => 7, 'Id' => 8, ),
		BasePeer::TYPE_COLNAME => array (NpdepfidPeer::CODEMP => 0, NpdepfidPeer::FECNOM => 1, NpdepfidPeer::FECING => 2, NpdepfidPeer::DEVENGADO => 3, NpdepfidPeer::DIASDEPOSITO => 4, NpdepfidPeer::FIDEICOMISO => 5, NpdepfidPeer::CODCAR => 6, NpdepfidPeer::CODNOM => 7, NpdepfidPeer::ID => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('codemp' => 0, 'fecnom' => 1, 'fecing' => 2, 'devengado' => 3, 'diasdeposito' => 4, 'fideicomiso' => 5, 'codcar' => 6, 'codnom' => 7, 'id' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/nomina/map/NpdepfidMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.nomina.map.NpdepfidMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = NpdepfidPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(NpdepfidPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NpdepfidPeer::CODEMP);

		$criteria->addSelectColumn(NpdepfidPeer::FECNOM);

		$criteria->addSelectColumn(NpdepfidPeer::FECING);

		$criteria->addSelectColumn(NpdepfidPeer::DEVENGADO);

		$criteria->addSelectColumn(NpdepfidPeer::DIASDEPOSITO);

		$criteria->addSelectColumn(NpdepfidPeer::FIDEICOMISO);

		$criteria->addSelectColumn(NpdepfidPeer::CODCAR);

		$criteria->addSelectColumn(NpdepfidPeer::CODNOM);

		$criteria->addSelectColumn(NpdepfidPeer::ID);

	}

	const COUNT = 'COUNT(npdepfid.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT npdepfid.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(NpdepfidPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(NpdepfidPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = NpdepfidPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NpdepfidPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return NpdepfidPeer::populateObjects(NpdepfidPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			NpdepfidPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = NpdepfidPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return NpdepfidPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(NpdepfidPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(NpdepfidPeer::ID);
			$selectCriteria->add(NpdepfidPeer::ID, $criteria->remove(NpdepfidPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(NpdepfidPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(NpdepfidPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Npdepfid) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NpdepfidPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Npdepfid $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NpdepfidPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NpdepfidPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(NpdepfidPeer::DATABASE_NAME, NpdepfidPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = NpdepfidPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(NpdepfidPeer::DATABASE_NAME);

		$criteria->add(NpdepfidPeer::ID, $pk);


		$v = NpdepfidPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(NpdepfidPeer::ID, $pks, Criteria::IN);
			$objs = NpdepfidPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseNpdepfidPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/nomina/map/NpdepfidMapBuilder.php';
	Propel::registerMapBuilder('lib.model.nomina.map.NpdepfidMapBuilder');
}
