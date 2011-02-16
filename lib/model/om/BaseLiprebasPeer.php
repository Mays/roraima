<?php


abstract class BaseLiprebasPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'liprebas';

	
	const CLASS_DEFAULT = 'lib.model.Liprebas';

	
	const NUM_COLUMNS = 23;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const REQART = 'liprebas.REQART';

	
	const FECREQ = 'liprebas.FECREQ';

	
	const DESREQ = 'liprebas.DESREQ';

	
	const MONREQ = 'liprebas.MONREQ';

	
	const STAREQ = 'liprebas.STAREQ';

	
	const MOTREQ = 'liprebas.MOTREQ';

	
	const BENREQ = 'liprebas.BENREQ';

	
	const MONDES = 'liprebas.MONDES';

	
	const OBSREQ = 'liprebas.OBSREQ';

	
	const UNIRES = 'liprebas.UNIRES';

	
	const TIPMON = 'liprebas.TIPMON';

	
	const VALMON = 'liprebas.VALMON';

	
	const FECANU = 'liprebas.FECANU';

	
	const CODPRO = 'liprebas.CODPRO';

	
	const REQCOM = 'liprebas.REQCOM';

	
	const TIPFIN = 'liprebas.TIPFIN';

	
	const TIPREQ = 'liprebas.TIPREQ';

	
	const APRREQ = 'liprebas.APRREQ';

	
	const USUAPR = 'liprebas.USUAPR';

	
	const FECAPR = 'liprebas.FECAPR';

	
	const CODEMP = 'liprebas.CODEMP';

	
	const CODCEN = 'liprebas.CODCEN';

	
	const ID = 'liprebas.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Reqart', 'Fecreq', 'Desreq', 'Monreq', 'Stareq', 'Motreq', 'Benreq', 'Mondes', 'Obsreq', 'Unires', 'Tipmon', 'Valmon', 'Fecanu', 'Codpro', 'Reqcom', 'Tipfin', 'Tipreq', 'Aprreq', 'Usuapr', 'Fecapr', 'Codemp', 'Codcen', 'Id', ),
		BasePeer::TYPE_COLNAME => array (LiprebasPeer::REQART, LiprebasPeer::FECREQ, LiprebasPeer::DESREQ, LiprebasPeer::MONREQ, LiprebasPeer::STAREQ, LiprebasPeer::MOTREQ, LiprebasPeer::BENREQ, LiprebasPeer::MONDES, LiprebasPeer::OBSREQ, LiprebasPeer::UNIRES, LiprebasPeer::TIPMON, LiprebasPeer::VALMON, LiprebasPeer::FECANU, LiprebasPeer::CODPRO, LiprebasPeer::REQCOM, LiprebasPeer::TIPFIN, LiprebasPeer::TIPREQ, LiprebasPeer::APRREQ, LiprebasPeer::USUAPR, LiprebasPeer::FECAPR, LiprebasPeer::CODEMP, LiprebasPeer::CODCEN, LiprebasPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('reqart', 'fecreq', 'desreq', 'monreq', 'stareq', 'motreq', 'benreq', 'mondes', 'obsreq', 'unires', 'tipmon', 'valmon', 'fecanu', 'codpro', 'reqcom', 'tipfin', 'tipreq', 'aprreq', 'usuapr', 'fecapr', 'codemp', 'codcen', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Reqart' => 0, 'Fecreq' => 1, 'Desreq' => 2, 'Monreq' => 3, 'Stareq' => 4, 'Motreq' => 5, 'Benreq' => 6, 'Mondes' => 7, 'Obsreq' => 8, 'Unires' => 9, 'Tipmon' => 10, 'Valmon' => 11, 'Fecanu' => 12, 'Codpro' => 13, 'Reqcom' => 14, 'Tipfin' => 15, 'Tipreq' => 16, 'Aprreq' => 17, 'Usuapr' => 18, 'Fecapr' => 19, 'Codemp' => 20, 'Codcen' => 21, 'Id' => 22, ),
		BasePeer::TYPE_COLNAME => array (LiprebasPeer::REQART => 0, LiprebasPeer::FECREQ => 1, LiprebasPeer::DESREQ => 2, LiprebasPeer::MONREQ => 3, LiprebasPeer::STAREQ => 4, LiprebasPeer::MOTREQ => 5, LiprebasPeer::BENREQ => 6, LiprebasPeer::MONDES => 7, LiprebasPeer::OBSREQ => 8, LiprebasPeer::UNIRES => 9, LiprebasPeer::TIPMON => 10, LiprebasPeer::VALMON => 11, LiprebasPeer::FECANU => 12, LiprebasPeer::CODPRO => 13, LiprebasPeer::REQCOM => 14, LiprebasPeer::TIPFIN => 15, LiprebasPeer::TIPREQ => 16, LiprebasPeer::APRREQ => 17, LiprebasPeer::USUAPR => 18, LiprebasPeer::FECAPR => 19, LiprebasPeer::CODEMP => 20, LiprebasPeer::CODCEN => 21, LiprebasPeer::ID => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('reqart' => 0, 'fecreq' => 1, 'desreq' => 2, 'monreq' => 3, 'stareq' => 4, 'motreq' => 5, 'benreq' => 6, 'mondes' => 7, 'obsreq' => 8, 'unires' => 9, 'tipmon' => 10, 'valmon' => 11, 'fecanu' => 12, 'codpro' => 13, 'reqcom' => 14, 'tipfin' => 15, 'tipreq' => 16, 'aprreq' => 17, 'usuapr' => 18, 'fecapr' => 19, 'codemp' => 20, 'codcen' => 21, 'id' => 22, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/LiprebasMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.LiprebasMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LiprebasPeer::getTableMap();
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
		return str_replace(LiprebasPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LiprebasPeer::REQART);

		$criteria->addSelectColumn(LiprebasPeer::FECREQ);

		$criteria->addSelectColumn(LiprebasPeer::DESREQ);

		$criteria->addSelectColumn(LiprebasPeer::MONREQ);

		$criteria->addSelectColumn(LiprebasPeer::STAREQ);

		$criteria->addSelectColumn(LiprebasPeer::MOTREQ);

		$criteria->addSelectColumn(LiprebasPeer::BENREQ);

		$criteria->addSelectColumn(LiprebasPeer::MONDES);

		$criteria->addSelectColumn(LiprebasPeer::OBSREQ);

		$criteria->addSelectColumn(LiprebasPeer::UNIRES);

		$criteria->addSelectColumn(LiprebasPeer::TIPMON);

		$criteria->addSelectColumn(LiprebasPeer::VALMON);

		$criteria->addSelectColumn(LiprebasPeer::FECANU);

		$criteria->addSelectColumn(LiprebasPeer::CODPRO);

		$criteria->addSelectColumn(LiprebasPeer::REQCOM);

		$criteria->addSelectColumn(LiprebasPeer::TIPFIN);

		$criteria->addSelectColumn(LiprebasPeer::TIPREQ);

		$criteria->addSelectColumn(LiprebasPeer::APRREQ);

		$criteria->addSelectColumn(LiprebasPeer::USUAPR);

		$criteria->addSelectColumn(LiprebasPeer::FECAPR);

		$criteria->addSelectColumn(LiprebasPeer::CODEMP);

		$criteria->addSelectColumn(LiprebasPeer::CODCEN);

		$criteria->addSelectColumn(LiprebasPeer::ID);

	}

	const COUNT = 'COUNT(liprebas.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT liprebas.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiprebasPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiprebasPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LiprebasPeer::doSelectRS($criteria, $con);
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
		$objects = LiprebasPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LiprebasPeer::populateObjects(LiprebasPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LiprebasPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LiprebasPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiprebasPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiprebasPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LiprebasPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		LiprebasPeer::addSelectColumns($c);
		$startcol2 = (LiprebasPeer::NUM_COLUMNS - LiprebasPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = LiprebasPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return LiprebasPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LiprebasPeer::ID); 

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
			$comparison = $criteria->getComparison(LiprebasPeer::ID);
			$selectCriteria->add(LiprebasPeer::ID, $criteria->remove(LiprebasPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LiprebasPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LiprebasPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Liprebas) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LiprebasPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Liprebas $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LiprebasPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LiprebasPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LiprebasPeer::DATABASE_NAME, LiprebasPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LiprebasPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LiprebasPeer::DATABASE_NAME);

		$criteria->add(LiprebasPeer::ID, $pk);


		$v = LiprebasPeer::doSelect($criteria, $con);

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
			$criteria->add(LiprebasPeer::ID, $pks, Criteria::IN);
			$objs = LiprebasPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLiprebasPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/LiprebasMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.LiprebasMapBuilder');
}
