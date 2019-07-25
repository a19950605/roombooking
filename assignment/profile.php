<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

      
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
            $tableName = "customer";
            // define query for selecting all records  in customer tables
            $query = "SELECT * from student where studentno='".$_SESSION['sid']."'";

            // based on the comment,  write code to
            $result = mysqli_query($conn, $query);
            $numOfRecord = mysqli_num_rows($result);

            // 1. execute query with mysqli_query 
            //  and store the result set in $result
            // 2. use mysqli_num_rows  to obtain and assign to the variable $numOfRecord
            ?>
            <?php
             
            echo  "<table class=\"table table-striped\">";
            echo"<thead>";
            echo "<tr>";
            echo   " <th> name </th>";
             echo   "<th> studentno </th>";
             echo   "<th> email </th>";
             echo  "<th>  mobile </th>";
             echo   "<th> fee</th>";
              echo"</thead>";
            if ($numOfRecord <= 0) {

                echo "<tr><td>NO customers found</td> </tr>";
            } else {

                // output data of each row 
               
                while ($row = mysqli_fetch_array($result)) {
                    
                        echo "<tr><td> " . $row["name"] . "</td>" . "<td>" . $row["studentno"] . "</td>" .
                        "<td>" . $row["email"] . "</td>" . "<td>" . $row["mobile"] . "</td>" . "<td>" . $row["fee"] . "</td>"."</tr>";
                  
                        
                }
                echo"</tbody>";
                       echo " </table>";

            }
                       echo"<a href=\"edit.php\"><button type=\"button\" class=\"btn btn-default\">edit</a>";
            ?>

 

            
      
       </div>




    </body>
</html>
