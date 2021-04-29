<?PHP
	class Actualite{
		private  $IdActualite = null;
		private  $TitreActualite = null;
		private  $DateActualite = null;
		private  $DescriptionActualite = null;
		private  $ImageActualite = null;
		
		
		function __construct(string $TitreActualite, string $DateActualite,  string $DescriptionActualite, string $ImageActualite){
			
			$this->TitreActualite=$TitreActualite;
			$this->DateActualite=$DateActualite;
			$this->DescriptionActualite=$DescriptionActualite;
			$this->ImageActualite=$ImageActualite;
		}
		
		function getIdActualite(): int{
			return $this->IdActualite;
		}
		function getTitreActualite(): string{
			return $this->TitreActualite;
		}
		function getDateActualite(): string {
			return $this->DateActualite;
		}
		function getDescriptionActualite(): string{
			return $this->DescriptionActualite;
		}
		function getImageActualite(): string{
			return $this->ImageActualite;
		}
		
		function setTitreActualite(string $TitreActualite): void{
			$this->TitreActualite=$TitreActualite;
		}
		function setDateActualite(string $DateActualite): void{
			$this->DateActualite=$DateActualite;
		}
		function setDescriptionActualite(string $DescriptionActualite): void{
			$this->DescriptionActualite=$DescriptionActualite;
		}
		function setImageActualite(string $ImageActualite): void{
			$this->ImageActualite=$ImageActualite;
		}
		
	}

?>