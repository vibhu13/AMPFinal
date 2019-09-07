<?php
include 'headers.php';    

class Apply {

    public function doApply($email,$jobId) {
        $reapply = $this->checkReApply($email , $jobId);
        if(!$reapply) {
            $this->saveApply($email , $jobId);
        } else {
            return false;
        }
        return true;
    }

    private function saveApply($email , $jobId){
        $servername = "localhost";
        $username = "root";
        $password = "Km7Iv80l";
        $db = "amp";
        try {
           $conn = new PDO("mysql:host=$servername;dbname=amp", $username, $password);
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt = $conn->prepare("insert into amp.apply_log (email, job_id) values (:email , :job_id)");
           $stmt->bindParam(':email', $email);
           $stmt->bindParam(':job_id', $jobId);
           $stmt->execute();
	}
        catch(PDOException $e) {
           throw new Exception();       
        }
        $conn=null;
    }

    private function checkReApply($email , $jobId) {
        $servername = "localhost";
        $username = "root";
        $password = "Km7Iv80l";
        $db = "amp";
        try {
           $conn = new PDO("mysql:host=$servername;dbname=amp", $username, $password);
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt = $conn->prepare("select count(*) as count from amp.apply_log where email = :email and job_id = :job_id");
           $stmt->bindParam(':email', $email);
           $stmt->bindParam(':job_id', $jobId);
           $stmt->execute();
           $response = $stmt->fetch(PDO::FETCH_ASSOC);
           if($response["count"] > 0) {
		throw new Exception("Reapply Sceanrio");
           } else {
                return false;
           }
        }
        catch(PDOException $e) {
           throw new Exception(); 
        }
        $conn=null;
    }
}
$email= $_POST["email"];
$jobId = $_POST["jobId"];
$obj = new Apply();
$response = $obj->doApply($email,$jobId);
getHeaders();
echo json_encode($response);
