<?php
require './src/phpmail4amp.php';

$ampmail = new PHPmail4AMP;
$from = "smartyvibhuse@gmail.com";  
$ampmail->sendFrom('shivamfn@gmail.com', 'Shivam Fn');
$ampmail->sendTo($from, 'Vibhu Yadav');



$ampmail->subject   = 'Email with AMP version';
$ampmail->mailText  = 'Hello world in Text!';
/*
   $ampmail->mailAMP = '<!doctype html>
   <html amp4email>
   <head>
   <meta charset="utf-8">
   <script async src="https://cdn.ampproject.org/v0.js"></script>
   <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
   <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
   <style amp4email-boilerplate>body{visibility:hidden}</style>
   <style amp-custom>
   .products {
display: block;
height: 100px;
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
background: #fff;
border-radius: 2px;
margin-bottom: 15px;
position: relative;
}

.products amp-img {
float: left;
margin-right: 16px;
}
</style>
</head>
<body>
You should see <b>6</b> fruits with pictures, names, stars, and prices.
<amp-list id="amp-list-placeholder" noloading width="auto"
height="1000"
layout="fixed-height" src="https://amp.gmail.dev/playground/public/ssr_amp_list">
<div placeholder>
<ul class="results">
<li></li><li></li><li></li><li></li><li></li>
</ul>
</div>
<template type="amp-mustache">
<div class="products">
<amp-img width="150"
height="100"
alt="{{name}}"
src="{{img}}"></amp-img>
<p class="name">{{name}}</p>
<p class="star">{{{stars}}}</p>
<p class="price">{{price}}</p>
</div>
</template>
</amp-list>

You should now only see <b>2</b> fruits with pictures, names, stars, and prices because I specify "max-items" = 2.

<amp-list id="amp-list-placeholder" noloading width="auto"
height="600"
max-items=2
layout="fixed-height" src="https://amp.gmail.dev/playground/public/ssr_amp_list">
<div placeholder>
<ul class="results">
<li></li><li></li><li></li><li></li><li></li>
</ul>
</div>
<template type="amp-mustache">
<div class="products">
<amp-img width="150"
height="100"
alt="{{name}}"
src="{{img}}"></amp-img>
<p class="name">{{name}}</p>
<p class="star">{{{stars}}}</p>
<p class="price">{{price}}</p>
</div>
</template>
</amp-list>

You should now only see <b>pear and banana</b> with pictures, names, stars, and prices because I specify a different path by setting "items".

<amp-list id="amp-list-placeholder" noloading width="auto"
height="600"
items="part_of_them.pear_and_banana"
layout="fixed-height" src="https://amp.gmail.dev/playground/public/ssr_amp_list">
<div placeholder>
<ul class="results">
<li></li><li></li><li></li><li></li><li></li>
</ul>
</div>
<template type="amp-mustache">
<div class="products">
<amp-img width="150"
height="100"
alt="{{name}}"
src="{{img}}"></amp-img>
<p class="name">{{name}}</p>
<p class="star">{{{stars}}}</p>
<p class="price">{{price}}</p>
</div>
</template>
</amp-list>
</body>
</html>';
*/
$strAmp = '<!doctype html>
<html ⚡4email>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
<script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<style amp4email-boilerplate>body{visibility:hidden}</style>
<style amp-custom>
.lightbox {
background: rgba(0,0,0,0.8);
width: 100%;
height: 100%;
position: absolute;
display: flex;
	 align-items: center;
	 justify-content: center;
}
.lightbox h1 {
color: white;
}
body {
background: #eff2f7;
padding: 50px 100px;
}
.jobTuple {
display: block;
	 margin-top: 10px;
padding: 20px;
background: #fff;
	    border-radius: 2px;
	    margin-bottom: 15px;
position: relative;
}

.jobTuple .secondSection {
	margin-top: 10px;
}

.jobTuple p {
margin: 0;
}
.jobTuple .jobName {
	font-family: \'Roboto\',Arial;
	font-size: 15px;
	text-align: left;
	font-weight: bold;
color: #4a90e2;
       line-height: 20px;
}

.jobTuple .compName,.jobLoc,.jobExp,.jobTech,.jobCtc {
	font-family: \'Roboto\',Arial;
	font-size: 13px;
	font-weight: normal;
	text-align: left;
color: #666666;
       line-height: 22px;
}

.products amp-img {
float: left;
       margin-right: 16px;
}
</style>
</head>
<body>
<amp-state id="state">
<script type="application/json">
{
	"jobId": null,
		"jobTitle":null,
		"color":"red"
}
</script>
</amp-state>
<div class="header">
<p style="
background: #f7f8fa;
margin: 0;
padding: 30px;
">
<amp-img width="181"
height="31"
alt="Location"
style="width: 15px;height: 15px;margin-right: 10px;"
src="https://ci6.googleusercontent.com/proxy/hXyFXMYtxpqT6miLsAfYZl4zMsMwbLurSZKgLLwJ-4fo6TM7Skful9kSdXu_7O0a48B8Iyvop2XKOGhok2jrDe886HaO3wo=s0-d-e1-ft#https://static.naukimg.com/s/4/100/i/naukri_Logo.png">
</amp-img>
</p>

<p style="
font-family: \'Roboto\',Arial;
font-size: 20px;
text-align: center;
color: #333333;
font-weight: bold;
line-height: 23px;
padding: 20px 50px;
background: white;
margin: 0;
">Job recommendations based on your Naukri profile</p>
</div>






<amp-list id="amp-list-placeholder" noloading width="auto"
height="500"
layout="fixed-height"
src="https://web-php-smartyvibhuse95443.codeanyapp.com/AMPFinal/getJobDetailsTupple.php">
<div placeholder>
<ul class="results">
<li></li><li></li><li></li><li></li><li></li>
</ul>
</div>


<template type="amp-mustache">

<amp-sidebar style="width:100%; background: #f7f8fa;" id={{jobTuple.jobID}} class="sample-sidebar" layout="nodisplay" side="right">
<h3 style="
font-family: \'Roboto\',Arial;
font-size: 20px;
text-align: center;
color: #333333;
font-weight: bold;
line-height: 23px;
padding: 20px 50px;
background: white;
margin: 0;
">Job Description</h3> 
<div style="padding:10px 40px">

<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
text-align: center;
color: #333333;
font-weight: bold;
">{{jobDetail.title}}</p>
<p
style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Experience Required: {{jobDetail.experienceRequirements}}</p>
<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Job Location: {{jobDetail.jobLoc}}</p>
<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Employment Type: {{jobDetail.employmentType}}</p>
<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Education Requirements: {{jobDetail.educationRequirements}}</p>
<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">CTC: {{jobDetail.ctc}}</p>
<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Job Responsibitlities: {{jobDetail.responsibilities}}</p>
<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Work Timings: {{jobDetail.workHours}}</p>

<p style="
font-family: \'Roboto\',Arial;
font-size: 15px;
color: #333333;
font-weight: bold;
">Job Description: {{jobDetail.description}}</p>


<form 
method="post"
action-xhr="https://web-php-smartyvibhuse95443.codeanyapp.com/AMPFinal/postApply.php">

<div>
<input type="hidden"
name="jobId"
value={{jobTuple.jobID}}
>
<input type="hidden"
name="email"
value="<XXXX>"
>
</div>
<input type="submit"
style="
padding: 0 20px;
color: #fff;
font-size: 18px;
cursor: pointer;
height: 40px;
line-height: 40px;
vertical-align: middle;
text-align: center;
background: #09c;
border: none;
width: 30%;
"
value="Apply">

<div submit-success template="apply-template"></div>
<div submit-error template="apply-error-template"></div>

</form>

</div>






</amp-sidebar>
<div class="jobTuple">
<div class="firstSection">
<p class="jobName" role="button" tabindex="1" on="tap:{{jobTuple.jobID}}.toggle">{{jobTuple.jobTitle}}</p>  
<p class="compName">{{jobTuple.compName}}</p>
</div>

<div class="secondSection">
<p>
<amp-img width="15"
height="15"
alt="Location"
style="width: 15px;height: 15px;margin-right: 10px;"
src="https://cdn3.iconfinder.com/data/icons/unicons-vector-icons-pack/32/location-512.png">
</amp-img><span class="jobLoc">{{jobTuple.jobLoc}}</span>
</p>
<p>
<amp-img width="15"
height="15"
alt="Experience"
style="width: 15px;height: 15px;margin-right: 10px;"
src="https://www.pinclipart.com/picdir/middle/75-750874_work-experience-svg-png-icon-free-download-356662.png">
</amp-img><span class="jobExp">{{jobTuple.exp}}</span>
</p>
<p>
<amp-img width="15"
height="15"
style="width: 15px;height: 15px;margin-right: 10px;"
alt="Skills"
src="https://www.pinclipart.com/picdir/middle/75-750874_work-experience-svg-png-icon-free-download-356662.png">
</amp-img><span class="jobTech">{{jobTuple.techStack}}</span>
</p>
<p>

<amp-img width="15"
height="15"
style="width: 15px;height: 15px;margin-right: 10px;"
alt="Skills"
src="https://cdn3.iconfinder.com/data/icons/glypho-money-and-finance/64/money-dollar-circle-512.png">
</amp-img><span class="jobCtc">{{jobTuple.ctc}}</span>
</p>
</div>
</div>
</template>
</amp-list>

<template id="apply-template" type="amp-mustache">
<div style="
background: #fff;
margin-top: 20px;
color: green;
font-family: \'Roboto\',Arial;
font-weight: 700;
padding: 40px;
text-align: center;">Congratulations! You have successfully applied for this job.</div>
</template>
<template id="apply-error-template" type="amp-mustache">
<div style="
background: #fff;
margin-top: 20px;
color: red;
font-family: \'Roboto\',Arial;
font-weight: 700;
padding: 40px;
text-align: center;">You have already applied to this job!</div>
</template>

<amp-accordion>
<section>
<h4 style="
font-family: \'Roboto\',Arial;
font-size: 15px;
text-align: left;
font-weight: bold;
color: #4a90e2;
line-height: 20px;
background: #ffff;
padding: 20px;
">Subscription Options
<amp-img width="20"
height="20"
alt="arrow"
style="width: 20px;
height: 20px;
float: right;"
src="https://image.flaticon.com/icons/svg/118/118738.svg">
</amp-img>
</h4>
<div style="font-family: \'Roboto\',Arial;
font-size: 15px;
text-align: left;
padding: 10px 40px;
font-weight: bold;
color: #fff;
line-height: 20px;
background: #0c032f;">


<form method="post"
action-xhr="https://web-php-smartyvibhuse95443.codeanyapp.com/AMPFinal/updateSubscription.php">
<p>How often would you like to receive job alerts?</p>
<div>


<input type="radio" name="subscriptionFlag" value="W">
<label for="male">Weelkly</label><br>

<input type="radio" name="subscriptionFlag" value="M">
<label for="female">Monthly</label><br>

<input type="radio" name="subscriptionFlag" value="N">
<label for="female">Never</label><br>
<input type="hidden" name="email" value="<XXXX>">
<input type="submit"
style="
padding: 0 20px;
color: #fff;
margin-top: 10px;
font-size: 18px;
cursor: pointer;
height: 40px;
line-height: 40px;
vertical-align: middle;
text-align: center;
background: #09c;
border: none;
width: 30%;
"
value="Save">
</div>
<div submit-success>
<template type="amp-mustache">
<div  style="margin-top: 10px;">Your choice has been saved successfully!</div>
</template>
</div>
<div submit-error>
<template type="amp-mustache">
<div  style="margin-top: 10px;">Sorry! Something went wrong</div>
</template>
</div>
</form>     
</div>
</section>
</amp-accordion>
</body>
</html>';
$ampmail->mailAMP = str_replace("<XXXX>",$from,$strAmp);

$ampmail->mailHTML  = 'Helo world in <strong>HTML</strong>!';
if($ampmail->send()) {
	echo "Yesss";
	// success
} else {
	echo "Failed" ;
	// failed
}
