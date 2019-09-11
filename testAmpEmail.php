<?php
require './src/phpmail4amp.php';
$toArr = array("Vibhu Yadav"=>"smartyvibhuse@gmail.com","Arunabh Nandi" =>"arunabh1993@gmail.com");  
foreach($toArr as $name=>$to) {
	$ampmail = new PHPmail4AMP;
	$ampmail->sendFrom('shivamfn@gmail.com', 'Shivam Fn');
	$ampmail->sendTo($to, $name);
	$ampmail->subject   = 'Hackathon 2019 Infoedge AMP Email';
	$ampmail->mailText  = 'Hello world in Text!';
       $strAmp = file_get_contents("jobAlertTemplateAmp.html");
       $ampmail->mailAMP = str_replace("<XXXX>",$to,$strAmp);
       $ampmail->mailHTML  = file_get_contents("jobAlertTemplate.html");
       if($ampmail->send()) {
	       echo "Mail Send \n";
       } else {
	       echo "Failed \n" ;
       }
}
