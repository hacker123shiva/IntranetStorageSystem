<?php
if(isset($_POST['sub']))
{session_start();
 $password=$_POST["pass"];
$email= $_SESSION['check_email'];
$con=new mysqli('localhost','root','','db_login');
$q="UPDATE `customer_login_details` SET password='$password' WHERE email='$email' ";
$con->query($q);
$con->close();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="?" method="post" >
    <table>
        <tr> <th>Change password: <input type="password" name="pass" class="cpass" id="fpass" required ></th></tr>
        <th>Confirm password: <input type="password" name="cpass" class="ccpass" id="fcpass" required {}></th></tr>
        <tr><th><input type="submit" name="sub" value="Change password"></th></tr>
    </table>
</form>
</body>
</html>