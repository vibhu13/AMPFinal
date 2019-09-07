<?php
//dsn: mysql:host=localhost;dbname=rdxFresher;
//    username: root
//    password: Km7Iv80l

include 'headers.php';

function getJobDetails($jobId) {
	try {

		$servername = "localhost";
		$username = "root";
		$password = "Km7Iv80l";
		$db = "amp";
		$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
		$stmt = $conn->prepare("select json from amp.job_details where job_id = :job_id");
		$stmt->bindParam(':job_id', $jobId);
		$stmt->execute();
		$response = $stmt->fetch(PDO::FETCH_ASSOC);
		if($response) {
			return json_decode($response["json"]);
		} else {
			return false;
		}
	}
	catch(PDOException $e) {
		throw new Exception();
	}
}
$jobId = $_POST["jobId"];
$jobDetails = getJobDetails($jobId);
if($jobDetails)
{
	getHeaders();
        echo json_encode($jobDetails,JSON_UNESCAPED_SLASHES);

	
}
else{
	echo "No Job Found For The Job Id .. \n";
}



?>
