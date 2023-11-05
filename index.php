<?php
include 'connection.php';

?>
<?php
include 'header.php';
?>
<?php
include 'navbar.php';
?>
<h1>Customer List</h1>
<a href="create-customer.php">Create Customer</a>
<table class="table table-success table-bordered table-striped">
	<tr>
		<th>SL</th>
		<th>Name</th>
		<th>Email</th>
		<th>Location</th>
		<th>Action</th>
	</tr>

	<?php
	$sql = 'SELECT * FROM customers';
	$cus_result = $conn->query($sql);
	if ($cus_result) {
		$sl = 1;
		while ($row = $cus_result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>$sl</td>";
			echo "<td>{$row['name']}</td>";
			echo "<td>{$row['email']}</td>";
			echo "<td>{$row['location']}</td>";
			echo "</tr>";
		}
	}
	?>

</table>
<?php
include 'footer.php';
?>