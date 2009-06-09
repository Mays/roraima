<?php


abstract class BaseNpvacjorlab extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codnom;


	
	protected $lunes;


	
	protected $martes;


	
	protected $miercoles;


	
	protected $jueves;


	
	protected $viernes;


	
	protected $sabado;


	
	protected $domingo;


	
	protected $codcar;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

  
  public function getCodnom()
  {

    return trim($this->codnom);

  }
  
  public function getLunes()
  {

    return trim($this->lunes);

  }
  
  public function getMartes()
  {

    return trim($this->martes);

  }
  
  public function getMiercoles()
  {

    return trim($this->miercoles);

  }
  
  public function getJueves()
  {

    return trim($this->jueves);

  }
  
  public function getViernes()
  {

    return trim($this->viernes);

  }
  
  public function getSabado()
  {

    return trim($this->sabado);

  }
  
  public function getDomingo()
  {

    return trim($this->domingo);

  }
  
  public function getCodcar()
  {

    return trim($this->codcar);

  }
  
  public function getId()
  {

    return $this->id;

  }
	
	public function setCodnom($v)
	{

    if ($this->codnom !== $v) {
        $this->codnom = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::CODNOM;
      }
  
	} 
	
	public function setLunes($v)
	{

    if ($this->lunes !== $v) {
        $this->lunes = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::LUNES;
      }
  
	} 
	
	public function setMartes($v)
	{

    if ($this->martes !== $v) {
        $this->martes = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::MARTES;
      }
  
	} 
	
	public function setMiercoles($v)
	{

    if ($this->miercoles !== $v) {
        $this->miercoles = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::MIERCOLES;
      }
  
	} 
	
	public function setJueves($v)
	{

    if ($this->jueves !== $v) {
        $this->jueves = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::JUEVES;
      }
  
	} 
	
	public function setViernes($v)
	{

    if ($this->viernes !== $v) {
        $this->viernes = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::VIERNES;
      }
  
	} 
	
	public function setSabado($v)
	{

    if ($this->sabado !== $v) {
        $this->sabado = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::SABADO;
      }
  
	} 
	
	public function setDomingo($v)
	{

    if ($this->domingo !== $v) {
        $this->domingo = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::DOMINGO;
      }
  
	} 
	
	public function setCodcar($v)
	{

    if ($this->codcar !== $v) {
        $this->codcar = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::CODCAR;
      }
  
	} 
	
	public function setId($v)
	{

    if ($this->id !== $v) {
        $this->id = $v;
        $this->modifiedColumns[] = NpvacjorlabPeer::ID;
      }
  
	} 
  
  public function hydrate(ResultSet $rs, $startcol = 1)
  {
    try {

      $this->codnom = $rs->getString($startcol + 0);

      $this->lunes = $rs->getString($startcol + 1);

      $this->martes = $rs->getString($startcol + 2);

      $this->miercoles = $rs->getString($startcol + 3);

      $this->jueves = $rs->getString($startcol + 4);

      $this->viernes = $rs->getString($startcol + 5);

      $this->sabado = $rs->getString($startcol + 6);

      $this->domingo = $rs->getString($startcol + 7);

      $this->codcar = $rs->getString($startcol + 8);

      $this->id = $rs->getInt($startcol + 9);

      $this->resetModified();

      $this->setNew(false);

      $this->afterHydrate();

            return $startcol + 10; 
    } catch (Exception $e) {
      throw new PropelException("Error populating Npvacjorlab object", $e);
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
			$con = Propel::getConnection(NpvacjorlabPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NpvacjorlabPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NpvacjorlabPeer::DATABASE_NAME);
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
					$pk = NpvacjorlabPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += NpvacjorlabPeer::doUpdate($this, $con);
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


			if (($retval = NpvacjorlabPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpvacjorlabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodnom();
				break;
			case 1:
				return $this->getLunes();
				break;
			case 2:
				return $this->getMartes();
				break;
			case 3:
				return $this->getMiercoles();
				break;
			case 4:
				return $this->getJueves();
				break;
			case 5:
				return $this->getViernes();
				break;
			case 6:
				return $this->getSabado();
				break;
			case 7:
				return $this->getDomingo();
				break;
			case 8:
				return $this->getCodcar();
				break;
			case 9:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpvacjorlabPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodnom(),
			$keys[1] => $this->getLunes(),
			$keys[2] => $this->getMartes(),
			$keys[3] => $this->getMiercoles(),
			$keys[4] => $this->getJueves(),
			$keys[5] => $this->getViernes(),
			$keys[6] => $this->getSabado(),
			$keys[7] => $this->getDomingo(),
			$keys[8] => $this->getCodcar(),
			$keys[9] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NpvacjorlabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodnom($value);
				break;
			case 1:
				$this->setLunes($value);
				break;
			case 2:
				$this->setMartes($value);
				break;
			case 3:
				$this->setMiercoles($value);
				break;
			case 4:
				$this->setJueves($value);
				break;
			case 5:
				$this->setViernes($value);
				break;
			case 6:
				$this->setSabado($value);
				break;
			case 7:
				$this->setDomingo($value);
				break;
			case 8:
				$this->setCodcar($value);
				break;
			case 9:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NpvacjorlabPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodnom($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLunes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMartes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMiercoles($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setJueves($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setViernes($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSabado($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDomingo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCodcar($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setId($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NpvacjorlabPeer::DATABASE_NAME);

		if ($this->isColumnModified(NpvacjorlabPeer::CODNOM)) $criteria->add(NpvacjorlabPeer::CODNOM, $this->codnom);
		if ($this->isColumnModified(NpvacjorlabPeer::LUNES)) $criteria->add(NpvacjorlabPeer::LUNES, $this->lunes);
		if ($this->isColumnModified(NpvacjorlabPeer::MARTES)) $criteria->add(NpvacjorlabPeer::MARTES, $this->martes);
		if ($this->isColumnModified(NpvacjorlabPeer::MIERCOLES)) $criteria->add(NpvacjorlabPeer::MIERCOLES, $this->miercoles);
		if ($this->isColumnModified(NpvacjorlabPeer::JUEVES)) $criteria->add(NpvacjorlabPeer::JUEVES, $this->jueves);
		if ($this->isColumnModified(NpvacjorlabPeer::VIERNES)) $criteria->add(NpvacjorlabPeer::VIERNES, $this->viernes);
		if ($this->isColumnModified(NpvacjorlabPeer::SABADO)) $criteria->add(NpvacjorlabPeer::SABADO, $this->sabado);
		if ($this->isColumnModified(NpvacjorlabPeer::DOMINGO)) $criteria->add(NpvacjorlabPeer::DOMINGO, $this->domingo);
		if ($this->isColumnModified(NpvacjorlabPeer::CODCAR)) $criteria->add(NpvacjorlabPeer::CODCAR, $this->codcar);
		if ($this->isColumnModified(NpvacjorlabPeer::ID)) $criteria->add(NpvacjorlabPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NpvacjorlabPeer::DATABASE_NAME);

		$criteria->add(NpvacjorlabPeer::ID, $this->id);

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

		$copyObj->setCodnom($this->codnom);

		$copyObj->setLunes($this->lunes);

		$copyObj->setMartes($this->martes);

		$copyObj->setMiercoles($this->miercoles);

		$copyObj->setJueves($this->jueves);

		$copyObj->setViernes($this->viernes);

		$copyObj->setSabado($this->sabado);

		$copyObj->setDomingo($this->domingo);

		$copyObj->setCodcar($this->codcar);


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
			self::$peer = new NpvacjorlabPeer();
		}
		return self::$peer;
	}

} 