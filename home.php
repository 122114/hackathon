<?php
   include 'dbconnect.php'; 
?>
<html>
<title>Home</title>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

            <link rel="stylesheet" href="css/bootstrap.css"/>
            <link rel="stylesheet" href="css/newstyle.css"/>
    </head>
	
<body>
	
	<script src="javas.js"></script>
	<script src="bootstrap.min.js"></script>


<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
 	<div class="row">
 		 <div class="col-md-5"><h1>Hello World</h1></div>
 		 <br>
    	 <div class="col-md-7"><form class="form-inline pull-right">
  <div class="form-group">
 
    <label for="exampleInputName2">Username</label>
    <input type="text" class="form-control left-align" id="exampleInputName2">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail2">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form></div>
    <div>
  </div>
</nav>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">About</a></li>
  <li role="presentation"><a href="#">Benefactors</a></li>
  <li role="presentation"><a href="#">Events</a></li>
</ul>

	<div class="rows">
	<div class="col-md-12">
	<div class="col-md-9">
		<div class="home">
		<h1>Never doubt that a small group of thoughtful, 
		committed citizens can change the world. Indeed, it is the only thing that ever has</h1>
		
		</div>

		
	</div>
		
	<div>
		
	<div class="col-md-3">	
      		<br>
      		<p> Sign Up now to help build a greener environment</p>
      		
      		<div class="form-group">
    		
    		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
  		</div>
  		<div class="form-group">
  			
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Password">
  		</div>
  		<div class="form-group">
  			
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
  		</div>

  		<div class="form-group">
  			
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your Place">
  		</div>

  		<div class="form-group push-right">
    	
    	<center>
    	
      	<button type="submit" class="btn btn-default">Sign Up</button>
      	</center>
      	</div>
      	
      

	</div>

      
    </div>
  </div>
	</div>
    
</body>
</html>