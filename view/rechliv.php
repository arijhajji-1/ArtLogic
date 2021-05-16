<?php
$connect = mysqli_connect("localhost", "root", "", "web");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM livreur 
	WHERE Numlivreur LIKE '%".$search."%'
	OR Nomlivreur  LIKE '%".$search."%' 
	OR Zone  LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM livreur ORDER BY Nomlivreur";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						   <th >IDlivreur</th>
              <th>Nomlivreur</th>
               <th >Matricule</th>
              <th >Zone </th>
                            <th >Numlivreur</th>
                                                       

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["IDlivreur"].'</td>
				<td>'.$row["Nomlivreur"].'</td>
				<td>'.$row["Matricule"].'</td>
				<td>'.$row["Zone"].'</td>
				<td>'.$row["Numlivreur"].'</td>
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