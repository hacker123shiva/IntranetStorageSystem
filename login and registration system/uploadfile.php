<?php
if(isset($_FILES['images']))
{
     
        $file_name=$_FILES['images']['name'];
        $file_size=$_FILES['images']['size'];
        $file_tmp=$_FILES['images']['tmp_name'];
        $file_type=$_FILES['images']['type'];
      if(move_uploaded_file( $file_tmp,"upload-file/".$file_name));
      else{
          echo"file couldn't uploaded";
      }
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background-image: url("up-f.jpg");
                background-size: cover;
                color: red;
            }
        </style>
    </head>

    <body>
        <center>
            <h1>Upload your file</h1>
        </center>
        <form action="" method="post" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <th><input type="file" name="images"></th>
                </tr><br><br>
                <tr>

                    <th><input type="submit" value="Upload File"></th>
                </tr>
            </table>
        </form>

    </body>



    </html>