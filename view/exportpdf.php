<?php
	include '../pdf/plantilla.php';
	include "../Controller/produitC.php";
	require '../pdf/conexion.php'; 
	
	
	$query = "SELECT * FROM produit ";
	$resultado = $mysqli->query($query); 

	$produitC=new produitC();
    $produit=$produitC->afficherproduit();
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(30,6,'Nom Produit',1,0,'C',1);
	$pdf->Cell(20,6,'Prix',1,0,'C',1); 
	$pdf->Cell(20,6,'Quantite',1,0,'C',1); 
	$pdf->Cell(20,6,'Genre',1,0,'C',1); 
	$pdf->Cell(20,6,'DateA',1,0,'C',1); 
	$pdf->Cell(20,6,'Couleur',1,0,'C',1);  
	$pdf->Cell(20,6,'poids',1,0,'C',1); 
	//$pdf->Cell(20,6,'Image',1,0,'C',1);
	$pdf->Cell(35,6,'Description',1,1,'C',1); 

	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,20,$row['Id_produit'],1,0,'C');
		$pdf->Cell(30,20,utf8_decode($row['NomP']),1,0,'C'); 
		$pdf->Cell(20,20,utf8_decode($row['Prix']),1,0,'C'); 
		$pdf->Cell(20,20,utf8_decode($row['Quantite']),1,0,'C'); 
		$pdf->Cell(20,20,utf8_decode($row['Genre']),1,0,'C'); 
		$pdf->Cell(20,20,utf8_decode($row['DateA']),1,0,'C'); 
		$pdf->Cell(20,20,utf8_decode($row['Couleur']),1,0,'C');  
		$pdf->Cell(20,20,utf8_decode($row['poids']),1,0,'C'); 
	 //	$pdf->Cell(20,20,utf8_decode($pdf->Image("../image/".$row['image'],null,null,15,15)));
		$pdf->Cell(35,20,utf8_decode($row['Description1']),1,1,'C');

	}

	















	$pdf->Output();
?>