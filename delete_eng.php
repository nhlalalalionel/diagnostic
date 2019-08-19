<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport1" content="width=device-width,initial-scale=1">
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
  	<h1>DELETE ENGINEER </h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
		<li><a href="main_menu_admin.php">Main Menu Admin</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  		<?php
include'connection.php';


	$id=$_POST['id'];
   
    $sql="SELECT * FROM engineer WHERE id ='$id'";
    $result=$conn->query($sql);
		
if($result->num_rows>0){
	
   $sql="DELETE FROM engineer WHERE id ='$id'";
   $result=$conn->query($sql);
   
   
   
			if ($conn->query($sql) ===TRUE) {  // Checking if delete is sucessfull on the database
			?>
			<h4 style ="color:red ;text-align:center">RECORD DELETED SUCCESSFULLY..</h4>
			<?PHP
			
			
			} else {
			die("Error deleting record: " . $conn->error);
             			// Display error message if file is not deleted from the database
			
			}
?>


	
<?php	
}else{
	
header("Location:delete_notsuccess.php");

}
?>

  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOP BY LIONEL, DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>