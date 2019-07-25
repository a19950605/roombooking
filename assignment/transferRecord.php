<?php 

session_start();
?>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

       
    </head>
   
        <?php include_once 'db.php' ?>
     <?php
     
      $roomno=$_GET["roomno"];
      $date =$_GET["date"];
          $query= "select * from bookingtime where roomno=$roomno and btime='$date'";       
 
         $result= mysqli_query($conn, $query);
       
      
               
           
       mysqli_close($conn);

      
     
?>
<body>
    
    <form method="POST" action="handleTransferRecord.php">
        <input type="hidden" name="roomno" value="<?= $roomno ?>" />
        <input type="hidden" name="date" value="<?= $date ?>" />
        <input type="text" name="studentno" >
      
         <input type="submit" value="Send" name="submit">


        </form>
   </body>


</html>
