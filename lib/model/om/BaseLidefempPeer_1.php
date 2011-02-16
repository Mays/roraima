<?php


abstract class BaseLidefempPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'lidefemp';

	
	const CLASS_DEFAULT = 'lib.model.Lidefemp';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CODEMP = 'lidefemp.CODEMP';

	
	const NOMEMP = 'lidefemp.NOMEMP';

	
	const DIREMP = 'lidefemp.DIREMP';

	
	const TELEMP = 'lidefemp.TELEMP';

	
	const FAXEMP = 'lidefemp.FAXEMP';

	
	const EMAEMP = 'lidefemp.EMAEMP';

	
	const UNITRI = 'lidefemp.UNITRI';

	
	const PTOCTA = 'lidefemp.PTOCTA';

	
	const PREBAS = 'lidefemp.PREBAS';

	
	const EXPDIE = 'lidefemp.EXPDIE';

	
	const ID = 'lidefemp.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Codemp', 'Nomemp', 'Diremp', 'Telemp', 'Faxemp', 'Emaemp', 'Unitri', 'Ptocta', 'Prebas', 'Expdie', 'Id', ),
		BasePeer::TYPE_COLNAME => array (LidefempPeer::CODEMP, LidefempPeer::NOMEMP, LidefempPeer::DIREMP, LidefempPeer::TELEMP, LidefempPeer::FAXEMP, LidefempPeer::EMAEMP, LidefempPeer::UNITRI, LidefempPeer::PTOCTA, LidefempPeer::PREBAS, LidefempPeer::EXPDIE, LidefempPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('codemp', 'nomemp', 'diremp', 'telemp', 'faxemp', 'emaemp', 'unitri', 'ptocta', 'prebas', 'expdie', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Codemp' => 0, 'Nomemp' => 1, 'Diremp' => 2, 'Telemp' => 3, 'Faxemp' => 4, 'Emaemp' => 5, 'Unitri' => 6, 'Ptocta' => 7, 'Prebas' => 8, 'Expdie' => 9, 'Id' => 10, ),
		BasePeer::TYPE_COLNAME => array (LidefempPeer::CODEMP => 0, LidefempPeer::NOMEMP => 1, LidefempPeer::DIREMP => 2, LidefempPeer::TELEMP => 3, LidefempPeer::FAXEMP => 4, LidefempPeer::EMAEMP => 5, LidefempPeer::UNITRI => 6, LidefempPeer::PTOCTA => 7, LidefempPeer::PREBAS => 8, LidefempPeer::EXPDIE => 9, LidefempPeer::ID => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('codemp' => 0, 'nomemp' => 1, 'diremp' => 2, 'telemp' => 3, 'faxemp' => 4, 'emaemp' => 5, 'unitri' => 6, 'ptocta' => 7, 'prebas' => 8, 'expdie' => 9, 'id' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/LidefempMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.LidefempMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LidefempPeer::getTableMap();
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
		return str_replace(LidefempPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LidefempPeer::CODEMP);

		$criteria->addSelectColumn(LidefempPeer::NOMEMP);

		$criteria->addSelectColumn(LidefempPeer::DIREMP);

		$criteria->addSelectColumn(LidefempPeer::TELEMP);

		$criteria->addSelectColumn(LidefempPeer::FAXEMP);

		$criteria->addSelectColumn(LidefempPeer::EMAEMP);

		$criteria->addSelectColumn(LidefempPeer::UNITRI);

		$criteria->addSelectColumn(LidefempPeer::PTOCTA);

		$criteria->addSelectColumn(LidefempPeer::PREBAS);

		$criteria->addSelectColumn(LidefempPeer::EXPDIE);

		$criteria->addSelectColumn(LidefempPeer::ID);

	}

	const COUNT = 'COUNT(lidefemp.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT lidefemp.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LidefempPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LidefempPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LidefempPeer::doSelectRS($criteria, $con);
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
		$objects = LidefempPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LidefempPeer::populateObjects(LidefempPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LidefempPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LidefempPeer::getOMClass();
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
		return LidefempPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LidefempPeer::ID); 

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
			$comparison = $criteria->getComparison(LidefempPeer::ID);
			$selectCriteria->add(LidefempPeer::ID, $criteria->remove(LidefempPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LidefempPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LidefempPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Lidefemp) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LidefempPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Lidefemp $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LidefempPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LidefempPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LidefempPeer::DATABASE_NAME, LidefempPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LidefempPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LidefempPeer::DATABASE_NAME);

		$criteria->add(LidefempPeer::ID, $pk);


		$v = LidefempPeer::doSelect($criteria, $con);

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
			$criteria->add(LidefempPeer::ID, $pks, Criteria::IN);
			$objs = LidefempPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLidefempPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/LidefempMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.LidefempMapBuilder');
}
