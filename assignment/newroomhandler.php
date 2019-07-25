<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include_once 'db.php' ?>
    
        <?php
          $no=$_POST["roomno"];
           $name=$_POST["roomname"];
           $status=$_POST["status"];
           $size=$_POST["roomsize"];
       

        //insert record to a table 
        $query = "insert into room (roomno, roomname,status,roomsize) values('$no','$name','$status','$size')";
        $result = mysqli_query($conn, $query);
         $query2 = "insert into bookingtime (btime,studentno,roomno) values('0000-00-00 00:00:00','150601139','$no')";
        $result2 = mysqli_query($conn, $query2);
        
        if (!$result) {
            die("Unable to insert : " . mysqli_error($conn));
        } else {

            echo "$no is inserted to the room table";
            echo "<a href=\"newroom.php\">back to new room</a>";
            }
        mysqli_close($conn);
        ?>
    </body>
</html>