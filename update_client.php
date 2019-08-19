<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/screen.css"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
  
   <script src="js/jquery.js"></script> 
   <script src="js/jquery.validate.js"></script>   
  
  <script type="text/javascript" src="js/javascript.js"></script>
  <title>MSQ DIAGNOSTICS</title>
  <?php
  session_start();
  ?>
</head>
<body>
  <header id="header2">
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1>UPDATE CLIENT INFORMATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
  <div id="navigation2">
      <ul>
        <li><a href="main_menu.php">Main Menu</a></li>
        <li><a href="downloads.php">User ID </a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
  <br><br><br><br>
  	<div id="container2">
  		<?php


include'connection.php';



	$id=$_POST['id'];
	$_SESSION['id']=$id;
   
    $sql="SELECT * FROM client WHERE id ='$id'";
    $result=$conn->query($sql);
		

if($result->num_rows>0){
	
	//
$row = $result->fetch_assoc();

  
?>

<h4 style ="color:white">Complete the below form to update the information..</h4>
    <div style="overflow-x:auto;">
	<table width="100%" border="1">
	<tr>
    <td><h3>Client Name</h3></td>	 
    <td><h3>Contact Person</h3></td>
	 <td><h3>Telephone</h3></td>
	 <td><h3>Email</h3></td>
    <td><h3>Address</h3></td>
    </tr>
	
	<tr>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["contact"]?></td>
		<td><?php echo $row["phone"]?></td>
		<td><?php echo $row["email"]?></td>
        <td><?php echo $row["address"] ?></td>
    </tr>
	
	</table>
	</div>
<?php	
}else{
	
header("Location:update_notsuccess2.php");

}
?>

<div id="container2">
  <div id="tabbox">  	  			
      <a href="#" id="signin" class="tab select4"></a>
       
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
  		    <form action="update_client2.php" id="signinform"method="post">
			
			<label for="password">Information to be updated </label>
            <select type="text" name="role" id="address" class="txtfield" tabindex="2" autocomplete="off"> 
		    <option value="role" >Please select your role</option>
              <option>name</option>
              <option>contact_person</option>
			  <option>phone</option>
			  <option>email</option>
			  <option>address</option>
            </select>
			
			<label for="username">Update </label>
            <textarea  type="text" rows="5" id="description" name="model" style ="height:50px" name="model" id="contact" class="txtfield" tabindex="4" autocomplete="off"></textarea>
			
            <input type="submit" name="loginbtn" id="submitlogin" value="SUBMIT" class="btn" tabindex="3">
  				</form>
  			</div>
  	
  		</div>
</div>
  	</div>
  </section>  <footer id="footer">
  	<p>DEVELOPED BY LIONEL AND DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>