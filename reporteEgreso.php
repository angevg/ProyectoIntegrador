<?php 
include 'conexion.php';
include 'plantillaEgreso.php';

$query="SELECT Id_egreso, Eg_nombre, Eg_apellidos, Eg_estado, Eg_dias, Eg_cirugias, Eg_medico FROM tegreso";
$resultado = $mysqli->query($query);

 $pdf = new PDF();
$pdf->AliasNbPages();
 $pdf->AddPage();

$pdf->SetFillColor(232,232,232);
 $pdf->SetFont('Arial', 'B', 9);
 $pdf->Cell(10,6, 'ID',1,0, 'C',1);
 $pdf->Cell(20,6, 'Nombre',1,0, 'C',1);
  $pdf->Cell(35,6, 'Apellidos',1,0, 'C',1);
   $pdf->Cell(20,6, 'Estado',1,0, 'C',1);
   $pdf->Cell(40,6, 'Dias de Hospitalizacion',1,0, 'C',1);
      $pdf->Cell(20,6, 'Cirugias',1,0, 'C',1);
 $pdf->Cell(40,6, 'Dr. responsable',1,1, 'C',1);
 $pdf->SetFont('Arial', '', 8);

while ($row =$resultado->fetch_assoc()) {
 $pdf->Cell(10,6,$row['Id_egreso'],1,0, 'C');
 $pdf->Cell(20,6, $row['Eg_nombre'],1,0, 'C');
  $pdf->Cell(35,6,$row['Eg_apellidos'],1,0, 'C');
   $pdf->Cell(20,6,$row['Eg_estado'],1,0, 'C');
 $pdf->Cell(40,6,$row['Eg_dias'],1,0, 'C');
 $pdf->Cell(20,6,$row['Eg_cirugias'],1,0, 'C');
 $pdf->Cell(40,6,$row['Eg_medico'],1,1, 'C');


}
 $pdf->Output();



?>