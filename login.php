<?php
   include 'dbconnect.php';     
   session_start();
                $_SESSION['gacctid'] = "";
		$_SESSION['gname'] = "";
		$_SESSION['gpassword'] = "";
		$_SESSION['gpassword2'] = "";
		$_SESSION['gemail'] = "";
                $_SESSION['gcompany'] = "";
		$_SESSION['gaddress'] = "";
                
?>
<html>
<title>LogIn</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/newstyle.css"/>
</head>
	
<body>
	<form name = "uclm" method = "POST" action = "login.php"  >
	<script src="javas.js"></script>
	<script src="bootstrap.min.js"></script>


<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
 	<div class="row">
 		 <div class="col-md-5"><h1>World Be Green</h1></div>
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
<nav class="navbar2 navbar-inverse">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Beneficiaries</a></li> 
        <li><a href="#">Event</a></li> 
      </ul>
    </div>
  </div>
</nav>

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
    		
    		<input type = text class="form-control" value = "<?php printf($_SESSION['gacctid']);?>" name = "idtxt" placeholder="Sponsor's ID">
  		</div>
  		
      		<div class="form-group">
    		
    		<input type = text class="form-control" value = "<?php printf($_SESSION['gname']);?>" name = "nametxt" placeholder="Sponsor's Name">
  		</div>
  		<div class="form-group">
  			
    		<input type = password class="form-control" value = "<?php printf($_SESSION['gpassword']);?>" name = "passwordtxt" placeholder="Password">
  		</div>
                <div class="form-group">
  			
    		<input type = password class="form-control" value = "<?php printf($_SESSION['gpassword2']);?>" name = "password2txt" placeholder="Confirm Password">
  		</div>
  		<div class="form-group">
  			
    		<input type = text class="form-control" value = "<?php printf($_SESSION['gemail']);?>" name = "emailtxt" placeholder="Email">
  		</div>
                <div class="form-group">
    		
    		<input type = text class="form-control" value = "<?php printf($_SESSION['gcompany']);?>" name = "companytxt" placeholder="Sponsor's Organization/Company">
  		</div>

  		<div class="form-group">
  			
    		<input type = text class="form-control" value = "<?php printf($_SESSION['gaddress']);?>" name = "addresstxt" placeholder="Address">
  		</div>

  		<div class="form-group push-right">

    	<center>
    	
      	<input type = submit value = "SignUp" name = "SignUp">
        </center>
      	</div>
      	
      

	</div>

      
    </div>
  </div>
	</div>
  <?php
            if(isset($_POST['SignUp']))
            {
                    //$com = "SELECT acctid FROM accts ORDER BY acctid DESC";
                    //$holder = mysqli_query($com);
                    //$row = mysqli_fetch_assoc($holder);
                    //$_SESSION['gacctid'] = $row['acctid'];
                    //$id = $_SESSION['gacctid'] + 1;
                    $id =  $_POST['idtxt'];
                    $name = $_POST['nametxt'];                    
                    $password = $_POST['passwordtxt'];
                    $password2 = $_POST['password2txt'];
                    $email = $_POST['emailtxt'];
                    $company = $_POST['companytxt'];
                    $address = $_POST['addresstxt'];
                    

                    $command = "INSERT INTO accts(acctid,acctname,password,password2,email,company,address,status)VALUES('$id',$name','$password','$password2','$email','$company','$address')";
                    mysqli_query($command);
                    echo"<script>alert('You are now registered!!!')</script>";
                            
                    /*if (!get_magic_quotes_gpc()) 
                    {
                        $_POST['usernametxt'] = addslashes($_POST['usernametxt']);
                }

                             $username = $_POST['usernametxt'];

                             $check = mysql_query("SELECT username FROM registration WHERE username = '$username'") 

                            or die(mysql_error());
                             $check2 = mysql_num_rows($check);		 

                             if ($check2 != 0) {

                                            die('Sorry, the username '.$_POST['usernametxt'].' is already in use.');

                                    }

                    if ($_POST['passwordtxt'] != $_POST['passwordtxt2'])
                    {

                      die('Your passwords did not match. ');

                }
                    if($userid == 0 | $fname == "" | $gname == "" | $mi == "" | $username == "" | $password =="" | $password2 == "" )
                    {
                            echo"<script>alert('Please Enter Correctly!!')</script>";
                             echo"<script>window.location = registration.php')</script>";

                    }
                    else
                    {
                       $command = "INSERT INTO accts(acctid,acctname,password,password2,email,company,address,status)VALUES('$id','$name','$password','$password2','$email','$address','$status')";
                            mysql_query($command);
                            echo"<script>alert('You are now registered!!!')</script>";
                            echo"<script>window.location = ('login.php')</script>";
                    }*/



            }
?>
    	
      	

<div class="foot">
  <div class="col-md-12">
    <h5>Brought to you by Microtron </h5>
  </div>
</div>

	
		
	



</body>
</html>