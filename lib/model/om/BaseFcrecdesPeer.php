<?php


abstract class BaseFcrecdesPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'fcrecdes';

	
	const CLASS_DEFAULT = 'lib.model.Fcrecdes';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CODREDE = 'fcrecdes.CODREDE';

	
	const RECDES = 'fcrecdes.RECDES';

	
	const DESREDE = 'fcrecdes.DESREDE';

	
	const CODCTA = 'fcrecdes.CODCTA';

	
	const PORREDE = 'fcrecdes.PORREDE';

	
	const CODFUE = 'fcrecdes.CODFUE';

	
	const DIAS = 'fcrecdes.DIAS';

	
	const PORCIEN = 'fcrecdes.PORCIEN';

	
	const ID = 'fcrecdes.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Codrede', 'Recdes', 'Desrede', 'Codcta', 'Porrede', 'Codfue', 'Dias', 'Porcien', 'Id', ),
		BasePeer::TYPE_COLNAME => array (FcrecdesPeer::CODREDE, FcrecdesPeer::RECDES, FcrecdesPeer::DESREDE, FcrecdesPeer::CODCTA, FcrecdesPeer::PORREDE, FcrecdesPeer::CODFUE, FcrecdesPeer::DIAS, FcrecdesPeer::PORCIEN, FcrecdesPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('codrede', 'recdes', 'desrede', 'codcta', 'porrede', 'codfue', 'dias', 'porcien', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Codrede' => 0, 'Recdes' => 1, 'Desrede' => 2, 'Codcta' => 3, 'Porrede' => 4, 'Codfue' => 5, 'Dias' => 6, 'Porcien' => 7, 'Id' => 8, ),
		BasePeer::TYPE_COLNAME => array (FcrecdesPeer::CODREDE => 0, FcrecdesPeer::RECDES => 1, FcrecdesPeer::DESREDE => 2, FcrecdesPeer::CODCTA => 3, FcrecdesPeer::PORREDE => 4, FcrecdesPeer::CODFUE => 5, FcrecdesPeer::DIAS => 6, FcrecdesPeer::PORCIEN => 7, FcrecdesPeer::ID => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('codrede' => 0, 'recdes' => 1, 'desrede' => 2, 'codcta' => 3, 'porrede' => 4, 'codfue' => 5, 'dias' => 6, 'porcien' => 7, 'id' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/FcrecdesMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.FcrecdesMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = FcrecdesPeer::getTableMap();
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
		return str_replace(FcrecdesPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(FcrecdesPeer::CODREDE);

		$criteria->addSelectColumn(FcrecdesPeer::RECDES);

		$criteria->addSelectColumn(FcrecdesPeer::DESREDE);

		$criteria->addSelectColumn(FcrecdesPeer::CODCTA);

		$criteria->addSelectColumn(FcrecdesPeer::PORREDE);

		$criteria->addSelectColumn(FcrecdesPeer::CODFUE);

		$criteria->addSelectColumn(FcrecdesPeer::DIAS);

		$criteria->addSelectColumn(FcrecdesPeer::PORCIEN);

		$criteria->addSelectColumn(FcrecdesPeer::ID);

	}

	const COUNT = 'COUNT(fcrecdes.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT fcrecdes.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcrecdesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcrecdesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = FcrecdesPeer::doSelectRS($criteria, $con);
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
		$objects = FcrecdesPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return FcrecdesPeer::populateObjects(FcrecdesPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			FcrecdesPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = FcrecdesPeer::getOMClass();
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
		return FcrecdesPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(FcrecdesPeer::ID); 

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
			$comparison = $criteria->getComparison(FcrecdesPeer::ID);
			$selectCriteria->add(FcrecdesPeer::ID, $criteria->remove(FcrecdesPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(FcrecdesPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(FcrecdesPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Fcrecdes) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(FcrecdesPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Fcrecdes $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(FcrecdesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(FcrecdesPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(FcrecdesPeer::DATABASE_NAME, FcrecdesPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = FcrecdesPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(FcrecdesPeer::DATABASE_NAME);

		$criteria->add(FcrecdesPeer::ID, $pk);


		$v = FcrecdesPeer::doSelect($criteria, $con);

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
			$criteria->add(FcrecdesPeer::ID, $pks, Criteria::IN);
			$objs = FcrecdesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseFcrecdesPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/FcrecdesMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.FcrecdesMapBuilder');
}
