<?php 
include 'connect.php';
$db = new Db();
$categories = $db -> select("SELECT cat_id,cat_name FROM categories");
$locations = $db -> select("SELECT location_id,location_name FROM location");

?>
<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
 	<meta name="viewport" content="width=device-width", initial-scale="1" />
 	<title>LTT Job</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/main.js"></script>
 	<style type="text/css">
 	 header {
 	 	background-color: #F8F8F8;
 	 }
 	 header ul {
 	 	margin: 0;
 	 }
 	 header a,
 	 header li {
 	 	padding: 1.4rem 0;
 	 	color: #777;
 	 	font-weight: bold;
 	 }
 	 section#intro-header{
 	 	background-image: url(https://s32.postimg.org/t5c0h0whx/landscape.jpg);
 	 	background-size: cover;
 	 }
 	 section#intro-header .wrap-headline {
 	 	position: relative;
 	 	padding-top: 20%;
 	 	padding-bottom: 20%;
 	 }
 	 section#intro-header h1,
 	 section#intro-header h2 {
 	 	color: #FFF;
 	 }
 	 section#intro-header h2{
 	 	font-size: 1.5rem;
 	 }
 	 section#intro-header hr{
 	 	width: 10%;
 	 }
 	 section#intro-header .btn-default{
 	 	background-color: rgba(255,255,255,0.5);
 	 	border:none;
 	 }
 	 section#about img{
 	 	margin-top: 6.5rem;
 	 	margin-bottom: 5rem;
 	 }
 	 section#about h3{
 	 	margin-top: 10rem;
 	 }
 	 section#features {
 	 	background-color: #eef2f5;
 	 	border-top: 0.1rem solid #e9e9e9;
 	 	border-bottom: 0.1rem solid #e9e9e9;
 	 }
 	 section#features .feature{
 	 	padding-top: 2rem;
 	 	padding-bottom: 4rem;
 	 	text-align: center; 
 	 }
 	 section#features *{
 	 	color: #657c8e;
 	 }
 	 section#pricing h3.price-headline {
 	 	margin-top: 5rem;
 	 	margin-bottom: 3rem;
 	 }
 	 section#pricing .white-text{
 	 	color: #fff;
 	 }
 	 section#pricing thead .success{
 	 	background-color: #78CFBF;
 	 }
 	 section#pricing thead .info{
 	 	background-color: #3ec6e0;
 	 }
 	 section#pricing thead .danger{
 	 	background-color: #e3536c;
 	 }
 	 section#pricing tbody .success{
 	 	background-color: #82daca;
 	 }
 	 section#pricing tbody .info{
 	 	background-color: #53cfe9;
 	 }
 	 section#pricing tbody .danger{
 	 	background-color: #eb6379;
 	 }
 	 footer {
 	 	background-color: #191919;
 	 	color: #adadad;
 	 	margin-top: 3em;
 	 }
 	 footer h5,
 	 footer img {
 	 	margin-top: 5em;
 	 	font-weight: bold;
 	 }
 	 footer address {
 	 	margin-top: 5em;
 	 	margin-bottom: 5em;
 	 	color: #5a5a5a;
 	 }
 	 footer ul{
 	 	margin-bottom: 5em;
 	 }
 	 footer address strong {
 	 	color: #adadad;
 	 	display:block;
 	 	padding-bottom: 0.62em;
 	 }
 	 footer a{
 	 	font-weight: 300;
 	 	color: #5a5a5a;
 	 }
 	 footer a:hover {
 	 	text-decoration: none;
 	 	color: #FFF;
 	 }

 	 section#newsletter {
 	 	border-top: 1px solid #e0e0e0;
 	 	padding-top: 3.2em;
 	 	margin-top: 2em;
 	 }
 	 section#newsletter h4 {
 	 	padding: 1em;
 	 }
 	 section#newsletter form {
 	 	padding: 1em;
 	 	margin-top: 2em;
 	 	margin-bottom: 5.5em;
 	 }
 	 section#contact form {
 	 	padding-top: 9rem;
 	 	padding-bottom: 3rem;
 	 }
 	 .hidden-element {
 	 	display: none;
 	 }
 	 section#team ul{
 	 	margin: 5em 0;
 	 }
 	 section#team li{
 	 	margin: 0 5em;
 	 }
 	 section#team h5{
 	 	font-size: 1.5rem;
 	 	font-weight: bold;
 	 }
 	 section#pricing .center-block {
 	 	width: 90%;
 	 }
 	 section#features .feature {
 	 	padding-top: 2rem;
 	 	padding-bottom: 4rem;
 	 	text-align: center;
 	 }
 	 section#features .glyphicon {
 	 	font-size: 2rem;
 	 }
 	 section#features .glyphicon-heart {
 	 	color: #e04c4c;
 	 }
 	 section#features .feature-tag {
 	 	max-width: 10.7em;
 	 	display: inline-block;
 	 	text-align: left;
 	 	margin-left: 1.5em;
 	 	font-size: 1.7rem;
 	 }
 	 body {
 	 	padding-top: 3.6em;
 	 }
 	 #nav-menu {
 	 	margin-right: 1rem;
 	 }
 	 nav .btn-group {
 	 	margin: 0.8rem 2rem 0 0;
 	 }
 	 @media(max-width: 48em){
 	 	nav .btn-group {
 	 		position: absolute;
 	 		top: 0;
 	 		right: 4em;
 	 	}
 	 }
 	</style>

 </head>
 <body>	
</div>
 	 <nav class="navbar navbar-default navbar-fixed-top">
 	   <div class="navbar-header">
 	    <img src="imgs/logo_ltt.png">
 	   	<a class="navbar-brand" href="bootstrap_mtn1.html">LifeTime</a>
 	   	<button type="button" class="navbar-toggle collapsed" data-toggled="collapse" data-target="#nav-menu" aria-expanded="false">
 	   	 <span class="sr-only">Toggle navigation</span>
 	   	 <span class="icon-bar"></span>
 	   	 <span class="icon-bar"></span>
 	   	 <span class="icon-bar"></span> 		
 	   	</button>
 	   </div>
 	   <!-- <a class="btn btn-primary navbar-btn pull-right href="#" role="button">Sign-up</a> -->

 	   <div class="btn-group pull-right">
 	   	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Su35<span class="caret"></span></button>	   	 
 	   	<ul class="dropdown-menu">
 	   	 <li><a href="#">Action1</a></li>
 	   	 <li><a href="#">A2</a></li>
 	   	 <li><a href="#">A3</a></li>
 	   	 <li role="separator" class="divider"></li>
 	   	 <li><a href="#">Outbound links</a></li>
 	   	</ul>
 	   </div>

 	   <div id="nav-menu" class="collapse navbar-collapse navbar-right">
 	   	<ul class="nav navbar-nav">
 	   	  <li><a href="cv.html">Creat CV</a></li>
 	 	  <li><a href="#careeradvice">Career Advice</a></li>
 	 	  <li><a href="#cvsample">CV Sample</a></li>
 	 	  <li><a href="contact.html">Contact</a></li>
 	   	</ul>
 	   </div>
 	 </nav>	 
 	  	
 	<section id="intro-header">
 		<div class="container"> 
 		<!--row 2-->
 		 <div class="row">
 		 	<div class="wrap-headline">
 		 		<h1 class="text-center">LifeTime</h1>
 		 		<div style="border-radius: 25px; background: #FFF; padding: 20px;">
 		 			<form class="form" method="post">
 		 			<div class="col-md-1"></div>
	 		 		<div class="col-md-3">
	 		 			<input type="text" name="keyword" class="form-control" placeholder="Enter job title" id="keyword" />
	 		 		</div>
	 		 		<div class="col-md-3">
	 		 			<select name="category" class="form-control" id="job_cat">
	 		 				<option value="">--Job Categories--</option>
	 		 				<?php 
	 		 				    foreach($categories as $value){
	 		 				    	echo "<option value=".$value['cat_id'].">".$value['cat_name']."</option>";
	 		 				    }
	 		 				?>
	 		 			</select>
	 		 		</div>
	 		 		<div class="col-md-2">
	 		 			<select name="location" class="form-control" id="location">
	 		 				<option value="">Select location</option> 
	 		 				<?php 
	 		 				    foreach($locations as $value){
	 		 				    	echo "<option value=".$value['location_id'].">".$value['location_name']."</option>";
	 		 				    }
	 		 				?>

	 		 			</select>
	 		 		</div>
	 		 		<div class="col-md-2">
	 		 			<button class="btn btn-success btn-md" id="btnSearch">Search</button>
	 		 		</div>
	 		 		<div class="col-md-1"></div>
 		 		</form>
				<table style="margin-top:150px" id="tblResult">
				    <tr>
					    <td>
						</td>
					</tr>
				    
				</table>
 		 		
 		 		</div>
 		 		<hr>
 		 		<ul class="list-inline list-unstyled text-center">
 		 		 <li>
 		 		 	<a id="sign-btn" class="btn btn-default btn-lg" href="#" role="button">Sign In</a>	
 		 		 </li>
 		 		 <li><a class="btn btn-primary btn-lg" href="#" role="button">Create CV</a></li>
 		 		</ul>
 		 	<!-- form sign-in group -->
 		 <form id="signin" class="form-inline text-center hidden-element">
 	 	 	<div class="form-group">
 	 	 		<div class="input-group">
 	 	 			<div class="input-group-addon">@</div>
 	 	 			<input type="text" class="form-control" id="signin-email" placeholder="Email">
 	 	 		</div>
 	 	 		<div class="form-group">
 	 	 			<div class="input-group">
 	 	 				<div class="input-group-addon">*</div>
 	 	 				<input type="password" class="form-control" id="signin-password" placeholder="Password">
 	 	 			</div>
 	 	 		</div>
 	 	 		<button type="submit" class="btn btn-default">Sign In</button>	 	 	 	 	
 	 	 </form>
 		</div>
 	  </div>
 	 </div>
 	</section>

 	<section id="about">
 	 <div class="container"> <!--section about-->
 	  <div class="row">
 	  	<div class="col-sm-6">
 	  	 <img src="imgs/mock_ipad.jpg" class="img-responsive">
 	  	</div>
 	  	<div class="col-sm-6">
 	  	 <h3>Bootstrap for Mobile First</h3>
 	  	 <p>LifeTimeTechnologies Vietnam develop the newest and the bestest website reponsive design that made for Mobile First</p>
 	  	</div>
 	  </div>
 	 </div>
 	<hr>
 	<!--row 4 bootstrap -->
 	<div class="row">
 	 <div class="col-sm-6">
 	  <h3>I love Vietnam and Happy together with Japan</h3>
 	 </div>
 	 <div class="col-sm-6">
 	   <img src="imgs/mock_nexus.jpg" class="img-responsive">
 	 </div>
    </div>

 	<section id="features">
 	 <div class="container">
 	 <!-- row 5 -->
 	 	<div class="row">
 	 		<div class="col-sm-12">
 	 		 <h3 class="text-center">Feature</h3>
 	 		 <p class="text-center">Highlight Feature from Bootstrap</p>
 	 		</div>
 	 	</div>
 	 
 	 <!--rows 6 in features-->
 	    <div class="row">
 	 		<div class="col-sm-2 col-md-4">
 	 			<div class="feature">
 	 			 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
 	 			 <span class="feature-tag">Future Focus</span>
 	 			</div>
 	 		</div>
 	 		<div class="col-sm-2 col-md-4">
 	 			<div class="feature">
 	 			 <span class="glyphicon glyphicon-road" aria-hidden="true"></span>
 	 			 <span class="feature-tag">CV Best</span>
 	 			</div>
 	 		</div>
 	 		<div class="col-sm-2 col-md-4">
 	 			<div class="feature">
 	 			 <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
 	 			 <span class="feature-tag">Job best</span>
 	 			</div>
 	 		</div>
 	 		<div class="col-sm-2 col-md-4">
 	 			<div class="feature">
 	 			 <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
 	 			 <span class="feature-tag">Vacation fancy</span>
 	 			</div>
 	 		</div>
 	 		<div class="col-sm-2 col-md-4">
 	 			<div class="feature">
 	 			 <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
 	 			 <span class="feature-tag">Life Time</span>
 	 			</div>
 	 		</div>
 	 		<div class="col-sm-2 col-md-4">
 	 			<div class="feature">
 	 			 <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
 	 			 <span class="feature-tag">Save our time</span>
 	 			</div>
 	 		</div>
 	 </div>
 	</section>
 	<section id="pricing">
 	 <div class="container">
 	 	<div class="row">
 	 <!--row 7-->
 	 	 <div class="col-sm-12">
 	 	 	<h3 class="text-center price headline">Price</h3>
 	 	 </div>		
 	 	</div>
 	 <!--row 8-->
 	 	<div class="row">
 	 	 <div class="col-sm-10 col-sm-offset-1">
 	 	 	<table class="table table-striped table-hover">
 	 	 	 <thead>
 	 	 	  <tr>
 	 	 	  	<th class="success">
 	 	 	  	 <h4 class="text-center white-text">Free</h4>
 	 	 	  	</th>
 	 	 	  	<th class="info">
 	 	 	  	 <h4 class="text-center white-text">Silver</h4>
 	 	 	  	</th>
 	 	 	  	<th class="danger">
 	 	 	  	 <h4 class="text-center white-text">Platinum</h4>
 	 	 	  	</th>
 	 	 	  </tr>
 	 	 	 </thead>
 	 	 	 <tbody>
 	 	 	  <tr>
 	 	 	  	<th class="success">
 	 	 	  	 <h4 class="text-center white-text">$HK 0</h4>
 	 	 	  	</th>
 	 	 	  	<th class="info">
 	 	 	  	 <h4 class="text-center white-text">$HK 99</h4>
 	 	 	  	</th>
 	 	 	  	<th class="danger">
 	 	 	  	 <h4 class="text-center white-text">$HK 500</h4>
 	 	 	  	</th>
 	 	 	  </tr>
 	 	 	  <tr>
 	 	 	  	<td>Chelsea</td>
 	 	 	  	<td>Arsenal</td>
 	 	 	  	<td>Barca</td>
 	 	 	  </tr>
 	 	 	  <tr>
 	 	 	  	<td>Chelsea</td>
 	 	 	  	<td>Arsenal</td>
 	 	 	  	<td>Barca</td>
 	 	 	  </tr>
 	 	 	  <tr>
 	 	 	  	<td>Chelsea</td>
 	 	 	  	<td>Arsenal</td>
 	 	 	  	<td>Barca</td>
 	 	 	  </tr>
 	 	 	  <tr>
 	 	 	  	<td>Chelsea</td>
 	 	 	  	<td>Arsenal</td>
 	 	 	  	<td>Barca</td>
 	 	 	  </tr>
 	 	 	  <tr>
 	 	 	  	<td>Chelsea</td>
 	 	 	  	<td>Arsenal</td>
 	 	 	  	<td>Barca</td>
 	 	 	  </tr>
 	 	 	  <tr>
 	 	 	  	<td><a href="#" class="btn btn-success btn-block">Purchase</a></td>
 	 	 	  	<td><a href="#" class="btn btn-info btn-block">Purchase</a></td>
 	 	 	  	<td><a href="#" class="btn btn-danger btn-block">Purchase</a></td>
 	 	 	  </tr>
 	 	 	 </tbody>
 	 	 	</table>
 	 	 </div>
 	 	</div>
 	 </div>
 	</section>
 	<footer>
 		<div class="container">
 			<div class="col-sm-2">
 				<img src="imgs/logo.png" class="img-responsive">
 			</div>
 			<div class="col-sm-2">
 				<h5>LifeTime Techs</h5>
 				<ul class="list-unstyled">
 				 <li><a href="#">LTT Info</a></li>
 				 <li><a href="#">Contact Us</a></li>
 				 <li><a href="#">Job Career</a></li>
 				 <li><a href="#">LTT Press</a></li>
 				</ul>
 			</div>
 			<div class="col-sm-2">
 				<h5>Social</h5>
 				<ul class="list-unstyled">
 				 <li><a href="#">Facebook</a></li>
 				 <li><a href="#">Twitter</a></li>
 				 <li><a href="#">Google+</a></li>
 				</ul>
 			</div>
 			<div class="col-sm-2">
 				<h5>Support</h5>
 				<ul class="list-unstyled">
 				 <li><a href="#">Contact</a></li>
 				 <li><a href="#">Privacy Policy</a></li>
 				 <li><a href="#">Terms & Conditions</a></li>
 				 <li><a href="#">Q&A</a></li>	
 				</ul>
 			</div>
 			<div class="col-sm-4">
 				<address>
 					<strong>LifeTime Inc</strong>
 					Vietnam HeadQuaters<br>
 					Japan<br>
 					<abbr title="Phone">P:</abbr> (+84) 976 015 769
 				</address>
 			</div>
 		</div>

 	</footer>
 	<section id="newsletter" class="text-center">
 	 <h4>Stay here and Happy Together with LifeTimeTech Vietnam</h4>
 	 <form class="form-inline" method="post">
 	 	<div class="form-group">
 	 		<input class="form-control" placeholder="Your Name"> 		
 	 	</div>
 	 	<div class="form-group">
 	 		<input class="form-control" placeholder="Your Email">
 	 	</div>
 	 	<button type="submit" class="btn btn-primary">Join Now!</button>
 	 </form>
 	</section>

 	<section id="contact" class="container">
 	 <div  class="col-sm-offset-2 col-sm-8">
 	 	<form class="form-horizontal">
 	 		<div class="form-group">
 	 		 <label class="col-sm-2 control-label" for="contact-name">Name</label>
 	 		 <div class="col-sm-10">
 	 		 	<input class="form-control" type="text" id="contact-name" placeholder="Your name">
 	 		 </div>
 	 		</div>
 	 		<div>
 	 		 <label class="col-sm-2 control-label" for="contact-email">Email</label>
 	 		 <div class="col-sm-10">
 	 		 	<input class="form-control" type="text" id="contact-email" placeholder="Your Email">
 	 		 </div>
 	 		</div>
 	 		<div class="form-group">
 	 		 <label class="col-sm-2 control-label" for="contact-message">Message</label>
 	 		 <div class="col-sm-10">
 	 		 	<textarea class="form-control" rows="3" placeholder="Your Message here"></textarea>
 	 		 </div>
 	 		</div>
 	 		<div class="form-group">
 	 			<div class="col-sm-offset-2 col-sm-10">
 	 				<label class="checkbox">
 	 					<input type="checkbox" value="">
 	 					I'd like to receive updates from you
 	 				</label>
 	 			</div>
 	 		</div>
 	 		<div class="form-group">
 	 			<div class="col-sm-offset-2 col-sm-10">
 	 				<button class="btn btn-success btn-lg" type="submit">Submit</button>
 	 			</div>
 	 		</div>
 	 	</form>
 	 </div>
 	</section>
 	<section id="team">
 	  <div class="container">
 	  	<div class="row">
 	  		<div class="col-sm-12">
 	  			<ul class="list-inline list-unstyled text-center">
 	  			  <li>
 	  			  	<img src="imgs/jon.png" class="img-rounded">
 	  			  	<h5 class="text-info">xi Jinping</h5>
 	  			  	<p class="text-muted">bad-worker</p>
 	  			  </li>
 	  			  <li>
 	  			  	<img src="imgs/jon.png" class="img-circle">
 	  			  	<h5 class="text-info">Erdogan</h5>
 	  			  	<p class="text-muted">bad boy</p>
 	  			  </li>
 	  			  <li>
 	  			  	<img src="imgs/jon.png" class="img-thumbnail">
 	  			  	<h5 class="text-info">Trump</h5>
 	  			  	<p class="text-muted">good boy</p>
 	  			  </li>
 	  			</ul>
 	  		</div>
 	  	</div>
 	  </div>
 	</section>

 	
 </body>
</html>