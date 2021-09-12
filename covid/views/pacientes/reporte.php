<?php

//incluir libreria
require_once('../../controllers/pdf/fpdf.php');

//conexion
require_once('../../model/connection.php');

//para consultar
require_once('../../model/Paciente.php');

try {

    // crear el documento
    $pdf = new FPDF();
    $pdf->AddPage();
        
    //metadatos
    $pdf->SetTitle('Reportes pacientes COVID - 19');
    $pdf->SetAuthor('Jaasiel Guerra');
    $pdf->SetCreator('Guerra');
    
    // agregar el titulo
    $pdf->SetFont('Arial', 'B', 24);
    $pdf->Cell(0, 10, 'Reporte de pacientes COVID - 19', 0, 1, 'C');
    $pdf->Ln();

    // Encabezado de la tabla
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(10, 10, 'Id', 0, 0, 'L');
    $pdf->Cell(30, 10, 'Nombre', 0, 0, 'L');
    $pdf->Cell(30, 10, 'Apellido', 0, 0, 'L');
    $pdf->Cell(80, 10, 'Sintomas', 0, 0, 'L');
    $pdf->Cell(20, 10, 'Gravedad', 0, 1, 'L');



    //llenar el pdf con datos
    $alumnos = Paciente::all();

    foreach($alumnos as $a){
        
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(10, 5, $a->getIdPaciente(), 0, 0, 'L');
        $pdf->Cell(30, 5, $a->getNombre(), 0, 0, 'L');
        $pdf->Cell(30, 5, $a->getApellido(), 0, 0, 'L');
        $pdf->Cell(80, 5, $a->getSintomas(), 0, 0, 'L');
        $pdf->Cell(20, 5, $a->getGravedad(), 0, 1, 'L');
    }

    // metodo para generar el pdf
    $pdf->Output('', 'Pacientes.pdf', true);

} catch (Exception $ex) {
    echo "Error: " . +$ex->getMessage();
}
