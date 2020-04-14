<?php 
require 'pdf/fpdf/fpdf.php';

class PDF extends FPDF
{
	
	function Header()
	{
	$this->Image('img/logo.jpg', 5, 5, 30);
	$this->SetFont('Arial', 'B', 15);
	$this->Cell(20);
	$this->Cell(120,10, 'Reporte de Ingresos por Emergencia', 0,0,'C');

	$this->Ln(20);
	}

	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

 ?>