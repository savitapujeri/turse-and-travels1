<?Php
$server  ="localhost";
$username = "root";
$password = "";

$db = "ture";




$con = mysqli_connect($server, $username, $password, $db);

$db = mysqli_select_db($con, $db );


?>
<?php

 if($con){
	//echo"connectiondone";
	


  ?>

  <script>
   alert('connection sucessfuly');
  </script>

<?php

 }else{
	die("no connection" .mysqli_connect_error());
	
}


?>

