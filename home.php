<?php


session_start();
if(!isset($_SESSION['user'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
      <head> 
	 <meta charset="utf-8"/>
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 <meta name="viewpoint" content="width-device-width">
	 <title>project</title>
	 <link rel="stylesheet" href="css/bootstrap.css"/>
	 <link rel="stylesheet" href="css/mystyle.css"/>
	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
	<style>
	.x{
	border-top:4px solid green;
	border-bottom: 8px groove orange;
	background:#000033;
	
	}
</style>
	  </head>
	  <body>
	  <div class="container-fluid top_bar">
	  <div class="container">
	  <div class="row">
	  <div class="col-sm-3">
	  <a href="https://touch.facebook.com/profile.php?id=100005321040375&ref=content_filter" data-toggle="tooltip" data-placement="bottom" title="facebook" class="social_icons "><i class="fa fa-facebook" style="font-size:22px;color:#fff;"></i></a>
	  <a href="http://www.twitter.com" data-toggle="tooltip" data-placement="bottom" title="twitter" class="social_icons"><i class="fa fa-twitter" style="font-size:22px;color:#fff;"></i></a>
	  <a href="http://www.youtube.com" data-toggle="tooltip" data-placement="bottom" title="youtube" class="social_icons"><i class="fa fa-youtube-play" style="font-size:22px;color:#fff;"></i></a>
	  <a href="http://www.google.com" data-toggle="tooltip" data-placement="bottom" title="google+" class="social_icons"><i class="fa fa-google-plus" style="font-size:22px;color:#fff;"></i></a>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="search" class="social_icons"><i class="fa fa-search" style="font-size:22px;color:#fff;"></i></a>
	</div>
	<div class=" col-lg-3 text-right">	
	<form>
	<input type="text" name="search" placeholder="search....">
	<button type="submit" class="btn btn-primary">submit</button>
	</form>
	</div>
	  
	  <div class="col-sm-9b text-right contact_info">
	  <span class="glyphicon glyphicon-envelope"></span>ashishroxx18@gmail.com, 
	  <span class="glyphicon-earphone"></span>  +91 9546245784
	  </div>
	  </div>
	  </div>
	  </div>
	  <div class="container">
	  <div class="row">
	  <div class="col-sm-5">
	  <img src="images/logo1.png" alt="" width="400" height="200px"/>
	  </div>
	  <div class="col-sm-7 my_menu">
	  <nav class="navbar navbar-default">
	  <div class="collapse navbar-collapse" id="mynavbar">
	  <ul class="nav navbar-nav pull-right">
	  
	  <li ><a href=""> <span style="font-size:20px;">home </span></a></li>
	  <li><a href="admin.php"><span style="font-size:20px;">admin </span></a></li>
	  <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""> <span style="font-size:20px;">subject <span class="caret"></span></span></a>
	  <ul class="dropdown-menu">
	  <li> <a href="c.php">c</a></li>
	  <li><a href="c++.php">c++</a></li> 
	  <li><a href="java.php">java</a> </li>
	  <li> <a href="python.php">python</a></li>
      	  <li> <a href="ds.php">data structure</a></li>
	  <li> <a href="php.php">php</a></li>
          <li> <a href="js.php">java script</a></li>
	   <li> <a href="">more...</a></li>
	  
	
	  </ul>
	  </li>
	  

	  <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""> <span style="font-size:20px;">language <span class="caret"></span></span></a>
      <ul class="dropdown-menu">
	  <li> <a href="">hindi</a></li>
	  <li><a href="">english</a></li> 
	  <li><a href="">spanish</a> </li>
	  <li> <a href="">chinese</a></li>
	  <li> <a href="">rushian</a></li>
	  <li> <a href="">more</a></li>
	   
	  
	
	  </ul>	  
	  </li>
	  	 <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""> <span style="font-size:20px;">Result <span class="caret"></span></span></a>
	  <ul class="dropdown-menu">
	  <li> <a href="resultc.php">c</a></li>
	  <li><a href="resultc++1.php">c++</a></li> 
	  <li><a href="resultjava.php">java</a> </li>
	  <li> <a href="resultpython.php">python</a></li>
      	  <li> <a href="resultds.php">data structure</a></li>
	  <li> <a href="result.php">php</a></li>
          <li> <a href="resultjs.php">java script</a></li>
	   <li> <a href="">more...</a></li>
	  
	
	  </ul>
	  </li>
		<li><a href="logout.php"><span style="font-size:20px;">logout  </span></a></li>
	  </ul>
	  </div>
	  </nav>
	  </div>
	  </div>
	  <div class="container-fluid">
	  <div class="row">
	  <div id="my_carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
	  <div class="carousel-inner">
	  
	  <div class="item active">
	  <img src="images/p15.jpg" />
	  </div>
	  <div class="item">
	  <img src="images/p16.jpg"  />
	  </div>
	  <div class="item">
	  <img src="images/p17.jpg"  />
	  </div>
	  <div class="item">
	  <img src="images/p18.jpg" />
	  </div>
	  <div class="item">
	  <img src="images/65.jpg"/>
	  </div>
	  <div class="item">
	  <img src="images/p20.jpg"/>
	  </div>
	  <div class="item">
	  <img src="images/p27.jpg" />
	  </div>
	  <div class="item">
	  <img src="images/p21.jpg" />
	  </div>  
	  <div class="item">
	  <img src="images/p22.jpeg" />
	  </div>  
	  <div class="item">
	  <img src="images/p23.png"  />
	  </div>  
	  <div class="item">
	  <img src="images/p24.jpg"  />
	  </div> 
	   <div class="item">
	  <img src="images/p25.jpg"  />
	  </div>  
	   <div class="item">
	  <img src="images/p26.jpg"  />
	  </div>  
	   
	   
	  </div>
	  </div>
	  </div>
	  </div>
	  <div class="container">
	  <div class="row">
	  <div class="col-sm-8">
	  <h1> <strong class="heading">WELCOME <span style="color:#009999;"> TO  </span><span style="color:red;">QUIZOTICA</span> </strong></h1>
	  <p style="font-size:20px;">hola amigo!!we are introducing a very useful project "online quizing system"..this is online plateform to increse your programming skills by solving questions of various subjects. this contains about 10 programming subjects's quizing questions.so keep practicing through this site..."thank you>" 
	  </P>
	  
	  <p style="font-size:20px;"> to take part in quiz  <a href=""> click here</a> 
	  </p>
	  <p><a href="" class="btn btn-success">read more...</a></p>
	  </div>
	  <div class="col-sm-4">
	  <img src="images/p1.jpg" alt="" class="img-responsive   languages" />
	  </div>
	  </div>
	  </div>
	  <div class="container-fluid our_courses"> 
	  <div class="container-fluid">
	  <h1 class="text-center"> <span style="color:white;"></span> TOPIC FOR<span style="color:orange;">QUIZ</span></h1>
	  <div class="row"> 
	   <div class="col-sm-3">
	 <a href="php.php" title="php quiz"> <img src="images/p7.jpg" alt="" class="img-responsive"/></a>
	   </div>
	   <div class="col-sm-3">
	    <a href="c.php" title="c quiz"><img src="images/p13.jpg" alt="" class="img-responsive"/></a>
	   </div>
	   
	   <div class="col-sm-3">
	    <a href="c++.php" title="c++ quiz"><img src="images/p4.jpg" alt="" class="img-responsive"/></a>
	   </div>
	   
	   <div class="col-sm-3">
	    <a href="java.php" title="java quiz"><img src="images/p6.jpg" alt="" class="img-responsive"/></a>
	   </div>
	 
	  </div>
	  <div class="row top_margin">
	   <a href="c#.php" title="C# quiz"><div class="col-sm-3"><img src="images/p11.jpg" alt="" class="img-responsive"/></div></a>
	  
	   <a href="ds.php" title="D.S quiz"><div class="col-sm-3"><img src="images/p12.jpg" alt="" class="img-responsive"/></div></a>
	  
	   <a href="python.php" title="python quiz"><div class="col-sm-3"><img src="images/p2.jpg" alt="" class="img-responsive"/></div></a>
	  
	   <a href="js.php" title="java script quiz"><div class="col-sm-3"><img src="images/p10.jpg" alt="" class="img-responsive"/></div></a>
	  
	  </div>
	  </div>
	  </div>
	  <!--<div class="container">
	  <h2 class="text-center"> <strong><span style="color:red;"> OUR TEAM </span></strong></h2>
	  <div class="col-md-2">
	  <div class="thumbnail">
	  <img src="images/20.jpg" alt="" width="100px" height="100px" class=" img-circle"/>    
	  
	  <div class="caption">
	  <h3 class="text-center">ashish kumar </h3>
	  <p>scholar no.-161112236<br>CSE2
	  </p>
	  <a href="" class="btn btn-primary">contact ashish</a><a href="" class="btn btn-default">send email</a>
	  </div>
	  </div>
	  </div>
	  
	  <div class="col-md-2"> <div class="thumbnail">
	  <img src="images/25.jpg" alt="" width="100px" height="100px" class="img-circle"/>    
	  
	  <div class="caption">
	  <h3 class="text-center">Arjun <br>thakur</h3>
	  <p>scholar no.-161112252<br>CSE2
	  </p>
	  <a href="" class="btn btn-warning">contact Arjun</a><a href="" class="btn btn-default">send email</a>
	  </div> </div>
	  </div>
	  
	  <div class="col-md-2"> 
	   <div class="thumbnail">
	  <img src="images/27.jpg" alt="" width="100px" height="100px" class=" img-circle"/>    
	  
	  <div class="caption">
	  <h3 class="text-center">Ajay <br>shah  </h3>
	  <p>scholar no.-161112225<br>CSE2
	  </p>
	  <a href="" class="btn btn-danger">contact Ajay</a><a href="" class="btn btn-default">send email</a>
	  </div>
	  </div>
	  </div>
	   <div class="col-md-2">
	  <div class="thumbnail">
	  <img src="images/26.jpg" alt="" width="100px" height="100px" class="img-circle"/>    
	  
	  <div class="caption">
	  <h3 class="text-center">Sushil verma </h3>
	   <p> scholar no.-161112267<br>CSE2  </p>
	  <a href="" class="btn btn-success">contact Sushil</a><a href="" class="btn btn-default">send email</a>
	  </div>
	  </div>
	  </div>
	  	  <div class="col-md-2"> 
	   <div class="thumbnail">
	  <img src="images/31.jpg" alt="" width="100px" height="100px" class=" img-circle"/>    
	  
	  <div class="caption">
	  <h3 class="text-center">Ashish prajapati </h3>
	  <p>scholar no.-161112231<br>CSE2
	  </p>
	  <a href="" class="btn btn-info">contact prajapati</a><a href="" class="btn btn-default">send email</a>
	  </div>
	  </div>
	  </div> 
	   <div class="thumbnail">
	   <div class="embed-responsive embed-responsive-16by9">
	   <iframe  src="https://www.youtube.com/embed/HXU97NUVK_I"  allowfullscreen></iframe>
	   </div>
	   <br>
	   <br>
	   <br>
	    <h4><a href="">click here</a>to know more news about sports</h4>
		</div>
		</div> -->
		<div class="card">
		<div class="container-fluid col-lg-12 card-header text-center">
			<h2>><strong><span style="color:red;">related  </span> <spam style="color:green"> links</spam></strong></h2>
		<div class="x">
		<h3>programming video lectures</h3>
		<ul>
			<p><a href="https://www.mysirg.com/">&raquo;c</a></p>
			<p><a href="https://www.youtube.com/results?search_query=saurabh+shukla">&raquo;c++</a></p>
			<p><a href="https://www.youtube.com/watch?v=5uTQz43k4gg&list=PLsFNQxKNzefJNztGGoQC-59UhSwIaiIW3">&raquo;ds</a></p>
			<p><a href="https://www.w3schools.com/php/default.asp">&raquo;php</a></p>
			<p><a href="https://www.youtube.com/channel/UCJbPGzawDH1njbqV-D5HqKw">&raquo;python</a></p>
			<p><a href="https://www.youtube.com/channel/UCGR3vMYA20JJDQvGFccujdA">&raquo;java</a></p>
			<p><a href="https://www.w3schools.com/php/default.asp">&raquo;java script</a></p>
			<p><a href="https://www.youtube.com/watch?v=SXmVym6L8dw&list=PLAC325451207E3105">&raquo;c#</a></p>
			</ul>
		</div>
		</div>		
	  
	  
	  
	  </div>
	  
	  <br>
	  <div class="container-fluid">
	  <div class="container">
	  <div class="row">
	  <div class="col-md-12">
	  <h2><center><strong class="heading">our <span style="color:blue;">location</span></strong></center></h2>
	  <br>
	  <br>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.9431954270117!2d77.41015615014753!3d23.208740684784765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c42e2ce3cac89%3A0x66ea42d06527f2b9!2z4KS54KWJ4KS44KWN4KSf4KSyIOCkqOCkueClgOCkgiAxMCAo4KSPIOCkquClgCDgpJzgpYcg4KSF4KSs4KWN4KSm4KWB4KSyIOCkleCksuCkvuCkriDgpK3gpLXgpKgp!5e0!3m2!1shi!2sin!4v1522011460472" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	  </div>
	  </div></div></div>
	  <br>
	  <br>
	  
	  
	  
	  
	  
	  
	  
	  <div class="container-fluid footer"> 
	  <div class="container">
	  <div class="col-sm-4">
	  <img src="images/logo.jpeg" class="img-responsive"/>
	 <p>hola amigo!!we are introducing a very useful project "online quizing system"..this is online plateform to increse your programming skills by solving questions of various subjects. this contains about 10 programming subjects's quizing questions.so keep practicing through this site..."thank you>" 
	  </P>
	  </P>
	  <p><a href="" class="btn btn-danger">read more...</a></p>
	  
	  
	  </div>
	  
	  <div class="col-sm-4">
	  <h3>Quick links</h3>
	  <ul>
	  <li><a href="">&raquo;home</a></li>
	  <li><a href="">&raquo;about</a></li>
	  <li><a href="">&raquo;quiz subject</a></li>
	  <li><a href="">&raquo;admin</a></li>
	  <li><a href="">&raquo;result</a></li>
	  <li><a href="logout.php">&raquo;logout</a></li>
	  </ul>
	  </div>
	  
	  <div class="col-sm-4">
	  <h3>contact details</h3>
	  <p><strong>address:</strong> near mata mandir,MANIT BHOPL</p>
	  <p><strong>email:</strong> ashishroxx18@gmail.com</p>
	  <p><strong>phone no : </strong>8002643576</p>
	  <br>
	  <p style="color:white; font-size:18px">&#64;copyright 2017!!designed by....</P>
	  


	  
	  </div>
	  
	  


      </div>
	  </div>
	  
	  

	  
	   
	  
	    
	  <script type="text/javascript"src="js/jquery.js"></script>
	  
	  <script type="text/javascript"src="js/bootstrap.js"></script>
	  <script type="text/javascript">
	  &(document).ready( function(){ 
	   &('[data-toogle="tooltip"]').tooltip();  
		 });
	  </script>
	  
   </div>
</body>
</html>  


