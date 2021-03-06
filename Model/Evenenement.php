<?PHP
	class Evenenement{
		private  $IdEvenement = null;
		private  $TitreEvenement = null;
		private  $LieuEvenement = null;
		private  $DateEvenement = null;
		private  $DureeEvenement = null;
		private  $DescriptionEvenement = null;
		private  $ImageEvenement = null;
		
		
		function __construct(string $TitreEvenement, string $LieuEvenement, string $DateEvenement, int $DureeEvenement, string $DescriptionEvenement, string $ImageEvenement){
			
			$this->TitreEvenement=$TitreEvenement;
			$this->LieuEvenement=$LieuEvenement;
			$this->DateEvenement=$DateEvenement;
			$this->DureeEvenement=$DureeEvenement;
			$this->DescriptionEvenement=$DescriptionEvenement;
			$this->ImageEvenement=$ImageEvenement;
			
		}
		
		function getIdEvenement(): int{
			return $this->IdEvenement;
		}
		function getTitreEvenement(): string{
			return $this->TitreEvenement;
		}
		function getLieuEvenement(): string{
			return $this->LieuEvenement;
		}
		function getDateEvenement(): string {
			return $this->DateEvenement;
		}
		function getDureeEvenement(): int {
			return $this->DureeEvenement;
		}
		function getDescriptionEvenement(): string{
			return $this->DescriptionEvenement;
		}
		function getImageEvenement(): string{
			return $this->ImageEvenement;
		}
		
		function setTitreEvenement(string $TitreEvenement): void{
			$this->TitreEvenement=$TitreEvenement;
		}
		function setLieuEvenement(string $LieuEvenement): void{
			$this->LieuEvenement=$LieuEvenement;
		}
		function setDateEvenementp(string $DateEvenementp): void{
			$this->DateEvenementp=$DateEvenementp;
		}
		function setDureeEvenement(string $DureeEvenement): void{
			$this->DureeEvenement=$DureeEvenement;
		}
		function setDescriptionEvenement(string $DescriptionEvenement): void{
			$this->DescriptionEvenement=$DescriptionEvenement;
		}
		function setImageEvenement(string $ImageEvenement): void{
			$this->ImageEvenement=$ImageEvenement;
		}
		
	}

?>