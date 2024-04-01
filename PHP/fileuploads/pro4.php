<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        Upload Only image files
    -->

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" id="file1" required accept=".jpg, .jpeg, .png, .gif, .svg, .bmp">
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
        <?php
            if(isset($_SESSION["msg"])){
                echo "<hr>".$_SESSION["msg"]."<hr>";
                unset($_SESSION["msg"]);
            }
        ?>
    </form>
</body>
</html>
<?php
    if(isset($_POST["uploadProcess"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $file1 = $_FILES["file1"];
        //print_r($file1);
        $type = $file1["type"];

        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif", "image/bmp"];

        // check for valid type
        if(in_array($type, $validTypes)){
            $source = $file1["tmp_name"];
            $name = $file1["name"];
            $destination = "uploads/$name";
            move_uploaded_file($source, $destination);
            $_SESSION["msg"] = "$name file Uplaoded on Server";
        }else{
            $_SESSION["msg"] = "Please Select Image files only.";
        }
       header("location:pro4.php");
    }
?>