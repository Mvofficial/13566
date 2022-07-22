
<?php
$ver='';

$servername = "localhost";

$username = "root";

$password = "";

$database = "Loginform";

$conn = new mysqli($servername, 

           $username, $password, $database);
           
           
        

if (!$conn) {
	  echo "C";
}

    echo "C";
     
     
   $pname=$_POST['pname'];
   $gmail=$_POST['gmail'];
   $pnum=$_POST['pnum'];
    
    
    
$sql = "INSERT INTO Webdata (PNAME,GMAIL,PNUM)
VALUES ('$pname','$gmail','$pnum')";

if ($conn->query($sql) === TRUE) {
  echo "N";
} else {
	
  echo "wait";
}
?>
