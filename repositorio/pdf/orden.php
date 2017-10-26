<?php
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class ROrden extends tFPDF{
	private $orden;
	
	public function ROrden($id){
		$this->orden = new TOrden($id);
		
		parent::tFPDF('P', 'mm', array(187, 239));
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
		$this->SetAutoPageBreak(false, 0);
		//$this->formatoFondo = $formatoFondo;
		$this->AliasNbPages();
	}	
	
	public function AddPage(){
		parent::AddPage();
	}
	
	public function generar($id = ''){
		$orden = new TOrden($id);
		$this->AddPage();
		
		$this->SetFont('Arial', 'B', 10);
		$this->SetXY(0, 0);
		#$this->Image('repositorio/pdf/datos-orden.jpg', 0, 0, 190, 240);
		$this->SetFont('Arial', '', 8);
		$this->Image('repositorio/pdf/logo.jpg', 5, 5, 50, 20);
		$this->SetDrawColor(10);
		$this->SetXY(0, 10);
		$this->Cell(0, 5, utf8_decode("Donación: ").sprintf("%05d", $orden->getId()), 0, 1, 'R', 0);
		$this->Cell(0, 5, utf8_decode("Detalle de la donación"), 0, 1, 'R', 0);
		$this->Cell(0, 5, utf8_decode("Fecha").$orden->getFecha(), 0, 1, 'R', 0);
		$this->Ln(15);
		$this->Cell(10, 5, utf8_decode("Cant"), 1, 0, 'C', 1);
		$this->Cell(105, 5, utf8_decode("Producto"), 1, 0, 'C', 1);
		$this->Cell(25, 5, utf8_decode("P. U."), 1, 0, 'C', 1);
		$this->Cell(25, 5, utf8_decode("Monto"), 1, 0, 'C', 1);
		
		$sql = "select a.*, concat(b.descripcion, ' - ', d.nombre) as producto, cantidad * a.precio as total from movimiento a join concepto b using(idConcepto) join producto c using(idProducto) join categoria d using(idCategoria) where idOrden = ".$orden->getId();
		$db = TBase::conectaDB();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$this->Ln(5);
		while($row = $rs->fetch_assoc()){
			$this->Cell(10, 5, utf8_decode($row['cantidad']), 0, 0, 'R', 0);
			$this->Cell(105, 5, utf8_decode($row['producto']), 0, 0, 'L', 0);
			$this->Cell(25, 5, utf8_decode($row['precio']), 0, 0, 'R', 0);
			$this->Cell(25, 5, $row['total'], 0, 0, 'R', 0);
			$this->Ln(5);
			array_push($datos, $row);
		}
	}
		
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.pdf'){
            	$path = $dir.'/'.$file;
            	if($t-filemtime($path)>3600)
                	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function Output(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.pdf');
		$file .= '.pdf';
		parent::Output($file, 'F');
		chmod($file, 0555);
		#header('Location: temporal/'.$file);
		
		return $file;
	}
}
?>