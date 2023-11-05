<?php
include 'connection.php';
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$location = $_POST['location'];

	$sql = "INSERT INTO customers (name, email, location) VALUES ('$name', '$email', '$location')";
	if($conn->query($sql)== true){
		echo "Customers created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>
<?php
include 'header.php';
?>
<?php
include 'navbar.php';
?>
<h1>Customer Create</h1>
<form action="" method="post">
	<div class="mb-3">
		<label for="name" class="form-label">Name</label>
		<input type="text" class="form-control" id="name" name="name">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email address</label>
		<input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="mb-3">
		<label for="location" class="form-label">Location</label>
		<input type="text" class="form-control" id="location" name="location">
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include 'footer.php';
?>