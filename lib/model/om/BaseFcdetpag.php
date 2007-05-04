<?php


abstract class BaseFcdetpag extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $numpag;


	
	protected $nrodet;


	
	protected $monpag;


	
	protected $tippag;


	
	protected $id;

	
	protected $aFcpagos;

	
	protected $aFctippag;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getNumpag()
	{

		return $this->numpag;
	}

	
	public function getNrodet()
	{

		return $this->nrodet;
	}

	
	public function getMonpag()
	{

		return $this->monpag;
	}

	
	public function getTippag()
	{

		return $this->tippag;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setNumpag($v)
	{

		if ($this->numpag !== $v) {
			$this->numpag = $v;
			$this->modifiedColumns[] = FcdetpagPeer::NUMPAG;
		}

		if ($this->aFcpagos !== null && $this->aFcpagos->getNumpag() !== $v) {
			$this->aFcpagos = null;
		}

	} 
	
	public function setNrodet($v)
	{

		if ($this->nrodet !== $v) {
			$this->nrodet = $v;
			$this->modifiedColumns[] = FcdetpagPeer::NRODET;
		}

	} 
	
	public function setMonpag($v)
	{

		if ($this->monpag !== $v) {
			$this->monpag = $v;
			$this->modifiedColumns[] = FcdetpagPeer::MONPAG;
		}

	} 
	
	public function setTippag($v)
	{

		if ($this->tippag !== $v) {
			$this->tippag = $v;
			$this->modifiedColumns[] = FcdetpagPeer::TIPPAG;
		}

		if ($this->aFctippag !== null && $this->aFctippag->getTippag() !== $v) {
			$this->aFctippag = null;
		}

	} 
	
	public function setId($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FcdetpagPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->numpag = $rs->getString($startcol + 0);

			$this->nrodet = $rs->getString($startcol + 1);

			$this->monpag = $rs->getFloat($startcol + 2);

			$this->tippag = $rs->getString($startcol + 3);

			$this->id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Fcdetpag object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FcdetpagPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FcdetpagPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FcdetpagPeer::DATABASE_NAME);
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


												
			if ($this->aFcpagos !== null) {
				if ($this->aFcpagos->isModified()) {
					$affectedRows += $this->aFcpagos->save($con);
				}
				$this->setFcpagos($this->aFcpagos);
			}

			if ($this->aFctippag !== null) {
				if ($this->aFctippag->isModified()) {
					$affectedRows += $this->aFctippag->save($con);
				}
				$this->setFctippag($this->aFctippag);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = FcdetpagPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += FcdetpagPeer::doUpdate($this, $con);
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


												
			if ($this->aFcpagos !== null) {
				if (!$this->aFcpagos->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFcpagos->getValidationFailures());
				}
			}

			if ($this->aFctippag !== null) {
				if (!$this->aFctippag->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFctippag->getValidationFailures());
				}
			}


			if (($retval = FcdetpagPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FcdetpagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getNumpag();
				break;
			case 1:
				return $this->getNrodet();
				break;
			case 2:
				return $this->getMonpag();
				break;
			case 3:
				return $this->getTippag();
				break;
			case 4:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FcdetpagPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getNumpag(),
			$keys[1] => $this->getNrodet(),
			$keys[2] => $this->getMonpag(),
			$keys[3] => $this->getTippag(),
			$keys[4] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FcdetpagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setNumpag($value);
				break;
			case 1:
				$this->setNrodet($value);
				break;
			case 2:
				$this->setMonpag($value);
				break;
			case 3:
				$this->setTippag($value);
				break;
			case 4:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FcdetpagPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setNumpag($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNrodet($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMonpag($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTippag($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FcdetpagPeer::DATABASE_NAME);

		if ($this->isColumnModified(FcdetpagPeer::NUMPAG)) $criteria->add(FcdetpagPeer::NUMPAG, $this->numpag);
		if ($this->isColumnModified(FcdetpagPeer::NRODET)) $criteria->add(FcdetpagPeer::NRODET, $this->nrodet);
		if ($this->isColumnModified(FcdetpagPeer::MONPAG)) $criteria->add(FcdetpagPeer::MONPAG, $this->monpag);
		if ($this->isColumnModified(FcdetpagPeer::TIPPAG)) $criteria->add(FcdetpagPeer::TIPPAG, $this->tippag);
		if ($this->isColumnModified(FcdetpagPeer::ID)) $criteria->add(FcdetpagPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FcdetpagPeer::DATABASE_NAME);

		$criteria->add(FcdetpagPeer::ID, $this->id);

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

		$copyObj->setNumpag($this->numpag);

		$copyObj->setNrodet($this->nrodet);

		$copyObj->setMonpag($this->monpag);

		$copyObj->setTippag($this->tippag);


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
			self::$peer = new FcdetpagPeer();
		}
		return self::$peer;
	}

	
	public function setFcpagos($v)
	{


		if ($v === null) {
			$this->setNumpag(NULL);
		} else {
			$this->setNumpag($v->getNumpag());
		}


		$this->aFcpagos = $v;
	}


	
	public function getFcpagos($con = null)
	{
				include_once 'lib/model/om/BaseFcpagosPeer.php';

		if ($this->aFcpagos === null && (($this->numpag !== "" && $this->numpag !== null))) {

			$this->aFcpagos = FcpagosPeer::retrieveByPK($this->numpag, $con);

			
		}
		return $this->aFcpagos;
	}

	
	public function setFctippag($v)
	{


		if ($v === null) {
			$this->setTippag(NULL);
		} else {
			$this->setTippag($v->getTippag());
		}


		$this->aFctippag = $v;
	}


	
	public function getFctippag($con = null)
	{
				include_once 'lib/model/om/BaseFctippagPeer.php';

		if ($this->aFctippag === null && (($this->tippag !== "" && $this->tippag !== null))) {

			$this->aFctippag = FctippagPeer::retrieveByPK($this->tippag, $con);

			
		}
		return $this->aFctippag;
	}

} 