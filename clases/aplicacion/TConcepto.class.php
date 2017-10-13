<?php
/**
* TConcepto
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TConcepto{
	private $idConcepto;
	private $idProducto;
	private $descripcion;
	private $venta;
	private $visible;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TConcepto($id = ''){
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
		$sql = "select * from concepto where idConcepto = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		foreach($rs->fetch_assoc() as $field => $val)
			$this->$field = $val;
		
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
		return $this->idConcepto;
	}
	
	/**
	* Establece el identificador del producto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setProducto($val = ''){
		$this->idProducto = $val;
		return true;
	}
	
	/**
	* Retorna el identificador del producto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getProducto(){
		return $this->idProducto;
	}
	
	/**
	* Establece la descripción del producto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		return true;
	}
	
	/**
	* Retorna la descripción del producto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPrecio($val = 0){
		$this->precio = $val;
		return true;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPrecio(){
		return $this->precio == ''?0:$this->precio;
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
		if ($this->getProducto() == '') return false;
		
		if ($this->getId() == ''){
			$sql = "INSERT INTO concepto(idProducto) VALUES(".$this->getProducto().");";
			$rs = $db->query($sql) or errorMySQL($db, $sql);;
			if (!$rs) return false;
			
			$this->idConcepto = $db->insert_id;
		}
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE concepto
			SET
				precio = ".$this->getPrecio().",
				descripcion = '".mysql_real_escape_string($this->getDescripcion())."'
			WHERE idConcepto = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update concepto set visible = false where idConcepto = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
}
?>