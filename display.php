
<html>
<head>
	
	<title>Display</title>
	<style>
		body
		{
			background: #446;

		}
		table
		{
			background-color: #FFDAB9;
		}

	</style>
</head>

</html>
<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);




//echo $total;

if($total != 0)
{   
	?>
    <h2 align="center"><mark>Displaying student records</mark></h2>
	<center><table border="1" cellspacing="7" width="100%">
		<tr>
		<th width="10%">Student Name</th>
		<th width="10%">Adm No</th>
		<th width="30%">Email</th>
		<th width="10%">Phone</th>
		<th width="40%">Address</th>
	</tr>
	

	<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		        <td>".$result['stdname']."</td>
		        <td>".$result['admno']."</td>
		        <td>".$result['email']."</td>
		        <td>".$result['phone']."</td>
		        <td>".$result['address']."</td>
	         </tr>
	";
	}
}
else
{
	echo "No records";
}

?>
</table></center>

