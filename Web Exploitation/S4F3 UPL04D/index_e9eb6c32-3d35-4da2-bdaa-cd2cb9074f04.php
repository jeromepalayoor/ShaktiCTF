<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
   <h1>Upload your images here !! </h1> 
   <form action="index.php" method="post" enctype="multipart/form-data">
   <p>Click on the "Choose File" button to upload a file:</p>
  <input type="file" id="myFile" name="myFile">
  <br>
  <br>
  <button type="upload" name="submit">Upload</button>
</form>
</body>
</html>


<?php

  $file_name = $_FILES['myFile']['name'];// name of the file uploaded
  $file_type = $_FILES['myFile']['type'];//type of the file uploaded
  $file_size = $_FILES['myFile']['size'];//size of the file uploaded
  $file_tmp = $_FILES['myFile']['tmp_name'];//the temporary location into which the file is stored
  $parts=explode(".",$file_name);
  $ext=array_pop($parts);
  $disallowed_extensions= array( "php","php3","php4","php5","php7","pht","phtm","phtml","phar","phps");


 $destination_path = getcwd()."/uploads/";
 $target_path = $destination_path.basename($file_name);
  if(isset($_POST['submit'])){
    if(!empty($_FILES['myFile'])){
      if($file_size < 100000){
            foreach($disallowed_extensions as $i) {
                if ($i===$ext) {
                    die('Disallowed file extension');
                }
            }
            if(file_exists($target_path)){
              unlink($target_path);
            }
                    if(move_uploaded_file($file_tmp, $target_path)) {
                         echo "The file ".  basename( $file_name)." has been uploaded";
                         } 
                         else{
                            echo "There was an error uploading the file, please try again!";
                        }
                    
                }
                 
                 else{
                    echo "Please select a file less than 2MB";
                }
      }
      else{
        echo "NO files uploaded";
      }
    }
?>
