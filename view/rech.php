<?php
$connect = mysqli_connect("localhost", "root", "", "yahya");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM produit 
	WHERE Id_produit LIKE '%".$search."%'
	OR NomP LIKE '%".$search."%' 
	OR DateA LIKE '%".$search."%' 
	OR Description1 LIKE '%".$search."%' 
	OR Genre LIKE '%".$search."%'
	OR Couleur LIKE '%".$search."%'
	OR Taille LIKE '%".$search."%'
	OR poids LIKE '%".$search."%'
	OR Prix LIKE '%".$search."%'
	OR Quantite LIKE '%".$search."%'
	OR image LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM produit ORDER BY Id_produit";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>NomP</th>
							<th>DateA</th>
							<th>Description1</th>
							<th>Genre</th>
							<th>Couleur</th>
							<th>Taille</th>
							<th>poids</th>
							<th>Prix</th>
							<th>Quantite</th>
							<th>image</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Id_produit"].'</td>
				<td>'.$row["NomP"].'</td>
				<td>'.$row["DateA"].'</td>
				<td>'.$row["Description1"].'</td>
				<td>'.$row["Genre"].'</td> 
				<td>'.$row["Couleur"].'</td> 
				<td>'.$row["Taille"].'</td> 
				<td>'.$row["poids"].'</td> 
				<td>'.$row["Prix"].'</td> 
				<td>'.$row["Quantite"].'</td> 
				<td>'.$row["image"].'</td> 
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>