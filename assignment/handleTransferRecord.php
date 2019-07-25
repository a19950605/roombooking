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
           $date=$_POST["date"];
           $studentno=$_POST["studentno"];
          $queryt="select studentno,count(*) as count from bookingtime where studentno='".$studentno."'";
       $result = mysqli_query($conn, $queryt);
       $numOfRecord = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
                     $count=$row["count"];
       if ( $count>=5) {
           $message="you cant transfer to a user booking more than five";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
        
       }else{
       

        //insert record to a table 
        $query = "update bookingtime set studentno='$studentno' where btime='$date' and roomno='$no'";
        $result = mysqli_query($conn, $query);
   
        
        if (!$result) {
            die("Unable to change : " . mysqli_error($conn));
        } else {

            echo "$studentno record zz";
            echo "<a href=\"newroom.php\">back to new room</a>";
            }
       }
        mysqli_close($conn);
        ?>
    </body>
</html>