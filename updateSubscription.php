<?php

include 'headers.php';

class Subscription {

    public function updateSubscription($email,$subscriptionFlag)  {
        $servername = "localhost";
        $username = "root";
        $password = "Km7Iv80l";
        $db = "amp";
        try {
           $conn = new PDO("mysql:host=$servername;dbname=amp", $username, $password);
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt = $conn->prepare("replace into amp.alert_subscription (email, subscription_type) values (:email , :subscription_type)");
           $stmt->bindParam(':email', $email);
           $stmt->bindParam(':subscription_type', $subscriptionFlag);
           $stmt->execute();
	}
        catch(PDOException $e) {
           throw new Exception("Error While Updating Subscritption");
        }
        $conn=null; 
        return true;
    }

}
$email = $_POST["email"];
$subscriptionFlag = $_POST["subscriptionFlag"];
$obj = new Subscription();
$obj->updateSubscription($email,$subscriptionFlag);
getHeaders();
echo json_encode(true);
