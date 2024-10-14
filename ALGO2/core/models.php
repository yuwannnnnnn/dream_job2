<?php 

require_once 'dbConfig.php';

function insertIntoRecords($pdo,$first_name, $last_name, $gender, $birthDate, $phoneNumber, $email, $role, $years_of_experience) {

	$sql = "INSERT INTO users (first_name,last_name,gender,birth_date,phoneNumber,email,role,years_of_experience) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $birthDate, 
		$phoneNumber, $email, $role, $years_of_experience]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllRecords($pdo) {
	$sql = "SELECT * FROM users";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserByID($pdo, $id) {
	$sql = "SELECT * FROM users WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateARecord($pdo, $id, $first_name, $last_name, 
	$gender, $birthDate, $phoneNumber, $email,  $role, $years_of_experience) {

	$sql = "UPDATE users 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					birth_date = ?, 
					phoneNumber = ?, 
					email = ?, 
					role = ? ,
                    years_of_experience = ? 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $birthDate, 
    $phoneNumber, $email, $role, $years_of_experience, $id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteARecord($pdo, $id) {

	$sql = "DELETE FROM users WHERE id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}

}