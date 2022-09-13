<?php
include 'seguridad.php';
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('vendor/bootstrap/css/img/encabezado.png',0,0,210,30);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(15);
    // Título
    // Salto de línea
    $this->Ln(30);
    // Título

    $this->Cell(100,10,utf8_decode('Registro de Pacientes Asistido en el Sistema'),1,0,'C');
    $this->Ln(20);
    $this->Cell(30,10,utf8_decode('Cedula'),1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Nombre'),1,0,'C',0);
    $this->Cell(40,10,'Apellidos',1,0,'C',0);
    $this->Cell(30,10,utf8_decode('historia'),1,0,'C',0);
    $this->Cell(30,10,'Fecha',1,0,'C');
    $this->Cell(30,10,'Hora',1,1,'C');


    $this->Ln(5);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$variable1= "V25495706";

// Creación del objeto de la clase heredada
include("../conexion.php");
$resultado = "SELECT paciente.idPaciente, paciente.HistoraPaciente_idHistoraPaciente,paciente.Cedula_Paciente,paciente.Nombre_Paciente,paciente.Apellidos_Paciente,citaservicios.idCitaServicios,citaservicios.Paciente_idPaciente,citaservicios.Fecha_Cita,citaservicios.Hora_Cita FROM paciente,citaservicios WHERE citaservicios.Paciente_idPaciente=paciente.idPaciente AND citaservicios.status like 1";
$query= mysqli_query($conexion,$resultado);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row=mysqli_fetch_array($query)) {
    $pdf->Cell(1);
    $pdf->Cell(30,8,$row["HistoraPaciente_idHistoraPaciente"], 1, 0, 'C', 0);
    $pdf->Cell(30,8,utf8_decode($row["Cedula_Paciente"]), 1, 0, 'C', 0);
    $pdf->Cell(30,8,$row["Nombre_Paciente"], 1, 0, 'C', 0);
    $pdf->Cell(30,8,utf8_decode($row["Apellidos_Paciente"]), 1, 0, 'C', 0);
    $pdf->Cell(30,8,utf8_decode($row["Fecha_Cita"]), 1, 0, 'C', 0);
    $pdf->Cell(40,8,utf8_decode($row["Hora_Cita"]), 1, 1, 'C', 0);
  
}

$pdf->Output('D','reporte_de_pacientes_asistido.pdf');
?>