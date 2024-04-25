<?php
    require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <?php require_once("menu.php");?>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Logs Page</h1>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Event Time</th>
                        <th>Event</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        require_once("classes/Students.class.php");

                        $result = $students->getLogs($username);

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                <td>$row[eventtime]</td>
                                <td>$row[eventmessage]</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
    
?>