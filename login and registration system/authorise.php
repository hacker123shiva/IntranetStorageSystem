 echo'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            box-sizing: border-box;
        }
        
        .nav {
            border: black 4px solid;
        }
        
        .list {
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
            width: 200px;
            position: relative;
            left: 1000px;
            top: -53px;
            list-style: none;
        }
        
        a:hover {
            background-color: rgb(255, 255, 255);
        }
        
        .nav {
            background-image: url("div_image.jfif");
            color: white;
        }
        
        .nav h1 {
            position: relative;
            left: 500px;
        }
        
        .bod {
            border: 5px solid black;
            height: 700px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <h1>User Authorised Content</h1>
        <div>
            <ul>
                <li class="list"><a href="uploadfile.php">Upload File</a></li>
                <li class="list"><a href="uploaded_files.php">Uploaded Files</a></li>
                <li class="list"><a href="change_password.php">Change Password</a></li>
                <li class="list"><a href=" logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="bod"></div>
</body>

</html>
