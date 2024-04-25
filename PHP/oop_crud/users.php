<?php
    require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <?php require_once("menu.php");?>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Users Page</h1>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Roll no.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        require_once("classes/Students.class.php");

                        $result = $students->getOtherUsers($username);

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                <td>$row[roll]</td>
                                <td>$row[fname]</td>
                                <td>$row[lname]</td>
                                <td>$row[city]</td>
                                <td>$row[state]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[gender]</td>
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