<?php


abstract class BaseTsrepret extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codrep;


	
	protected $codret;


	
	protected $id;

	
	protected $aOptipret;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

  
  public function getCodrep()
  {

    return trim($this->codrep);

  }
  
  public function getCodret()
  {

    return trim($this->codret);

  }
  
  public function getId()
  {

    return $this->id;

  }
	
	public function setCodrep($v)
	{

    if ($this->codrep !== $v) {
        $this->codrep = $v;
        $this->modifiedColumns[] = TsrepretPeer::CODREP;
      }
  
	} 
	
	public function setCodret($v)
	{

    if ($this->codret !== $v) {
        $this->codret = $v;
        $this->modifiedColumns[] = TsrepretPeer::CODRET;
      }
  
		if ($this->aOptipret !== null && $this->aOptipret->getCodtip() !== $v) {
			$this->aOptipret = null;
		}

	} 
	
	public function setId($v)
	{

    if ($this->id !== $v) {
        $this->id = $v;
        $this->modifiedColumns[] = TsrepretPeer::ID;
      }
  
	} 
  
  public function hydrate(ResultSet $rs, $startcol = 1)
  {
    try {

      $this->codrep = $rs->getString($startcol + 0);

      $this->codret = $rs->getString($startcol + 1);

      $this->id = $rs->getInt($startcol + 2);

      $this->resetModified();

      $this->setNew(false);

      $this->afterHydrate();

            return $startcol + 3; 
    } catch (Exception $e) {
      throw new PropelException("Error populating Tsrepret object", $e);
    }
  }


  protected function afterHydrate()
  {

  }
    
  
  public function __call($m, $a)
    {
      $prefijo = substr($m,0,3);
    $metodo = strtolower(substr($m,3));
        if($prefijo=='get'){
      if(isset($this->$metodo)) return $this->$metodo;
      else return '';
    }elseif($prefijo=='set'){
      if(isset($this->$metodo)) $this->$metodo = $a[0];
    }else call_user_func_array($m, $a);

    }

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TsrepretPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TsrepretPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TsrepretPeer::DATABASE_NAME);
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


												
			if ($this->aOptipret !== null) {
				if ($this->aOptipret->isModified()) {
					$affectedRows += $this->aOptipret->save($con);
				}
				$this->setOptipret($this->aOptipret);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TsrepretPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TsrepretPeer::doUpdate($this, $con);
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


												
			if ($this->aOptipret !== null) {
				if (!$this->aOptipret->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOptipret->getValidationFailures());
				}
			}


			if (($retval = TsrepretPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TsrepretPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodrep();
				break;
			case 1:
				return $this->getCodret();
				break;
			case 2:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TsrepretPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodrep(),
			$keys[1] => $this->getCodret(),
			$keys[2] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TsrepretPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodrep($value);
				break;
			case 1:
				$this->setCodret($value);
				break;
			case 2:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TsrepretPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodrep($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodret($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TsrepretPeer::DATABASE_NAME);

		if ($this->isColumnModified(TsrepretPeer::CODREP)) $criteria->add(TsrepretPeer::CODREP, $this->codrep);
		if ($this->isColumnModified(TsrepretPeer::CODRET)) $criteria->add(TsrepretPeer::CODRET, $this->codret);
		if ($this->isColumnModified(TsrepretPeer::ID)) $criteria->add(TsrepretPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TsrepretPeer::DATABASE_NAME);

		$criteria->add(TsrepretPeer::ID, $this->id);

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

		$copyObj->setCodrep($this->codrep);

		$copyObj->setCodret($this->codret);


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
			self::$peer = new TsrepretPeer();
		}
		return self::$peer;
	}

	
	public function setOptipret($v)
	{


		if ($v === null) {
			$this->setCodret(NULL);
		} else {
			$this->setCodret($v->getCodtip());
		}


		$this->aOptipret = $v;
	}


	
	public function getOptipret($con = null)
	{
		if ($this->aOptipret === null && (($this->codret !== "" && $this->codret !== null))) {
						include_once 'lib/model/om/BaseOptipretPeer.php';

			$this->aOptipret = OptipretPeer::retrieveByPK($this->codret, $con);

			
		}
		return $this->aOptipret;
	}

} 