<?php
    if(isset($_FILES['image'])) {
        echo "<pre>";
        var_dump($_FILES['image']);
        echo "</pre>";
        $errors= array();
        $files_name = $_FILES['image']['name'];
        $files_type = $_FILES['image']['type'];
        $files_tmp_name = $_FILES['image']['tmp_name'];
        $files_size = $_FILES['image']['size'];
        // $file_ext = strtolower(explode(".", $_FILES['image']['name']));
        // $file_ext=strtolower(end(explode('.',$files_name)));
        $extensions= array("jpeg","jpg","png");
        if($files_size > 2097543){
            $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
            move_uploaded_file($files_tmp_name,"images/".$files_name);
            echo "Success";
        }else{
            print_r($errors);
        }

        echo "<pre>";
        var_dump($errors);
        echo "</pre>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>Sent File : <?php global $files_name; echo $files_name; ?></li>
        <li>File Size : <?php global $files_size; echo $files_size; ?></li>
        <li>File Type : <?php global $files_type; echo $files_type; ?></li>
        <img src="images/$files_name" alt="">
    </ul>
</body>
</html>