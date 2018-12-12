<?php 
session_start();


if(isset($_POST['submit_form']))
{
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $name=mysqli_real_escape_string($db,$_POST['email']);
    $number=mysqli_real_escape_string($db,$_POST['phone']);
    $email=mysqli_real_escape_string($db,$_POST['course']);



$sql="SELECT * FROM mail";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$from="shyam.d@edusaarthi.com";
$to=$Email;
$subject=$row['subject'];
$message="<h2>".$row['body']."</h2><br><td><tr><b>Name: </b>".$Fname." ".$Lname."</tr><tr><b>Mobile number: </b>".$Mnumber."</tr><tr><b>Email ID: </b>".$Email."</tr><tr><b>City: </b>".$City."</tr></td><br><img src='http://spjain.edusaarthi.com/images/".$row['img']."'  
style='height: 500px; width: 200px;' alt=''></p>";
$headers=array('From: shyam.d@edusaarthi.com',
'Content-Type: text/html'
);

$result = mail($to,$subject,$message, implode("\r\n", $headers));
if(!$result)
{
 echo '<script language="javascript">';
         echo 'alert("Error in sending mail.")';
         echo '</script>';

}
else
{


 $sql="INSERT INTO user_table(name,phone,email,course) VALUES ('$name',$number, '$email', '$course')";
    mysqli_query($db,$sql);
   echo '<script language="javascript">';
         echo 'alert("Thank You for registering.Check your mail.")';
         echo '</script>';
    
}

}

 ?>