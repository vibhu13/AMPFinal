<?php
//dsn: mysql:host=localhost;dbname=rdxFresher;
//    username: root
//    password: Km7Iv80l

include 'headers.php';

function getJobDetailsTupple() {
	try {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "amp";
		$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
		$stmt = $conn->prepare("select jt.json as jobTuple , jd.json as jobDetail from amp.job_tuples jt, amp.job_details jd where jt.JOB_ID=jd.JOB_ID");
		$stmt->execute();
		$frmOp = array();
		while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
			$response["jobTuple"] = json_decode(strip_tags($res["jobTuple"]),true);
			$response["jobDetail"] = json_decode(strip_tags($res["jobDetail"]),true);
			$frmOp[] =  $response;	
		}
		if($frmOp) {
			return $frmOp;
		} else {
			return false;
		}
	}
	catch(PDOException $e) {
		throw new Exception();
	}
}

$jobDetails = getJobDetailsTupple();
if($jobDetails)
{
	getHeaders();
	echo json_encode(array("items"=>$jobDetails),JSON_UNESCAPED_SLASHES);
}
else{
	echo json_encode("No Job Tupples");
}

?>

