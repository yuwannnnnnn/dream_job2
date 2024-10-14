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
	<h3>Software Engineer Registration Form</h3>
	<form action="core/handleForms.php" method="POST">
            <p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
            <p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
            <p><label for="gender">Gender</label> <input type="text" name="gender"></p>
            <p><label for="birthDate">Birthday</label> <input type="date" name="birthDate"></p>
            <p><label for="phoneNumber">Phone Number</label> <input type="tel" name="phoneNumber"></p>
            <p><label for="email">Email</label> <input type="text" name="email"></p>
            <p><label for="role">Role</label> <input type="text" name="role"></p>
            <p><label for="experience">Years of experience</label> <input type="text" name="experience"></p>
            <p><input type="submit" name="insertApplicationBtn"></p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Birthday</th>
	    <th>Phone Number</th>
	    <th>Email</th>
	    <th>Role</th>
        <th>Years of Experience</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllRecords = seeAllRecords($pdo); ?>
	  <?php foreach ($seeAllRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['birth_date']; ?></td>
	  	<td><?php echo $row['phoneNumber']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td><?php echo $row['years_of_experience']; ?></td>
	  	
	  	<td>
	  		<a href="editrecord.php?id=<?php echo $row['id'];?>">Edit</a>
	  		<a href="deleterecord.php?id=<?php echo $row['id'];?>">Delete</a>
	  	</td>
	  </tr>

	  <?php } ?>
	</table>



</body>
</html>




