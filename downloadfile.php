<?php 
  
 session_start();
 
  if (!isset($_SERVER['HTTP_REFERER'])){
   header('Location: index.html');
   }
   
$path = $_SERVER['DOCUMENT_ROOT']."/diagnostics/upload/"; 
$fullPath = $path.$_GET['download_file']; 
  
if ($fd = fopen ($fullPath, "r")) { 
    $fsize = filesize($fullPath); 
    $path_parts = pathinfo($fullPath); 
    $ext = strtolower($path_parts["extension"]); 
    switch ($ext) { 
        case "pdf": 
        header("Content-type: application/pdf");  
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download 
        break; 
		
		case "jpg": 
        header("Content-type: application/jpg"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download 
        break; 
		
		case "png": 
        header("Content-type: application/png"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use'attachment' to force a download 
        break; 
		
		case "docx": 
        header("Content-type: application/docx"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download 
        break; 
		
        default; 
        header("Content-type: application/octet-stream"); 
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\""); 
		
    } 
    header("Content-length: $fsize"); 
    header("Cache-control: private"); //this to open files directly 
    while(!feof($fd)) { 
        $buffer = fread($fd, 2048); 
        echo $buffer; 
    } 
} else{
	
	header("Location:no_record.php");
}
fclose ($fd); 
exit; 

?> 