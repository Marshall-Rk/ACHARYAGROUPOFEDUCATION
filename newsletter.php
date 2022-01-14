<?php 
//Databse Connection file
include('config.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
   
    $email=$_POST['email'];
   
  
  // Query for data insertion
     $query=mysqli_query($link, "insert into email_sub (email) value('$email')");
    if ($query) {
    echo "<script>alert('You have successfully Subscribed');</script>";

  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<script type="text/javascript">
window.location = "index.php";
</script> 