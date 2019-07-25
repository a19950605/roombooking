<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
       
    </head>
    <body>
        <?php include_once 'db.php' ?>

       
           
            <?php
                        session_start();
                       $room2= $_POST["room"];
                       $date = $_POST["dat"];
                       $size = $_POST["size"];
                        echo $date;
                       echo $room2;
                       echo $_SESSION['sid'];
                      echo $size;
                      $a=$_POST["time"];
                      if($a==9){
                          $a="09";
                      }
                      echo $a;
            // define a variable with name $tablename
           
            // define query for selecting all records  in customer tables
            
                $query = "SELECT room.roomno,roomsize from room,bookingtime where "
                    . "room.roomno=bookingtime.roomno and btime!='$date $a:30:00' group by room.roomno";
              
            

            // based on the comment,  write code to
            $result = mysqli_query($conn, $query);
            $numOfRecord = mysqli_num_rows($result);

            // 1. execute query with mysqli_query 
            //  and store the result set in $result
            // 2. use mysqli_num_rows  to obtain and assign to the variable $numOfRecord
            ?>
            <?php
             
            echo  "<table border=\"1\">";
            echo  "<tr><th>roomno</th><th>size</th><th>book</th></tr>";
            if ($numOfRecord <= 0) {

                echo "<tr><td>NO customers found</td> </tr>";
            } else {

                // output data of each row 
               
                while ($row = mysqli_fetch_array($result)) {
                     echo "<tr>";
                 echo "<td>".$row["roomno"]."</td> ";
                    echo "<td>".$row["roomsize"]."</td> ";
                    echo "<td><a href=\"inserthandler.php?roomno=" .$row["roomno"]."&"."date=".$date."&"."time=".$a."\">insert</a></td>";
                    
                          
             echo"</tr>";
               }
                  echo " </table>";
            
                                    echo " 123";
 
            }
            ?>

 

            
      
       




    </body>
</html>
