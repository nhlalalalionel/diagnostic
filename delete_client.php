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
  	<h1>DELETE CLIENT </h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  	<div id="container2">
  		<?php
include'connection.php';


	$id=$_POST['id'];
	
	$sql1="SELECT * FROM machine WHERE id ='$id'";
    $result1=$conn->query($sql1);
		
if($result1->num_rows>0){
	
	?>
	
<h4 style ="color:white">There are some machine which are still allocated to this client, please make sure that all machine are reallocated to other client before deleting..</h4>
<h4 style ="color:white">Please  <a href="reallocate_form.php" style ="color:blue">click here</a> to reallocate the machine</h4><br>
   </div>
  </section>  <footer id="footer">
  	<p>DEVELOP BY LIONEL, DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>

<?php
exit();
}
   
    $sql="SELECT * FROM client WHERE id ='$id'";
    $result=$conn->query($sql);
		
if($result->num_rows>0){
	
   $sql="DELETE FROM client WHERE id ='$id'";
   $result=$conn->query($sql);
   
	 $sql2="DELETE FROM machine WHERE id ='$id'";
	 $result2=$conn->query($sql2);
	//  $sql3="DELETE FROM tickets WHERE client_id ='$id'";
	//  $result3=$conn->query($sql3);
	//   $sql4="DELETE FROM updates WHERE client_id ='$id'";
	 //  $result4=$conn->query($sql4);
   
   
			if ($conn->query($sql) ===TRUE) {  // Checking if delete is sucessfull on the database
			?>
			<h4 style ="color:white">RECORD DELETED SUCCESSFULLY..</h4>
			<?PHP
			
			
			} else {
			die("Error deleting record: " . $conn->error);
             			// Display error message if file is not deleted from the database
			
			}
			


  
?>


	
<?php	
}else{
	
header("Location:update_notsuccess2.php");

}
?>

  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOP BY LIONEL, DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>