<?php  
//export.php  
 session_start();
 include 'connection.php';
  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
 

$output = '';
if(isset($_POST["export_machine"]))
{
	
 $sql="SELECT * FROM machine ORDER BY id ASC";
  $result=$conn->query($sql);
  
 if ($result->num_rows > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Client Name</th>  
                         <th>Serial Number</th>  
                         <th>Model/Description</th>  
                    </tr>
  ';
 while($row = $result->fetch_assoc())  
  {
	$id=$row['id'];
	$sql3 = "SELECT * FROM client WHERE id ='$id'";
	$result3 = $conn->query($sql3);
	$row3 = $result3->fetch_assoc();
	
   $output .= '
    <tr>  
                         <td>'.$row3["name"].'</td>  
                         <td>'.$row["serial"].'</td>  
                         <td>'.$row["model"].'</td>  
                   
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













































































