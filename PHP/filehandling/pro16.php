<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        program for copy paste of file
    -->

     <?php 
        $myRead = fopen("data3.txt", "r") or die("unable to open file");
        $myWrite = fopen("data5.txt", "w") or die("unable to open file");

        while(!feof($myRead)){
            $data = fgets($myRead);
            $data = strtoupper($data);
            fwrite($myWrite, $data);
        }
        echo "Coppie Completed";
        fclose($myRead);
        fclose($myWrite);
        
     ?>

</body>
</html>