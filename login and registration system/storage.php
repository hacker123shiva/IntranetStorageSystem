

<?php
if(isset($_POST['sub']))
{session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_login";
    $email=$_POST['fmail'];
    $pass=$_POST['fpass'];
    // Create connection
    $conn = new mysqli($servername, $username, "", $dbname);
    // Check connection
    if ($conn->connect_error) {
        echo"Something went wrong";
        }
    $sql= "SELECT*FROM customer_login_details WHERE email='$email' and 
    password='$pass'";
    $result=$conn->query($sql);
    //check given email and password exits in given rows
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();
        $_SESSION['check_email']=$email;
        $_SESSION['check_password']=$password;
        header("location:authorise.php");
    }
    else
    {
        echo "Email or Password are incorrect.";
    }

}
 
?>
<html>
 

<head>
    <title> Login </title>
    <style>
       body{ background-image:url("key_login.jpg");
    color:red;}
        </style>
</head>

<body align="center">
    <div>
        <h1><b>Customer Login</b></h1>
    </div>
    <form action="?" method="post">
        <table border=2 align=center>
            <tr>
                <th> Email:</th>
                <td><input type="email" id="iemail" class="cemail" name="fmail" placeholder="Enter your email id" required></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td><input type="password" id="ipass" class="cpass" name="fpass" placeholder="Enter your password" required></td>
            </tr>
            <tr>
                <td colspan=2>
                    <center><input type="submit" name="sub" value="SUBMIT"></a>
                    </center>
                </td>
            </tr>

        </table>
</body>

</html>