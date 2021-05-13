<?php
$connect = mysqli_connect("localhost", "root", "", "web");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM reclamation 
	WHERE etat LIKE '%".$search."%'
	OR type_reclamation LIKE '%".$search."%' 
	OR date_reclamation LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM reclamation ORDER BY date_reclamation ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						   <th >Reference</th>
              <th>id client</th>
               <th >type</th>
              <th >Date </th>
                            <th >Description</th>
                                                       
<th >etat</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id_reclamation"].'</td>
				<td>'.$row["id_reclamation"].'</td>
				<td>'.$row["type_reclamation"].'</td>
				<td>'.$row["date_reclamation"].'</td>
				<td>'.$row["description_reclamation"].'</td>
				<td>'.$row["etat"].'</td>
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