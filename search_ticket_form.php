<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport1" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/screen.css"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
  
   <script src="js/jquery.js"></script> 
   <script src="js/jquery.validate.js"></script>   
   
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
<body style="font-family:Time New Roman">
  <header id="header">
   <h4 style="color:white;float:left;font-size:13"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1 style="font-size:28">SEARCH TICKET</h1>
	 <h4><a href="index.html" style="color:white;float:left;font-size:14">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
        <li><a href="downloads.php">User ID </a></li>
        <li><a href="open_ticket.php">Open Ticket</a></li>
        <li><a href="creat_ticket_form.php">Create Ticket</a></li>
        <li><a href="all_ticket.php">All Ticket</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        <a href="#" id="signin" class="tab select">Ticket </a>
		<a href="#" id="signup" class="tab signup">User ID</a>
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
			
  		    <form action="search_ticket.php" id="signinform"method="post">
			
			<label for="username">Ticket Number </label>
            <input type="text" name="ticket" id="name" class="txtfield" tabindex="4" autocomplete="off"> <br>         
            
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  			</form>	
			
  			</div>
		  <div id="signupbox">
  		  <form action="search_ticket2.php" id="signupform"method="post">
		  <label for="username">From this Date </label>
          <input type="text" name="date" id="name" class="txtfield" tabindex="4" autocomplete="off"><br>
		  
		  <label for="username">To this date</label>
          <input type="text" name="date2" id="name" class="txtfield" tabindex="4" autocomplete="off">
		  
		  <label for="username">Client User ID</label>
          <input type="text" name="id" id="name" class="txtfield" tabindex="4" autocomplete="off">
      
          <input type="submit" name="registerbtn" id="registerbtn" value="SUBMIT" class="btn" tabindex="9">
  				</form>
  			</div>
			
  		</div>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
  
  <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->


<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date2"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
</body>
</html>