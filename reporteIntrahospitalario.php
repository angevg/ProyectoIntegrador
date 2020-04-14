<?php 
include 'conexion.php';
include 'plantillaintrahospitalarios.php';

$query="SELECT Id_intrahospitalario, I_nombre, I_apellidos, I_edad, I_cedula, I_telefono, I_tipoSeguro, I_afiliadoNumero, I_fechaI FROM tingresointrahospitalario";
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
 $pdf->Cell(10,6,$row['Id_intrahospitalario'],1,0, 'C');
 $pdf->Cell(20,6, $row['I_nombre'],1,0, 'C');
  $pdf->Cell(40,6,$row['I_apellidos'],1,0, 'C');
   $pdf->Cell(10,6,$row['I_edad'],1,0, 'C');
 $pdf->Cell(22,6,$row['I_cedula'],1,0, 'C');
 $pdf->Cell(20,6,$row['I_telefono'],1,0, 'C');
 $pdf->Cell(20,6,$row['I_tipoSeguro'],1,0, 'C');
 $pdf->Cell(22,6, $row['I_afiliadoNumero'],1,0, 'C');
 	 $pdf->Cell(24,6,$row['I_fechaI'],1,1, 'C');

}
 $pdf->Output();



?>