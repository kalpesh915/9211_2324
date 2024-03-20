<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*
            PHP array_column() Function
            Get column of last names from a recordset:
        */ 
        
        $a = array(
            array(
              'id' => 5698,
              'first_name' => 'Peter',
              'last_name' => 'Griffin',
            ),
            array(
              'id' => 4767,
              'first_name' => 'Ben',
              'last_name' => 'Smith',
            ),
            array(
              'id' => 3809,
              'first_name' => 'Joe',
              'last_name' => 'Doe',
            )
          );

          print_r(array_column($a, "last_name"));
    ?>
</body>
</html>