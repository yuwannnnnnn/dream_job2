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
	<?php $getUserById = getUserById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getUserById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getUserById['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getUserById['gender']; ?>">
		</p>
		<p>
			<label for="birthDate">Birthday</label>
			<input type="date" name="birthDate" value="<?php echo $getUserById['birth_date']; ?>">
		</p>
		<p>
			<label for="phoneNumber">Phone Number</label>
			<input type="tel" name="phoneNumber" value="<?php echo $getUserById['phoneNumber']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getUserById['email']; ?>"></p>
		<p>
			<label for="role">Role</label>
			<input type="text" name="role" value="<?php echo $getUserById['role']; ?>"></p>
        <p>
			<label for="years_of_experience">Years Of Experience</label>
			<input type="text" name="years_of_experience" value="<?php echo $getUserById['years_of_experience']; ?>">
			<input type="submit" name="editRecordBtn">
		</p>
	</form>
</body>
</html>