<?php
    session_start();
    date_default_timezone_set("Asia/Kolkata");
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
        file existance check
        rename file when upload on server
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
        $type = $file1["type"];
        $size = $file1["size"];
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif", "image/bmp"];

        $mb = 2;
        $validSize = ($mb * 1024 * 1024); // MB to Bytes

        // check for valid type
        if(in_array($type, $validTypes)){
            // check for file size
            if($size < $validSize){
                // check for file existance
                $source = $file1["tmp_name"];
                $name = $file1["name"];
                $date = date("dmYhisa");
                $random = rand(9999, 99999);
                $destination = "uploads/$random-$date-$name";

                if(!file_exists($destination)){
                    move_uploaded_file($source, $destination);
                    $_SESSION["msg"] = "$name file Uplaoded on Server";
                }
                else{
                    $_SESSION["msg"] = "File Already Exist";    
                }
            }else{
                $_SESSION["msg"] = "Please Select file less than $mb MB";
            }
        }else{
            $_SESSION["msg"] = "Please Select Image files only.";
        }
       header("location:pro8.php");
    }
?>