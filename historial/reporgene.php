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

    $this->Cell(100,10,utf8_decode('Registro de Pacientes en el Sistema'),1,0,'C');
    $this->Ln(20);

    $this->Cell(30,10,utf8_decode('Cédula'),1,0,'C',0);
    $this->Cell(30,10,'Nombre',1,0,'C');
    $this->Cell(30,10,'Apellido',1,0,'C');
    $this->Cell(30,10,utf8_decode('Género'),1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Teléfono'),1,0,'C',0);
    $this->Cell(40,10,'Nacionalidad',1,1,'C',0);

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
$resultado = "SELECT * FROM paciente";
$query= mysqli_query($conexion,$resultado);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row=mysqli_fetch_array($query)) {
    $pdf->Cell(1);
    $pdf->Cell(30,8,$row["Cedula_Paciente"], 1, 0, 'C', 0);
    $pdf->Cell(30,8,utf8_decode($row["Nombre_Paciente"]), 1, 0, 'C', 0);
    $pdf->Cell(30,8,utf8_decode($row["Apellidos_Paciente"]), 1, 0, 'C', 0);
    $pdf->Cell(30,8,utf8_decode($row["Sexo_Paciente"]), 1, 0, 'C', 0);
    $pdf->Cell(30,8,$row["Telefonos_Paciente"], 1, 0, 'C', 0);
    $pdf->Cell(40,8,utf8_decode($row["Nac_Paciente"]), 1, 1, 'C', 0);
}

$pdf->Output('D','reporte_General_de_pacientes.pdf');
?>