<!-- 
    Limit Data Selections From a MySQL Database
    MySQL provides a LIMIT clause that is used to specify the number of records to return.
    The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
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

                try {
                    $connection = new mysqli($hostname, $username, $password, $database);

                    if ($connection->connect_error) {
                        throw new Exception("Error while connecting Database Server " . $connection->connect_error);
                    } else {
                        //$sqlquery = "select * from students";
                        //$sqlquery = "select * from students limit 10";
                        //$sqlquery = "select * from students limit 25";
                        $sqlquery = "select * from students limit 10 offset 10";
                        
                        // get result 
                        $result = $connection->query($sqlquery);

                        // count how many data in result
                        if ($result->num_rows > 0) {
                            // printing Data
                            while ($row = $result->fetch_assoc()) {
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
                        } else {
                            echo "<hr>No Data Found in Table<hr>";
                        }
                    }
                } catch (Exception $err) {
                    echo "<hr> Error is $err";
                } finally {
                    $connection->close();
                }
                ?>
            </tbody>
        </table>
        <hr>
       
    </div>
</body>

</html>