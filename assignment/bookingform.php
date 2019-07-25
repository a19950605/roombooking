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
        $query = "insert into bookingtime (bookingTime, studentno, roomno)"
                . " values ('2017-6-23 16:30:00', '150601139','A30')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Unable to insert : " . mysqli_error($conn));
        } else {

            echo "$id is inserted to the BOOKING table";
        }
        mysqli_close($conn);
        
        ?>
    </body>
</html>
