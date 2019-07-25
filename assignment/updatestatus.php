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
          $query= "select * from room where roomno=$roomno";       
 
         $result= mysqli_query($conn, $query);
       
           while($row = mysqli_fetch_array($result)){
                   $status=$row["status"];
                 
                
           }    
               
           
       mysqli_close($conn);

      
     
?>
<body>
    
    <form method="POST" action="handleUpdateStatus.php">
        <input type="hidden" name="roomno" value="<?= $roomno ?>" />

      
        Status<select name="status" value="<?=$status?>" >
            <option value="avail" <?php if ($status=="avail")  echo 'selected = "selected"'; ?>>avail </option>
            <option value="notavail" <?php if ($status=="notavail")  echo 'selected = "selected"'; ?>>not avail  </option>
             <option value="reserved" <?php if ($status=="reserved")  echo 'selected = "selected"'; ?>>reserved</option>
            <option value="outofservice" <?php if ($status=="outofservice")  echo 'selected = "selected"'; ?>>out of service  </option>
        </select><br>
         <input type="submit" value="Send" name="submit">


        </form>
   </body>


</html>
