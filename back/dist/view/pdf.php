<?php
  include '../pdf/plantilla.php';
  include "../controllers/reclamationc.php";
  require '../pdf/conexion.php'; 
  
  
  $query = "SELECT * FROM reclamation ";
  $resultado = $mysqli->query($query); 

  $reclamationc=new reclamationc();
    $reclamation=$reclamationc->afficherreclamation();
  
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  
  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  
  $pdf->Cell(30,6,'ID',1,0,'C',1);
  $pdf->Cell(30,6,'id_client',1,0,'C',1);
  $pdf->Cell(30,6,'type',1,0,'C',1); 
  $pdf->Cell(40,6,'date',1,0,'C',1); 
  $pdf->Cell(42,6,'description',1,0,'C',1); 
  $pdf->Cell(20,6,'etat',1,1,'C',1); 
  
  
  $pdf->SetFont('Arial','',10);
  
  while($row = $resultado->fetch_assoc())
  {
    $pdf->Cell(30,20,$row['id_reclamation'],1,0,'C');
    $pdf->Cell(30,20,utf8_decode($row['id_client']),1,0,'C'); 
    $pdf->Cell(30,20,utf8_decode($row['type_reclamation']),1,0,'C'); 
    $pdf->Cell(40,20,utf8_decode($row['date_reclamation']),1,0,'C'); 
    $pdf->Cell(42,20,utf8_decode($row['description_reclamation']),1,0,'C'); 
    $pdf->Cell(20,20,utf8_decode($row['etat']),1,1,'C'); 
    
   // $pdf->Cell(20,20,utf8_decode($pdf->Image("../image/".$row['image'],null,null,15,15)));
  

  }

  















  $pdf->Output();
?>