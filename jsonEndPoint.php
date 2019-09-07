<?php

$sampleStr = '{"items":[{"id":"1","img":"https://amp.dev/static/samples/img/product1_640x426.jpg","name":"Apple","price":"1.99","stars":"&#9733;&#9733;&#9733;&#9733;&#9733;","attribution":"visualhunt","url":"#","color":"green"},{"id":"2","img":"https://amp.dev/static/samples/img/product2_640x426.jpg","name":"Orange","price":"0.99","stars":"&#9733;&#9733;&#9733;&#9733;&#9734;","attribution":"visualhunt","url":"#","color":"orange"},{"id":"3","img":"https://amp.dev/static/samples/img/product3_640x426.jpg","name":"Pear","price":"1.50","stars":"&#9733;&#9733;&#9733;&#9734;&#9734;","attribution":"visualhunt","url":"#","color":"green"},{"id":"4","img":"https://amp.dev/static/samples/img/product4_640x426.jpg","name":"Banana","price":"1.50","stars":"&#9733;&#9733;&#9733;&#9733;&#9733;","attribution":"pixabay","url":"#","color":"yellow"},{"id":"5","img":"https://amp.dev/static/samples/img/product5_640x408.jpg","name":"Watermelon","price":"1.50","stars":"&#9733;&#9733;&#9733;&#9733;&#9733;","attribution":"pixabay","url":"#","color":"red"},{"id":"6","img":"https://amp.dev/static/samples/img/product6_640x424.jpg","name":"Pear","price":"1.50","stars":"&#9733;&#9733;&#9733;&#9734;&#9734;","attribution":"visualhunt","url":"#","color":"green"}],"part_of_them":{"pear_and_banana":[{"id":"3","img":"https://amp.dev/static/samples/img/product3_640x426.jpg","name":"Pear","price":"1.50","stars":"&#9733;&#9733;&#9733;&#9734;&#9734;","attribution":"visualhunt","url":"#","color":"green"},{"id":"4","img":"https://amp.dev/static/samples/img/product4_640x426.jpg","name":"Banana","price":"1.50","stars":"&#9733;&#9733;&#9733;&#9733;&#9733;","attribution":"pixabay","url":"#","color":"yellow"}]}}';

header('Cache-Control: private, no-cache');
header('Access-Control-Allow-Origin: amp@gmail.dev');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin');
header('AMP-Access-Control-Allow-Source-Origin: amp@gmail.dev');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET");
header('Content-Type: application/json');
echo $sampleStr; 
