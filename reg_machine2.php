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
  	<h1>MACHINE REGISTRATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container">
  		
		<?php


include'connection.php';
$name = $_POST['name'];
$serial = $_POST['serial'];
$model = $_POST['model'];
$_SESSION['serial']=$serial;

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 //$sql1 = "SELECT * FROM machine";
  $sql1 = "SELECT * FROM machine WHERE serial ='$serial'";

$result=$conn->query($sql1);

if($result->num_rows>0){
	
 header("Location:user_exist2.php");
 exit();
}
$id=$_SESSION['id'];

 $sql = "INSERT INTO machine(id,name, serial, model)
 VALUES ('$id','$name','$serial','$model')";
 
 if ($conn->query($sql) === TRUE) {
	 
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?> 

<h4 style ="color:white ;text-align:center">You successfully register new machine, see below the information..</h4>
 <div style="overflow-x:auto;">
 <table width="100%" border="1">
    <tr>
	<td><h3>Device Name:</h3></td>
    <td><h3>Serial # :</h3></td>	 
    <td><h3>Model # :</h3></td>
	<td><h3>User ID :</h3></td>
    </tr>
	
	<tr>
	    <td><?php echo $name ?></td>
        <td><?php echo $serial ?></td>
        <td><?php echo $model?></td>
		<td><?php echo $_SESSION['id']?></td>
    </tr>

 </table>
  </div> 
		
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>