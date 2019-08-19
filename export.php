<?php  
//export.php  
session_start();
 if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }

include 'connection.php';
$output = '';
if(isset($_POST["export"]))
{
	
 $ticket=$_SESSION['ticket'];
 $sql="SELECT * FROM updates WHERE ticket ='$ticket'";
  $result=$conn->query($sql);
  
 $sql3 = "SELECT * FROM tickets WHERE ticket ='$ticket'";
 $result3 = $conn->query($sql3);
 $row3 = $result3->fetch_assoc();
 if ($result->num_rows > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Problem</th>  
                         <th>Status</th>  
                         <th>Update</th>  
                         <th>Engineer</th>
                         <th>Date Updated</th>
                    </tr>
  ';
 while($row = $result->fetch_assoc())  
  {
   $output .= '
    <tr>  
                         <td>'.$row3["problem"].'</td>  
                         <td>'.$row3["status"].'</td>  
                         <td>'.$row["updates"].'</td>  
                         <td>'.$row["engineer"].'</td>  
                         <td>'.$row["date"].'</td>
    </tr>
   ';
   $row['problem']='';
   $row['status']='';
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













































































