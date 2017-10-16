<?php
/**
* TOrden
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TOrden{
	private $idOrden;
	public $estado;
	private $sesion;
	private $fecha;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TOrden($id = ''){
		$this->estado = new TEstado(1);
		if ($id == ''){
			$db = TBase::conectaDB();
			$sql = "select idOrden from orden where sesion = '".session_id()."'";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			$row = $rs->fetch_assoc();
			$id = $row['idOrden'];
		}
		
		$this->setId($id);
		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "select * from orden where idOrden = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				case 'idEstado':
					$this->estado = new TEstado;
				break;
				default:
					$this->$field = $val;
				break;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el id
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getId(){
		return $this->idOrden;
	}
	
	/**
	* Establece el id de sesión en php
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSesion($val = ''){
		$this->sesion = $val;
		return true;
	}
	
	/**
	* Retorna el id de sesión de php
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSesion(){
		return $this->sesion;
	}
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		$this->fecha = $val;
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha == ''?date("Y-m-d"):$this->fecha;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$this->setSesion(session_id());
			$sql = "INSERT INTO orden(idEstado, sesion, fecha) VALUES('".$this->estado->getId()."', '".$this->getSesion()."', '".$this->getFecha()."');";
			$rs = $db->query($sql) or errorMySQL($db, $sql);;
			if (!$rs) return false;
			
			$this->idEstado = $db->insert_id;
		}
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE orden
			SET
				idEstado = ".$this->estado->getId()."
			WHERE idOrden = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Guarda/actualiza un movimiento
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	public function addMovimiento($objConcepto = "", $cantidad = 0){
		if ($objConcepto == '') return false;
		if (!is_object($objConcepto)) return false;
		if ($objConcepto->getId() == '') return false;
		if ($cantidad == '') return false;
		
		if ($this->getId() == '') $this->guardar();
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "select * from movimiento where idOrden = ".$this->getId()." and idConcepto = ".$objConcepto->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		if ($rs->num_rows > 0)
			$sql = "update movimiento set 
				cantidad = cantidad + ".$cantidad.",
				fecha = now()
			where idOrden = ".$this->getId()." and idConcepto = ".$objConcepto->getId();
		else
			$sql = "insert into movimiento (idOrden, fecha, idConcepto, cantidad, precio) values (".$this->getId().", now(), ".$objConcepto->getId().", ".$cantidad.", ".$objConcepto->getPrecio().")";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		return $rs?true:false;
	}
	
	/**
	* Borra un movimiento
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	public function delMovimiento($idConcepto = ''){
		if ($this->getId() == '') return false;
		if ($idConcepto == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "delete from movimiento where idOrden = ".$this->getId()." and idConcepto = ".$objConcepto->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
	
	/**
	* Retorna la cantidad de productos agregados a la orden
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	public function getTotalProductos(){
		if ($this->getId() == '') return 0;
		
		$db = TBase::conectaDB();
		$sql = "select sum(cantidad) as total from movimiento where idOrden = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$row = $rs->fetch_assoc();
		
		return $row['total'] == ''?0:$row['total'];
	}
}
?>