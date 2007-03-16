<?php


abstract class BaseCarecaud extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codrec;


	
	protected $desrec;


	
	protected $limrec;


	
	protected $fecemi;


	
	protected $fecven;


	
	protected $canutr;


	
	protected $codtiprec;


	
	protected $observ;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodrec()
	{

		return $this->codrec;
	}

	
	public function getDesrec()
	{

		return $this->desrec;
	}

	
	public function getLimrec()
	{

		return $this->limrec;
	}

	
	public function getFecemi($format = 'Y-m-d')
	{

		if ($this->fecemi === null || $this->fecemi === '') {
			return null;
		} elseif (!is_int($this->fecemi)) {
						$ts = strtotime($this->fecemi);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecemi] as date/time value: " . var_export($this->fecemi, true));
			}
		} else {
			$ts = $this->fecemi;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFecven($format = 'Y-m-d')
	{

		if ($this->fecven === null || $this->fecven === '') {
			return null;
		} elseif (!is_int($this->fecven)) {
						$ts = strtotime($this->fecven);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecven] as date/time value: " . var_export($this->fecven, true));
			}
		} else {
			$ts = $this->fecven;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCanutr()
	{

		return $this->canutr;
	}

	
	public function getCodtiprec()
	{

		return $this->codtiprec;
	}

	
	public function getObserv()
	{

		return $this->observ;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setCodrec($v)
	{

		if ($this->codrec !== $v) {
			$this->codrec = $v;
			$this->modifiedColumns[] = CarecaudPeer::CODREC;
		}

	} 
	
	public function setDesrec($v)
	{

		if ($this->desrec !== $v) {
			$this->desrec = $v;
			$this->modifiedColumns[] = CarecaudPeer::DESREC;
		}

	} 
	
	public function setLimrec($v)
	{

		if ($this->limrec !== $v) {
			$this->limrec = $v;
			$this->modifiedColumns[] = CarecaudPeer::LIMREC;
		}

	} 
	
	public function setFecemi($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecemi] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecemi !== $ts) {
			$this->fecemi = $ts;
			$this->modifiedColumns[] = CarecaudPeer::FECEMI;
		}

	} 
	
	public function setFecven($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecven] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecven !== $ts) {
			$this->fecven = $ts;
			$this->modifiedColumns[] = CarecaudPeer::FECVEN;
		}

	} 
	
	public function setCanutr($v)
	{

		if ($this->canutr !== $v) {
			$this->canutr = $v;
			$this->modifiedColumns[] = CarecaudPeer::CANUTR;
		}

	} 
	
	public function setCodtiprec($v)
	{

		if ($this->codtiprec !== $v) {
			$this->codtiprec = $v;
			$this->modifiedColumns[] = CarecaudPeer::CODTIPREC;
		}

	} 
	
	public function setObserv($v)
	{

		if ($this->observ !== $v) {
			$this->observ = $v;
			$this->modifiedColumns[] = CarecaudPeer::OBSERV;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CarecaudPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->codrec = $rs->getString($startcol + 0);

			$this->desrec = $rs->getString($startcol + 1);

			$this->limrec = $rs->getString($startcol + 2);

			$this->fecemi = $rs->getDate($startcol + 3, null);

			$this->fecven = $rs->getDate($startcol + 4, null);

			$this->canutr = $rs->getFloat($startcol + 5);

			$this->codtiprec = $rs->getString($startcol + 6);

			$this->observ = $rs->getString($startcol + 7);

			$this->id = $rs->getInt($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Carecaud object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CarecaudPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CarecaudPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CarecaudPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CarecaudPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += CarecaudPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = CarecaudPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CarecaudPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodrec();
				break;
			case 1:
				return $this->getDesrec();
				break;
			case 2:
				return $this->getLimrec();
				break;
			case 3:
				return $this->getFecemi();
				break;
			case 4:
				return $this->getFecven();
				break;
			case 5:
				return $this->getCanutr();
				break;
			case 6:
				return $this->getCodtiprec();
				break;
			case 7:
				return $this->getObserv();
				break;
			case 8:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CarecaudPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodrec(),
			$keys[1] => $this->getDesrec(),
			$keys[2] => $this->getLimrec(),
			$keys[3] => $this->getFecemi(),
			$keys[4] => $this->getFecven(),
			$keys[5] => $this->getCanutr(),
			$keys[6] => $this->getCodtiprec(),
			$keys[7] => $this->getObserv(),
			$keys[8] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CarecaudPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodrec($value);
				break;
			case 1:
				$this->setDesrec($value);
				break;
			case 2:
				$this->setLimrec($value);
				break;
			case 3:
				$this->setFecemi($value);
				break;
			case 4:
				$this->setFecven($value);
				break;
			case 5:
				$this->setCanutr($value);
				break;
			case 6:
				$this->setCodtiprec($value);
				break;
			case 7:
				$this->setObserv($value);
				break;
			case 8:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CarecaudPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodrec($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDesrec($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLimrec($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFecemi($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFecven($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCanutr($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCodtiprec($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setObserv($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setId($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CarecaudPeer::DATABASE_NAME);

		if ($this->isColumnModified(CarecaudPeer::CODREC)) $criteria->add(CarecaudPeer::CODREC, $this->codrec);
		if ($this->isColumnModified(CarecaudPeer::DESREC)) $criteria->add(CarecaudPeer::DESREC, $this->desrec);
		if ($this->isColumnModified(CarecaudPeer::LIMREC)) $criteria->add(CarecaudPeer::LIMREC, $this->limrec);
		if ($this->isColumnModified(CarecaudPeer::FECEMI)) $criteria->add(CarecaudPeer::FECEMI, $this->fecemi);
		if ($this->isColumnModified(CarecaudPeer::FECVEN)) $criteria->add(CarecaudPeer::FECVEN, $this->fecven);
		if ($this->isColumnModified(CarecaudPeer::CANUTR)) $criteria->add(CarecaudPeer::CANUTR, $this->canutr);
		if ($this->isColumnModified(CarecaudPeer::CODTIPREC)) $criteria->add(CarecaudPeer::CODTIPREC, $this->codtiprec);
		if ($this->isColumnModified(CarecaudPeer::OBSERV)) $criteria->add(CarecaudPeer::OBSERV, $this->observ);
		if ($this->isColumnModified(CarecaudPeer::ID)) $criteria->add(CarecaudPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CarecaudPeer::DATABASE_NAME);

		$criteria->add(CarecaudPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCodrec($this->codrec);

		$copyObj->setDesrec($this->desrec);

		$copyObj->setLimrec($this->limrec);

		$copyObj->setFecemi($this->fecemi);

		$copyObj->setFecven($this->fecven);

		$copyObj->setCanutr($this->canutr);

		$copyObj->setCodtiprec($this->codtiprec);

		$copyObj->setObserv($this->observ);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CarecaudPeer();
		}
		return self::$peer;
	}

} 