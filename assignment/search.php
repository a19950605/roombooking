<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
       
    </head>
    <body>
        <?php include_once 'db.php' ?>

       
           
            <?php
            // define a variable with name $tablename
           
            // define query for selecting all records  in customer tables
            $query = "SELECT roomno from bookingtime where btime!='2016-06-25 16:30:00'";

            // based on the comment,  write code to
            $result = mysqli_query($conn, $query);
            $numOfRecord = mysqli_num_rows($result);

            // 1. execute query with mysqli_query 
            //  and store the result set in $result
            // 2. use mysqli_num_rows  to obtain and assign to the variable $numOfRecord
            ?>
            <?php
             
            echo  "<table>";
     
            if ($numOfRecord <= 0) {

                echo "<tr><td>NO customers found</td> </tr>";
            } else {

                // output data of each row 
               
                while ($row = mysqli_fetch_array($result)) {
                 echo $row["roomno"]."<br>";
                    

               }
                  echo " </table>";
            }
            ?>

 

            
      
       




    </body>
</html>
