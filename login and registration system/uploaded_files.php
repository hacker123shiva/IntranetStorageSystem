<html><head>
    <style>
        body{
            background-image:url("upp.jfif");
        }
    </style>
</head>
    <body style="color:red">
<?php
$directory = "upload-file/";

// Open a directory, and read its contents
echo"<h1> Uploaded files</h1>";
if (is_dir($directory)){
  if ($opendirectory = opendir($directory)){
    while (($file = readdir($opendirectory)) !== false){
      echo "<h3 style='color:red;'>filename: "  . $file .  "<br>";
    }
    closedir($opendirectory);
  }
}
?></body>
</html>