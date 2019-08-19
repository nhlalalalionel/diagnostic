<?php  
//export.php  
 session_start();
  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }

include 'connection.php';
$output = '';
if(isset($_POST["export2"]))
{
	
	
    $id= $_SESSION['id'];
	$date=$_SESSION['date'];
	$date2=$_SESSION['date2'];
	
  $sql="SELECT * FROM tickets WHERE client_id ='$id' && dates>= '$date' && dates<= '$date2'";
  $result=$conn->query($sql);
  
    $sql4="SELECT * FROM client WHERE id ='$id'";
    $result4=$conn->query($sql4);
	$row4 = $result4->fetch_assoc();
  
 
 if ($result->num_rows > 0)
 {
  $output .= '
    <table class="table"> 
 
                    <tr>  
                         <th>CLIENT NAME : </th>  
                         <th>'.$row4["name"].'</th>  
                         
                    </tr>
	</table>
   <table class="table" bordered="1"> 
 
                    <tr>  
                         <th>Ticket #</th>
                         <th>Device Name</th>
                         <th>Serial #</th>    						 
                         <th>Problem</th>  
                         <th>Reporter</th>  
                         <th>Dates Created</th>
                         <th>Status</th>
						 <th>Closing Date</th>
						 <th>Spare Used</th>
						 <th>Spare1</th>
						 <th>Part1</th>
						 <th>Spare2</th>
						 <th>Part2</th>
						 <th>Spare3</th>
						 <th>Part3</th>
						 <th>Spare4</th>
						 <th>Part4</th>
						 <th>Spare5</th>
						 <th>Part5</th>
						 
                    </tr>
  ';
 while($row = $result->fetch_assoc())  
  {
	  
    $job_card=$row['job_card'];
	
    if($job_card==''){
    $job_card='Pending';
    }		
	
	$serial=$row['serial'];	
	$sql4 = "SELECT * FROM machine WHERE serial ='$serial'";	
	$result4 = $conn->query($sql4);	
	$row4 = $result4->fetch_assoc();

	$ticket=$row['ticket'];
	$sql3 = "SELECT * FROM spare WHERE ticket ='$ticket' ";
	$result3 = $conn->query($sql3);
	
	if ($result3->num_rows > 0){
		
	$row3 = $result3->fetch_assoc();
	$closing_date=$row3['closing_date'];
	
	$spare1=$row3['spare1'];
	$description1=$row3['description1'];
	$spare2=$row3['spare2'];
	$description2=$row3['description2'];
	$spare3=$row3['spare3'];
	$description3=$row3['description3'];
	$spare4=$row3['spare4'];
	$description4=$row3['description4'];
	$spare5=$row3['spare5'];
	$description5=$row3['description5'];

	$number=$row3['number'];
	 if($number==''){
      $number='Pending';
    }	
	
	
	}else{
		$closing_date='Pending';
		$number='Pending';
		
	}
	  
	  
   $output .= '
    <tr>  
                         <td>'.$row["ticket"].'</td> 
                         <td>'.$row4["name"].'</td>
                         <td>'.$row["serial"].'</td>  						 
                         <td>'.$row["problem"].'</td>  
                         <td>'.$row["reporter"].'</td>
                         <td>'.$row["opening_date"].'</td> 						 
                         <td>'.$row["status"].'</td>
						 <td>'.$closing_date.'</td>
					     <td>'.$number.'</td>
						 <td>'.$spare1.'</td>
						 <td>'.$description1.'</td>
						  <td>'.$spare2.'</td>
						 <td>'.$description2.'</td>
						  <td>'.$spare3.'</td>
						 <td>'.$description3.'</td>
						  <td>'.$spare4.'</td>
						 <td>'.$description4.'</td>
						  <td>'.$spare5.'</td>
						 <td>'.$description5.'</td>
					 
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













































































