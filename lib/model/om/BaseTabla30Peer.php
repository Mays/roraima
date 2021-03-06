<?php


abstract class BaseTabla30Peer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tabla30';

	
	const CLASS_DEFAULT = 'lib.model.Tabla30';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const REFAJU = 'tabla30.REFAJU';

	
	const CODPRE = 'tabla30.CODPRE';

	
	const MONAJU = 'tabla30.MONAJU';

	
	const STAMOV = 'tabla30.STAMOV';

	
	const REFPRC = 'tabla30.REFPRC';

	
	const REFCOM = 'tabla30.REFCOM';

	
	const REFCAU = 'tabla30.REFCAU';

	
	const REFPAG = 'tabla30.REFPAG';

	
	const ID = 'tabla30.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Refaju', 'Codpre', 'Monaju', 'Stamov', 'Refprc', 'Refcom', 'Refcau', 'Refpag', 'Id', ),
		BasePeer::TYPE_COLNAME => array (Tabla30Peer::REFAJU, Tabla30Peer::CODPRE, Tabla30Peer::MONAJU, Tabla30Peer::STAMOV, Tabla30Peer::REFPRC, Tabla30Peer::REFCOM, Tabla30Peer::REFCAU, Tabla30Peer::REFPAG, Tabla30Peer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('refaju', 'codpre', 'monaju', 'stamov', 'refprc', 'refcom', 'refcau', 'refpag', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Refaju' => 0, 'Codpre' => 1, 'Monaju' => 2, 'Stamov' => 3, 'Refprc' => 4, 'Refcom' => 5, 'Refcau' => 6, 'Refpag' => 7, 'Id' => 8, ),
		BasePeer::TYPE_COLNAME => array (Tabla30Peer::REFAJU => 0, Tabla30Peer::CODPRE => 1, Tabla30Peer::MONAJU => 2, Tabla30Peer::STAMOV => 3, Tabla30Peer::REFPRC => 4, Tabla30Peer::REFCOM => 5, Tabla30Peer::REFCAU => 6, Tabla30Peer::REFPAG => 7, Tabla30Peer::ID => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('refaju' => 0, 'codpre' => 1, 'monaju' => 2, 'stamov' => 3, 'refprc' => 4, 'refcom' => 5, 'refcau' => 6, 'refpag' => 7, 'id' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/Tabla30MapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.Tabla30MapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Tabla30Peer::getTableMap();
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
		return str_replace(Tabla30Peer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Tabla30Peer::REFAJU);

		$criteria->addSelectColumn(Tabla30Peer::CODPRE);

		$criteria->addSelectColumn(Tabla30Peer::MONAJU);

		$criteria->addSelectColumn(Tabla30Peer::STAMOV);

		$criteria->addSelectColumn(Tabla30Peer::REFPRC);

		$criteria->addSelectColumn(Tabla30Peer::REFCOM);

		$criteria->addSelectColumn(Tabla30Peer::REFCAU);

		$criteria->addSelectColumn(Tabla30Peer::REFPAG);

		$criteria->addSelectColumn(Tabla30Peer::ID);

	}

	const COUNT = 'COUNT(tabla30.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tabla30.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Tabla30Peer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Tabla30Peer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Tabla30Peer::doSelectRS($criteria, $con);
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
		$objects = Tabla30Peer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Tabla30Peer::populateObjects(Tabla30Peer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Tabla30Peer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Tabla30Peer::getOMClass();
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
		return Tabla30Peer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Tabla30Peer::ID); 

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
			$comparison = $criteria->getComparison(Tabla30Peer::ID);
			$selectCriteria->add(Tabla30Peer::ID, $criteria->remove(Tabla30Peer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Tabla30Peer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Tabla30Peer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Tabla30) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Tabla30Peer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Tabla30 $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Tabla30Peer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Tabla30Peer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Tabla30Peer::DATABASE_NAME, Tabla30Peer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Tabla30Peer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Tabla30Peer::DATABASE_NAME);

		$criteria->add(Tabla30Peer::ID, $pk);


		$v = Tabla30Peer::doSelect($criteria, $con);

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
			$criteria->add(Tabla30Peer::ID, $pks, Criteria::IN);
			$objs = Tabla30Peer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTabla30Peer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/Tabla30MapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.Tabla30MapBuilder');
}
