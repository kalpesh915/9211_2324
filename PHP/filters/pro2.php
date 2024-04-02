<?php
    /*
        PHP Filters
        Validating data = Determine if the data is in proper form.
        Sanitizing data = Remove any illegal character from the data.
    */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>Filter ID</th>
                <th>Filter Name</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach(filter_list() as $key => $value){
                    echo "<tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>