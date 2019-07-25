<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include_once 'db.php' ?>
    
        <?php
        $id = "S1007";
        $name = "Ho Sam";

        //insert record to a table 
        $query = "insert into staff (staffNo, staffName)"
                . " values ('" . $id . "', '" . $name . "')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Unable to insert : " . mysqli_error($conn));
        } else {

            echo "$id is inserted to the staff table";
        }
        mysqli_close($conn);
        ?>
    </body>
</html>
