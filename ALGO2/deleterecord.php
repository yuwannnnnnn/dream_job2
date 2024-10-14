<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserById = getUserById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="recordContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getUserById['first_name']; ?></p>
			<p>Last Name: <?php echo $getUserById['last_name']; ?></p>
			<p>Gender: <?php echo $getUserById['gender']; ?></p>
			<p>Birthdy: <?php echo $getUserById['birth_date']; ?></p>
			<p>Phone Number: <?php echo $getUserById['phoneNumber']; ?></p>
			<p>Email: <?php echo $getUserById['email']; ?></p>
			<p>Role: <?php echo $getUserById['role']; ?></p>
            <p>Years of Experience: <?php echo $getUserById['years_of_experience']; ?></p>
			<input type="submit" name="deleteRecordBtn" value="Delete">
		</div>
	</form>
</body>
</html>