<?php
    session_start();
    // upload multiple files in single request
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" onsubmit="return countFiles()">
        <input type="file" name="file1[]" id="file1" accept=".jpg, .png, .gif" required multiple>
        <input type="submit" value="Upload Files" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
    <?php
        if(isset($_SESSION["msg"])){
            echo "<hr>".$_SESSION["msg"]."<hr>";
            unset($_SESSION["msg"]);
        }
    ?>
</body>
</html>
<script>
    function countFiles(){
        //alert("Called");
        const file1 = document.getElementById("file1");
        //alert(file1.files.length);
        if(file1.files.length > 5){
            alert("Please Select only 5 or less files");
            return false;
        }else{
            return true;
        }
    }
</script>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
        // count how many files are selected

        $count = count($file1["name"]);
        // echo $count;

        // create required variables for counters
        $validFiles = 0 ;
        $overSized = 0;
        $invalidType = 0;

        // variables for check Size
        $mb = 2;
        $validSize = ($mb * 1024 * 1024);

        // array for valid extention
        $validType = ["image/jpg", "image/jpeg", "image/png", "image/gif"];

        // run loop for all select files
        for($i=0; $i<$count; $i++){
            
            // get data from all selected files
            $type = $file1["type"][$i];
            if(in_array($type, $validType)){
                // check for valid size
                $size = $file1["size"][$i];
                if($size < $validSize){
                    $source = $file1["tmp_name"][$i];
                    $name = $file1["name"][$i];
                    $random = rand(9999, 99999);
                    $destination = "uploads/$random $name";

                    move_uploaded_file($source, $destination);
                    $validFiles++;
                }else{
                    $overSized++;
                }
            }else{
                $invalidType++;
            }
        }

        $_SESSION["msg"] = "<hr>Selected Files $count, Uploaded Files $validFiles, Oversized file $overSized and invalid file type $invalidType<hr>";
        header("location:pro12.php");
    }
?>