<?php
    require_once("Connection.class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="userid">Select User to Print Data</label>
    <select name="userid" id="userid" onchange="loadUser(this.value)">
        <option value="0">Please Select Any User</option>
        <?php
            $result = $dbconn->listUsers();
            while($row = $result->fetch_assoc()){
                echo "<option value=$row[userid]>$row[fname]</option>";
            }
        ?>
    </select>
    <hr>
    <p id="op"></p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis rerum, consectetur expedita, impedit, repellat voluptate sint et earum odit iure qui quibusdam mollitia similique nisi libero dolores perferendis voluptatibus architecto!</p>
</body>
</html>

<script>
    const op = document.getElementById("op");

    function loadUser(userid){
        //alert(userid);
        if(userid == 0){
            op.innerHTML = "Please Select any ID";
        }
        else{
            const XMLHttps = new XMLHttpRequest();
            XMLHttps.open("GET", "searchdata.php?userid="+userid, true);
            XMLHttps.send();

            XMLHttps.onreadystatechange = function(){
                if(XMLHttps.readyState == 4 && XMLHttps.status == 200){
                    op.innerHTML = XMLHttps.responseText;
                }
            }
        }
    }
</script>