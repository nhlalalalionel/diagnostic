<?php  
//export.php  
session_start();
 if (!isset($_SERVER['HTTP_REFERER'])){
 header('Location: index.html');
 }
   
include 'connection.php';
$output = '';
if(isset($_POST["export3"]))
{
	
 $sql="SELECT * FROM client ORDER BY id ASC ";
  $result=$conn->query($sql);
  
 if ($result->num_rows > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Client Name</th>  
                         <th>Client ID</th>  
                         <th>Contact Person</th>
 						 <th>Email</th>  
                         <th>Phone</th>  
                         <th>Address</th>
                    </tr>
  ';
 while($row = $result->fetch_assoc())  
  {
	
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>
                         <td>'.$row["id"].'</td> 
                         <td>'.$row["contact"].'</td>  						 
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["phone"].'</td>
                         <td>'.$row["address"].'</td>						 
                   
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }else{
	  header("Location:notfound.php");
 }
}
?>













































































