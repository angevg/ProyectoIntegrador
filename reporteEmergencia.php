<?php 
include 'conexion.php';
include 'plantillaEmergencia.php';

$query="SELECT Id_emergencia, E_nombre, E_apellidos, E_edad, E_cedula, E_telefono, E_tipoSeguro, E_afiliadoNumero, E_fechaI FROM tingresoemergencia";
$resultado = $mysqli->query($query);

 $pdf = new PDF();
$pdf->AliasNbPages();
 $pdf->AddPage();

$pdf->SetFillColor(232,232,232);
 $pdf->SetFont('Arial', 'B', 9);
 $pdf->Cell(10,6, 'ID',1,0, 'C',1);
 $pdf->Cell(20,6, 'Nombre',1,0, 'C',1);
  $pdf->Cell(40,6, 'Apellidos',1,0, 'C',1);
   $pdf->Cell(10,6, 'Edad',1,0, 'C',1);
   $pdf->Cell(22,6, 'Cedula',1,0, 'C',1);
 $pdf->Cell(20,6, 'Telefono',1,0, 'C',1);
 $pdf->Cell(20,6, 'Seguro',1,0, 'C',1);
 $pdf->Cell(22,6, 'N. Afiliado',1,0, 'C',1);
 $pdf->Cell(24,6, 'Fecha Ingreso',1,1, 'C',1);

 $pdf->SetFont('Arial', '', 8);

while ($row =$resultado->fetch_assoc()) {
 $pdf->Cell(10,6,$row['Id_emergencia'],1,0, 'C');
 $pdf->Cell(20,6, $row['E_nombre'],1,0, 'C');
  $pdf->Cell(40,6,$row['E_apellidos'],1,0, 'C');
   $pdf->Cell(10,6,$row['E_edad'],1,0, 'C');
 $pdf->Cell(22,6,$row['E_cedula'],1,0, 'C');
 $pdf->Cell(20,6,$row['E_telefono'],1,0, 'C');
 $pdf->Cell(20,6,$row['E_tipoSeguro'],1,0, 'C');
 $pdf->Cell(22,6, $row['E_afiliadoNumero'],1,0, 'C');
 	 $pdf->Cell(24,6,$row['E_fechaI'],1,1, 'C');

}
 $pdf->Output();



?>