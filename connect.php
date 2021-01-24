<?php
$con = mysqli_connect('localhost', 'root' );
if($con){
  echo "Thanks for your feedback";
}else{
  echo "No connection";
}

mysqli_select_db($con, 'pbl form');

$Username= $_POST['Username'];
$Email= $_POST['Email'];
$Mobile= $_POST['Mobile'];
$Comment= $_POST['Comment'];

$query = " insert into userinfodetails (Username, Email, Mobile, Comment)                                                       
values('$Username', '$Email', '$Mobile', '$Comment')";                                    
  
mysqli_query($con,$query);
?>