<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../i/logo.png', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Listes des reclamations',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pages '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>