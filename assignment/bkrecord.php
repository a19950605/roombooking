<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">

        <?php include_once 'db.php' ?>

       
           
            <?php
            session_start();
            // define a variable with name $tablename
           $dd=$_SESSION['sid'];
            // define query for selecting all records  in customer tables
            $query = "SELECT * from bookingtime where studentno='$dd'";

            // based on the comment,  write code to
            $result = mysqli_query($conn, $query);
            $numOfRecord = mysqli_num_rows($result);
            
        $queryt="select count(*) as count from bookingtime where studentno='".$_SESSION['sid']."'";
       $resultt = mysqli_query($conn, $queryt);
       $numOfRecord = mysqli_num_rows($resultt);
       while ($row = mysqli_fetch_array($resultt)) {
                     $count=$row["count"];
                  echo"you have booked $count rooms";
       }
                   
               
            // 1. execute query with mysqli_query 
            //  and store the result set in $result
            // 2. use mysqli_num_rows  to obtain and assign to the variable $numOfRecord
             mysqli_close($conn);
            ?>
            <?php
             
            echo  "<table class=\"table\">";
     
            if ($numOfRecord <= 0) {

                echo "<tr><td>NO customers found</td> </tr>";
            } else {
                echo '<thead>';
                // output data of each row 
                echo '<tr><th>room number</th><th>time</th><th>CANCEL RECORD</th>'
                ."<th>transfer</th>". '</tr>';
                
                echo '</thead><tbody>';
                while ($row = mysqli_fetch_array($result)) {
                     $dat=$row["btime"];
                    
                 echo "<tr><td>".$row["roomno"]."</td>"."<td>".$dat."</td>"."<br>";
                echo"<td><a href=\"delete.php?roomno=" .$row["roomno"]."&"."date=".$dat."\">CANCEL</a></td>";
                echo"<td><a href=\"transferRecord.php?roomno=" .$row["roomno"]."&"."date=".$dat."\">transfer</a></td>";
                 echo "</tr>";
                    
//DELETE FROM bookingtime where roomno='r33' and studentno='150601139' and btime='	
//2016-06-26 14:00:00';
               }
               echo"</tbody>";
                  echo " </table>";
            }
            
            ?>
            </div>
        </body>
        </html>