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
     
      $student=$_GET["studentno"];
          $query= "select * from student where studentno=$student";       
 
         $result= mysqli_query($conn, $query);
       
           while($row = mysqli_fetch_array($result)){
                  $name=$row["name"];
                   $no=$row["studentno"];
                   $login=$row["login"];
                 
                
           }    
               
           
       mysqli_close($conn);

      
     
?>
<body>
    
    <form method="POST" action="handleStudentStatus.php">
        <input type="hidden" name="studentno" value="<?= $no ?>" />

      
        Status<select name="status" value="<?=$login?>" >
            <option value="avail" <?php if ($login=="avail")  echo 'selected = "selected"'; ?>>avail </option>
            <option value="inval" <?php if ($login=="inval")  echo 'selected = "selected"'; ?>>inavail  </option>
            
        </select><br>
         <input type="submit" value="Send" name="submit">


        </form>
   </body>


</html>
