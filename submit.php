<?php
include('config.php');
include('smtp/PHPMailerAutoload.php');
$f_name = $_POST['f_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$token = $_POST['token'];
$address = $_POST['address'];
$education = $_POST['education'];

if (!empty($f_name) || !empty($email) || !empty($phone) || !empty($token) || !empty($address) || !empty($education)  )  {
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "acharya";    
    
    $link = new mysqli($servername, $username, $password, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT token From student_demo_form Where token = ? Limit 1";
     $INSERT = "INSERT INTO `student_demo_form`(`name`, `email`, `phone`, `token`, `address`,`education`) VALUES ('$f_name','$email','$phone','$token','$address','$education')";
     $stmt = $link->prepare($SELECT);
     $stmt->bind_param("i", $token);
     $stmt->execute();
     $stmt->bind_result($token);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $link->prepare($INSERT);
      $stmt->bind_param("ssiiss", $f_name, $email, $phone, $token, $address, $education);
       $stmt->execute();
        $_SESSION['status']="Form submittted";
        $_SESSION['total']="$total";
        
$customer_email=$email;   
$html='<h2>Student Demo Form has been submitted</h2><br>
<table style="width:100%">
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>phone</td>
    <td>Address</td>
    <td>Edcuation</td>
    <td>Token</td>
  </tr>
  <tr>
    <td>'.$f_name.'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>'.$address.'</td>
    <td>'.$education.'</td>
    <td>'.$token.'</td>
  </tr>
</table> '; 
$sender_email = "testingpixel9943@gmail.com";
$sender_password = "marshall@9943";
$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username = $sender_email;
$mail->Password = $sender_password;
$mail->setFrom($sender_email, "Acharya Education");
$mail->AddCC('rajkamalgautam2001@gmail.com', 'RK');
$mail->addAddress($customer_email);
$mail->IsHTML(true);
$mail->Subject="Acharya Education";
$mail->Body=$html;
$mail->send();   

        header('location: index.php');
     } else {
      echo "<h2>error</h2>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>