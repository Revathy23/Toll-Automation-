<?php

include("connect.php");
 
 $sql="SELECT * FROM vehiclecross";

 if ($result=mysqli_query($conn,$sql))
  {


  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    	$to="$row[1]";
 

$msg = "There is easy way to pass the toll gate at ease without waiting in long queues. \nHence register through toll automator.\n\nRegards,\nTeam Shift+Delete\n";


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($to,"Toll Automator!!!",$msg);

//$sql1="DELETE FROM `due` ";
//if(mysqli_query($conn, $sql1)){ 


echo "Successfully sent";

//}
//else
//{
//echo "Error";
//}
}


}
?>

