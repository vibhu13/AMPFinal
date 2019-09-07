<?php

function getHeaders(){
	header('Cache-Control: private, no-cache');
	header('Access-Control-Allow-Origin: amp@gmail.dev');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin');
	header('AMP-Access-Control-Allow-Source-Origin: amp@gmail.dev');
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: POST,GET");
	header('Content-Type: application/json');
}
