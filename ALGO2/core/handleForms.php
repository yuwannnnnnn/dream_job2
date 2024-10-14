<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertApplicationBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$birthDate = trim($_POST['birthDate']);
	$phone_number = trim($_POST['phoneNumber']);
	$email = trim($_POST['email']);
	$roles = trim($_POST['role']);
    $experience = trim($_POST['experience']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($birthDate) && !empty($phone_number)  && !empty($email)  && !empty($roles) && !empty($experience)) {
			$query = insertIntoRecords($pdo, $firstName, $lastName, 
			$gender, $birthDate, $phone_number, $email, $roles, $experience);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editRecordBtn'])) {
	$id = $_GET['id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$birthDate = trim($_POST['birthDate']);
	$phoneNumber = trim($_POST['phoneNumber']);
	$email = trim($_POST['email']);
	$roles = trim($_POST['role']);
    $experience = trim($_POST['years_of_experience']);

	if (!empty($id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($birthDate) && !empty($phoneNumber) && !empty($email) && !empty($roles) && !empty($experience)) {

		$query = updateARecord($pdo, $id, $firstName, $lastName, $gender, $birthDate, $phoneNumber, $email, $roles, $experience);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteRecordBtn'])) {

	$query = deleteARecord($pdo, $_GET['id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>