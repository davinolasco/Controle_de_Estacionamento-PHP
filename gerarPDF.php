<?php

include 'fpdf/fpdf.php';
include 'conexao.php';

$vagas = selectAllVagas();

$pdf = new FPDF();
$pdf->AddPage();
//para o cabeçalho
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de cadastros do estacionamento'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",6.5);
$pdf->Cell(27,7,"Vaga do estacionamento",1,0,"C");
$pdf->Cell(27,7,"Nome do dono",1,0,"C");
$pdf->Cell(27,7,"Tipo do veiculo",1,0,"C");
$pdf->Cell(27,7,"Fabricante do veiculo",1,0,"C");
$pdf->Cell(27,7,"Modelo do veiculo",1,0,"C");
$pdf->Cell(27,7,"Placa do veiculo",1,0,"C");
$pdf->Cell(27,7,"Cor do veiculo",1,0,"C");
$pdf->Ln();

foreach ($vagas as $vaga){
    $pdf->Cell(27,5,($vaga["idvaga"]),1,0,"C");
    $pdf->Cell(27,5,utf8_decode($vaga["dono"]),1,0,"C");
    $pdf->Cell(27,5,utf8_decode($vaga["tipo"]),1,0,"C");
    $pdf->Cell(27,5,utf8_decode($vaga["marcas"]),1,0,"C");
    $pdf->Cell(27,5,utf8_decode($vaga["modelo"]),1,0,"C");
    $pdf->Cell(27,5,utf8_decode($vaga["placa"]),1,0,"C");
    $pdf->Cell(27,5,utf8_decode($vaga["cor"]),1,0,"C");
    $pdf->Ln();
}

$pdf->Output();
