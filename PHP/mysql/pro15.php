<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Table</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Roll</th>
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
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "mydb9211";

                try{
                    $connection = new mysqli($hostname, $username, $password, $database);

                    if($connection->connect_error){
                        throw new Exception("Error while connecting Database Server ".$connection->connect_error);
                    }else{
                        $sqlquery = "select * from students";

                        // get result 
                        $result = $connection->query($sqlquery);

                        // count how many data in result
                        if($result->num_rows > 0){
                            // printing Data
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
                        }else{
                            echo "<hr>No Data Found in Table<hr>";
                        }
                    }
                }catch(Exception $err){
                    echo "<hr> Error is $err";
                }finally{

                }
            ?>
        </tbody>
    </table>
</body>
</html>