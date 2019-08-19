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
  <style type="text/css">
div#pagination_controls{font-size:12px;}
div#pagination_controls > a{ color:#06F; }
div#pagination_controls > a:visited{ color:#06F; }

 table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
 
</style>
  <?php
  session_start();
   if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
  ?>
</head>
<body>
  <header id="header2">
   <h4 style="color:white;float:left"> <?php echo "Welcome  : "  .$_SESSION['firstname']?> </h4>
  	<h1>CLIENT INFORMATION</h1>
	 <h4><a href="index.html" style="color:white;float:left">logout</a></h4>
  </header>
  
 <div id="navigation2">
      <ul>
        <li><a href="reg_client_form.php">Back</a></li>
      </ul>
    </div>
	<br>
  <section id="maincontent">
   <br><br><br>
  <div id="container2">
 <?php
include 'connection.php';

// Get the total count of rows

  $sql = "SELECT COUNT(id) AS total FROM client";
 $result=$conn->query($sql);
 $row = $result->fetch_assoc();

// Total row count
$rows = $row['total'];
// Number of results we want displayed per page
$page_rows = 10;
// Page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// Makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

$sql="SELECT * FROM client ORDER BY id ASC $limit";
$query = $conn->query($sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';
?>
   <h4><a style ="color:white">CLIENT INFORMATION TABLE.</a></h4>
   <div style="overflow-x:auto;">
   <table width="100%" border="1">
   <tr>
    <td><h3>Client Name</h3></td>
    <td><h3>Client ID</h3></td>
	<td><h3>Contact person</h3></td>
	<td><h3>Email </h3></td>
	<td><h3>Phone</h3></td>
	<td><h3>Address</h3></td>
   </tr>
	
<?php

 if ($query->num_rows > 0) {
    // output data of each row
    while($row = $query->fetch_assoc()) {
	?>	
		<tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['id'] ?></td>
		<td><?php echo $row['contact'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><?php echo $row['phone'] ?></td>
		<td><?php echo $row['address'] ?></td>
        </tr>
         <?php
    }
	
	?>
	</table>
	</div>
  <p><?php echo $textline2; ?></p>
  <p><?php echo $list; ?></p>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div><br>
  
	<?php
} else {
 header("Location:no_record.php");
}
?>
  </div>
     <form method="post" action="export3.php">
     <input type="submit" name="export3" class="btn btn-success" value="Export" />
     </form><br><br><br>
  </section>  <footer id="footer">
  	<p>DEVELOP BY LIONEL, DESIGNED BY MSQ DIAGNOSTICS TEAM</p>
  </footer>
</body>
</html>