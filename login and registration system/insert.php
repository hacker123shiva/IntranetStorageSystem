<?php 
$name=$_POST['fname0']; 
$father_name=$_POST['fname1'];
$gender=$_POST['fgender'];
$dob=$_POST['fdate'];
$email=$_POST['femail'];
$mobile=$_POST['fmobile'];
$password=$_POST['fpassword'];
$pincode=$_POST['fpincode'];
$address=$_POST['faddress'];
$state=$_POST['fstate'];
$photo=$_POST['fphoto'];
session_start();
$_SESSION['name0']=$name; $_SESSION['name1']=$father_name; $_SESSION['gender']=$gender;
$_SESSION['dob']=$dob; $_SESSION['femail']=$email; $_SESSION['mobile']=$mobile;
$_SESSION['password']=$password; $_SESSION['pincode']=$pincode; $_SESSION['address']=$address;
$_SESSION['state']=$state; $_SESSION['photo']=$photo;
 
//database connection
$conn=new mysqli('localhost','root','','db_login');
 if($conn->connect_error){
     echo"something went wrong";
 }
else{
$q="INSERT INTO `customer_login_details` (`name`, `father_name`, `gender`, `dob`, `email`, `mobile`, `password`, `pincode`, `address`, `state`, `photo`) VALUES ('$name', '$father_name', '$gender', '$dob', '$email', '$mobile', '$password', '$pincode', '$address', '$state', '$photo')";
$conn->query($q);
$conn->close();}
header("location:storage.php");

?>