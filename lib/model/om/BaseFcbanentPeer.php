<?php


abstract class BaseFcbanentPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'fcbanent';

	
	const CLASS_DEFAULT = 'lib.model.Fcbanent';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CODDOC = 'fcbanent.CODDOC';

	
	const CODFUN = 'fcbanent.CODFUN';

	
	const CODENTEXT = 'fcbanent.CODENTEXT';

	
	const CODTIPDOC = 'fcbanent.CODTIPDOC';

	
	const FECDOC = 'fcbanent.FECDOC';

	
	const HORDOC = 'fcbanent.HORDOC';

	
	const FECRES = 'fcbanent.FECRES';

	
	const ASUNTO = 'fcbanent.ASUNTO';

	
	const CODUBIFIS = 'fcbanent.CODUBIFIS';

	
	const FECUBIFIS = 'fcbanent.FECUBIFIS';

	
	const HORUBIFIS = 'fcbanent.HORUBIFIS';

	
	const CODUBIMAG = 'fcbanent.CODUBIMAG';

	
	const FECUBIMAG = 'fcbanent.FECUBIMAG';

	
	const HORUBIMAG = 'fcbanent.HORUBIMAG';

	
	const ID = 'fcbanent.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Coddoc', 'Codfun', 'Codentext', 'Codtipdoc', 'Fecdoc', 'Hordoc', 'Fecres', 'Asunto', 'Codubifis', 'Fecubifis', 'Horubifis', 'Codubimag', 'Fecubimag', 'Horubimag', 'Id', ),
		BasePeer::TYPE_COLNAME => array (FcbanentPeer::CODDOC, FcbanentPeer::CODFUN, FcbanentPeer::CODENTEXT, FcbanentPeer::CODTIPDOC, FcbanentPeer::FECDOC, FcbanentPeer::HORDOC, FcbanentPeer::FECRES, FcbanentPeer::ASUNTO, FcbanentPeer::CODUBIFIS, FcbanentPeer::FECUBIFIS, FcbanentPeer::HORUBIFIS, FcbanentPeer::CODUBIMAG, FcbanentPeer::FECUBIMAG, FcbanentPeer::HORUBIMAG, FcbanentPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('coddoc', 'codfun', 'codentext', 'codtipdoc', 'fecdoc', 'hordoc', 'fecres', 'asunto', 'codubifis', 'fecubifis', 'horubifis', 'codubimag', 'fecubimag', 'horubimag', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Coddoc' => 0, 'Codfun' => 1, 'Codentext' => 2, 'Codtipdoc' => 3, 'Fecdoc' => 4, 'Hordoc' => 5, 'Fecres' => 6, 'Asunto' => 7, 'Codubifis' => 8, 'Fecubifis' => 9, 'Horubifis' => 10, 'Codubimag' => 11, 'Fecubimag' => 12, 'Horubimag' => 13, 'Id' => 14, ),
		BasePeer::TYPE_COLNAME => array (FcbanentPeer::CODDOC => 0, FcbanentPeer::CODFUN => 1, FcbanentPeer::CODENTEXT => 2, FcbanentPeer::CODTIPDOC => 3, FcbanentPeer::FECDOC => 4, FcbanentPeer::HORDOC => 5, FcbanentPeer::FECRES => 6, FcbanentPeer::ASUNTO => 7, FcbanentPeer::CODUBIFIS => 8, FcbanentPeer::FECUBIFIS => 9, FcbanentPeer::HORUBIFIS => 10, FcbanentPeer::CODUBIMAG => 11, FcbanentPeer::FECUBIMAG => 12, FcbanentPeer::HORUBIMAG => 13, FcbanentPeer::ID => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('coddoc' => 0, 'codfun' => 1, 'codentext' => 2, 'codtipdoc' => 3, 'fecdoc' => 4, 'hordoc' => 5, 'fecres' => 6, 'asunto' => 7, 'codubifis' => 8, 'fecubifis' => 9, 'horubifis' => 10, 'codubimag' => 11, 'fecubimag' => 12, 'horubimag' => 13, 'id' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/FcbanentMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.FcbanentMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = FcbanentPeer::getTableMap();
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
		return str_replace(FcbanentPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(FcbanentPeer::CODDOC);

		$criteria->addSelectColumn(FcbanentPeer::CODFUN);

		$criteria->addSelectColumn(FcbanentPeer::CODENTEXT);

		$criteria->addSelectColumn(FcbanentPeer::CODTIPDOC);

		$criteria->addSelectColumn(FcbanentPeer::FECDOC);

		$criteria->addSelectColumn(FcbanentPeer::HORDOC);

		$criteria->addSelectColumn(FcbanentPeer::FECRES);

		$criteria->addSelectColumn(FcbanentPeer::ASUNTO);

		$criteria->addSelectColumn(FcbanentPeer::CODUBIFIS);

		$criteria->addSelectColumn(FcbanentPeer::FECUBIFIS);

		$criteria->addSelectColumn(FcbanentPeer::HORUBIFIS);

		$criteria->addSelectColumn(FcbanentPeer::CODUBIMAG);

		$criteria->addSelectColumn(FcbanentPeer::FECUBIMAG);

		$criteria->addSelectColumn(FcbanentPeer::HORUBIMAG);

		$criteria->addSelectColumn(FcbanentPeer::ID);

	}

	const COUNT = 'COUNT(fcbanent.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT fcbanent.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
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
		$objects = FcbanentPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return FcbanentPeer::populateObjects(FcbanentPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			FcbanentPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = FcbanentPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinFcdeffun(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinFcdefentext(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinFcdeftipdoc(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinFcdefubifis(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinFcdefubimag(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinFcdeffun(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		FcdeffunPeer::addSelectColumns($c);

		$c->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = FcdeffunPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getFcdeffun(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFcbanent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinFcdefentext(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		FcdefentextPeer::addSelectColumns($c);

		$c->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = FcdefentextPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getFcdefentext(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFcbanent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinFcdeftipdoc(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		FcdeftipdocPeer::addSelectColumns($c);

		$c->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = FcdeftipdocPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getFcdeftipdoc(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFcbanent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinFcdefubifis(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		FcdefubifisPeer::addSelectColumns($c);

		$c->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = FcdefubifisPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getFcdefubifis(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFcbanent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinFcdefubimag(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		FcdefubimagPeer::addSelectColumns($c);

		$c->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = FcdefubimagPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getFcdefubimag(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addFcbanent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$criteria->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$criteria->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$criteria->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$criteria->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
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

		FcbanentPeer::addSelectColumns($c);
		$startcol2 = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		FcdeffunPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + FcdeffunPeer::NUM_COLUMNS;

		FcdefentextPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + FcdefentextPeer::NUM_COLUMNS;

		FcdeftipdocPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + FcdeftipdocPeer::NUM_COLUMNS;

		FcdefubifisPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + FcdefubifisPeer::NUM_COLUMNS;

		FcdefubimagPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + FcdefubimagPeer::NUM_COLUMNS;

		$c->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$c->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$c->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$c->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$c->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();
		
		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			
			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

				
					
			$omClass = FcdeffunPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getFcdeffun(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFcbanent($obj1); 					break;
				}
			}
			
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1);
			}

				
					
			$omClass = FcdefentextPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getFcdefentext(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFcbanent($obj1); 					break;
				}
			}
			
			if ($newObject) {
				$obj3->initFcbanents();
				$obj3->addFcbanent($obj1);
			}

				
					
			$omClass = FcdeftipdocPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getFcdeftipdoc(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFcbanent($obj1); 					break;
				}
			}
			
			if ($newObject) {
				$obj4->initFcbanents();
				$obj4->addFcbanent($obj1);
			}

				
					
			$omClass = FcdefubifisPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getFcdefubifis(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFcbanent($obj1); 					break;
				}
			}
			
			if ($newObject) {
				$obj5->initFcbanents();
				$obj5->addFcbanent($obj1);
			}

				
					
			$omClass = FcdefubimagPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getFcdefubimag(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addFcbanent($obj1); 					break;
				}
			}
			
			if ($newObject) {
				$obj6->initFcbanents();
				$obj6->addFcbanent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptFcdeffun(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$criteria->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$criteria->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$criteria->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptFcdefentext(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$criteria->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$criteria->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$criteria->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptFcdeftipdoc(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$criteria->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$criteria->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$criteria->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptFcdefubifis(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$criteria->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$criteria->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$criteria->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptFcdefubimag(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;
		
				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FcbanentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FcbanentPeer::COUNT);
		}
		
				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$criteria->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$criteria->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$criteria->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$rs = FcbanentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptFcdeffun(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol2 = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		FcdefentextPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + FcdefentextPeer::NUM_COLUMNS;

		FcdeftipdocPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + FcdeftipdocPeer::NUM_COLUMNS;

		FcdefubifisPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + FcdefubifisPeer::NUM_COLUMNS;

		FcdefubimagPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + FcdefubimagPeer::NUM_COLUMNS;

		$c->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$c->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$c->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$c->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();
		
		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);		

			$omClass = FcdefentextPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getFcdefentext(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1);
			}

			$omClass = FcdeftipdocPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getFcdeftipdoc(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj3->initFcbanents();
				$obj3->addFcbanent($obj1);
			}

			$omClass = FcdefubifisPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getFcdefubifis(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj4->initFcbanents();
				$obj4->addFcbanent($obj1);
			}

			$omClass = FcdefubimagPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getFcdefubimag(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj5->initFcbanents();
				$obj5->addFcbanent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptFcdefentext(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol2 = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		FcdeffunPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + FcdeffunPeer::NUM_COLUMNS;

		FcdeftipdocPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + FcdeftipdocPeer::NUM_COLUMNS;

		FcdefubifisPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + FcdefubifisPeer::NUM_COLUMNS;

		FcdefubimagPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + FcdefubimagPeer::NUM_COLUMNS;

		$c->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$c->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$c->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$c->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();
		
		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);		

			$omClass = FcdeffunPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getFcdeffun(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1);
			}

			$omClass = FcdeftipdocPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getFcdeftipdoc(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj3->initFcbanents();
				$obj3->addFcbanent($obj1);
			}

			$omClass = FcdefubifisPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getFcdefubifis(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj4->initFcbanents();
				$obj4->addFcbanent($obj1);
			}

			$omClass = FcdefubimagPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getFcdefubimag(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj5->initFcbanents();
				$obj5->addFcbanent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptFcdeftipdoc(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol2 = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		FcdeffunPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + FcdeffunPeer::NUM_COLUMNS;

		FcdefentextPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + FcdefentextPeer::NUM_COLUMNS;

		FcdefubifisPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + FcdefubifisPeer::NUM_COLUMNS;

		FcdefubimagPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + FcdefubimagPeer::NUM_COLUMNS;

		$c->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$c->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$c->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);

		$c->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();
		
		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);		

			$omClass = FcdeffunPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getFcdeffun(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1);
			}

			$omClass = FcdefentextPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getFcdefentext(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj3->initFcbanents();
				$obj3->addFcbanent($obj1);
			}

			$omClass = FcdefubifisPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getFcdefubifis(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj4->initFcbanents();
				$obj4->addFcbanent($obj1);
			}

			$omClass = FcdefubimagPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getFcdefubimag(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj5->initFcbanents();
				$obj5->addFcbanent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptFcdefubifis(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol2 = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		FcdeffunPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + FcdeffunPeer::NUM_COLUMNS;

		FcdefentextPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + FcdefentextPeer::NUM_COLUMNS;

		FcdeftipdocPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + FcdeftipdocPeer::NUM_COLUMNS;

		FcdefubimagPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + FcdefubimagPeer::NUM_COLUMNS;

		$c->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$c->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$c->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$c->addJoin(FcbanentPeer::CODUBIMAG, FcdefubimagPeer::CODUBIMAG);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();
		
		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);		

			$omClass = FcdeffunPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getFcdeffun(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1);
			}

			$omClass = FcdefentextPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getFcdefentext(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj3->initFcbanents();
				$obj3->addFcbanent($obj1);
			}

			$omClass = FcdeftipdocPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getFcdeftipdoc(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj4->initFcbanents();
				$obj4->addFcbanent($obj1);
			}

			$omClass = FcdefubimagPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getFcdefubimag(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj5->initFcbanents();
				$obj5->addFcbanent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptFcdefubimag(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		FcbanentPeer::addSelectColumns($c);
		$startcol2 = (FcbanentPeer::NUM_COLUMNS - FcbanentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		FcdeffunPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + FcdeffunPeer::NUM_COLUMNS;

		FcdefentextPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + FcdefentextPeer::NUM_COLUMNS;

		FcdeftipdocPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + FcdeftipdocPeer::NUM_COLUMNS;

		FcdefubifisPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + FcdefubifisPeer::NUM_COLUMNS;

		$c->addJoin(FcbanentPeer::CODFUN, FcdeffunPeer::CODFUN);

		$c->addJoin(FcbanentPeer::CODENTEXT, FcdefentextPeer::CODENTEXT);

		$c->addJoin(FcbanentPeer::CODTIPDOC, FcdeftipdocPeer::CODTIPDOC);

		$c->addJoin(FcbanentPeer::CODUBIFIS, FcdefubifisPeer::CODUBIFIS);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();
		
		while($rs->next()) {

			$omClass = FcbanentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);		

			$omClass = FcdeffunPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getFcdeffun(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj2->initFcbanents();
				$obj2->addFcbanent($obj1);
			}

			$omClass = FcdefentextPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getFcdefentext(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj3->initFcbanents();
				$obj3->addFcbanent($obj1);
			}

			$omClass = FcdeftipdocPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getFcdeftipdoc(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj4->initFcbanents();
				$obj4->addFcbanent($obj1);
			}

			$omClass = FcdefubifisPeer::getOMClass();

	
			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);
			
			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getFcdefubifis(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addFcbanent($obj1);
					break;
				}
			}
			
			if ($newObject) {
				$obj5->initFcbanents();
				$obj5->addFcbanent($obj1);
			}

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
		return FcbanentPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}


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
			$comparison = $criteria->getComparison(FcbanentPeer::ID);
			$selectCriteria->add(FcbanentPeer::ID, $criteria->remove(FcbanentPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(FcbanentPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(FcbanentPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Fcbanent) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(FcbanentPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Fcbanent $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(FcbanentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(FcbanentPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(FcbanentPeer::DATABASE_NAME, FcbanentPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = FcbanentPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(FcbanentPeer::DATABASE_NAME);

		$criteria->add(FcbanentPeer::ID, $pk);


		$v = FcbanentPeer::doSelect($criteria, $con);

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
			$criteria->add(FcbanentPeer::ID, $pks, Criteria::IN);
			$objs = FcbanentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseFcbanentPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/FcbanentMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.FcbanentMapBuilder');
}
