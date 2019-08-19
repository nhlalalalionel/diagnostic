<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/screen.css"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
  
   <script src="js/jquery.js"></script> 
   <script src="js/jquery.validate.js"></script>   
  
  <script type="text/javascript" src="js/javascript.js"></script>
  <meta http-equiv="refresh" content="900;url=index.html" />
  <title>MSQ DIAGNOSTICS</title>
  <?php
  session_start();
  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
  ?>
</head>
<body>
  <header id="header">
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1>SPARE PART USED</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="update_spare_form.php">Back </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  	
	<h4 style ="color:white ;text-align:center">Please complete the below form</h4>
<div id="container">
  		<div id="formpane1">
  			<div id="signinbox">
  		    <form action="#" id="signinform"method="post">
			<label for="password">Number of spare part </label>
            <select type="text" name="spare" id="address" class="txtfield" tabindex="2" autocomplete="off"> 
		    <option value="spare" ></option>
			  <option>0</option>
              <option>1</option>
			  <option>2</option>
              <option>3</option>
			  <option>4</option>
              <option>5</option>
            </select>
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		</div>
	<?php	
	
	if(isset($_POST["spare"]))
 {
	$spare=$_POST['spare'];	
	
	if($_POST['spare']=='0'){
		
		header("Location:spare_part.php");
		
	} else if($_POST['spare']=='1'){
		?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare Name </label>
            <input type="text" name="spare1" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description</label>
            <input type="text" name="description1" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
	<?php	
		
	
	}else if($_POST['spare']=='2'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare 1 Name </label>
            <input type="text" name="spare2" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 1</label>
            <input type="text" name="description2" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare 2 Name </label>
            <input type="text" name="spare22" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 2</label>
            <input type="text" name="description22" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>		
			
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
		
		
	}else if($_POST['spare']=='3'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare 1 Name </label>
            <input type="text" name="spare3" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 1</label>
            <input type="text" name="description3" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare 2 Name </label>
            <input type="text" name="spare33" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 2</label>
            <input type="text" name="description33" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>

			<label for="username">Spare 3 Name </label>
            <input type="text" name="spare333" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 3</label>
            <input type="text" name="description333" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			       
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
		
	}else if($_POST['spare']=='4'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare 1 Name </label>
            <input type="text" name="spare4" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 1</label>
            <input type="text" name="description4" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare 2 Name </label>
            <input type="text" name="spare44" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 2</label>
            <input type="text" name="description44" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>

			<label for="username">Spare 3 Name </label>
            <input type="text" name="spare444" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 3</label>
            <input type="text" name="description444" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Spare 4 Name </label>
            <input type="text" name="spare4444" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 4</label>
            <input type="text" name="description4444" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			       
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>
		
		
	<?php	
			
	}else if($_POST['spare']=='5'){
		
			?>
			<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="spare_part.php" id="signinform"method="post">
			
			<label for="username">Spare 1 Name </label>
            <input type="text" name="spare5" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 1</label>
            <input type="text" name="description5" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			        
			<label for="username">Spare 2 Name </label>
            <input type="text" name="spare55" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 2</label>
            <input type="text" name="description55" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>

			<label for="username">Spare 3 Name </label>
            <input type="text" name="spare555" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 3</label>
            <input type="text" name="description555" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Spare 4 Name </label>
            <input type="text" name="spare5555" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 4</label>
            <input type="text" name="description5555" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Spare 5 Name </label>
            <input type="text" name="spare55555" id="name" class="txtfield" tabindex="4" autocomplete="off" required>
			
			<label for="username">Description 5</label>
            <input type="text" name="description55555" id="contact" class="txtfield" tabindex="4" autocomplete="off" required>
			       
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>
  			</div>
  		</div>	
	<?php	
		
		
	}
 }
?>
	

  	</div>
  </section>  <footer id="footer">
   <p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>