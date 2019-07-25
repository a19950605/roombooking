<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
            #un{ background-color: pink}
            
            </style>
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
            date_default_timezone_set("Asia/Hong_Kong");
           $date=date("Y-m-d");
           echo $date;
           $hr=date("H");
           $m=  date("i");
           $hr2=date("H")+1;
           echo"  '$hr'    '$hr2'  ";
           $startDate = date('Y-m-d h:i:s',strtotime("$date $hr:30:01"));
           $endDate =date('Y-m-d h:i:s',strtotime("$date $hr2:29:59"));
            // define query for selecting all records  in customer tables
           //
         ?>
            <?php
             $query3 = "SELECT roomno,roomsize,status from room";
          

            // based on the comment,  write code to
            $result3 = mysqli_query($conn, $query3);
            $numOfRecord1 = mysqli_num_rows($result3);
                 if ($numOfRecord1 <= 0) {

                echo "<tr><td>NO customers found</td> </tr>";
            }
            
           
             else {
                 
           echo  "  <table class=\"table table-condensed\">";
           echo " <thead>";
            echo  "<tr><th>roomno</th><th>size</th><th>status</th><th>timeslot</th></tr>";
                // output data of each row 
            echo"</thead><tbody>";
               
                while ($row = mysqli_fetch_array($result3)) {
                     
                    if($row["status"]=="notavail"){
                       echo "<tr id=un>";
                 echo "<td >".$row["roomno"]."</td> ";
                    echo "<td>".$row["roomsize"]."</td> ";
                    echo "<td>".$row["status"]."</td> ";
                      echo"<td><a href=\"updatestatus.php?roomno='".$row["roomno"]."'\">update</a></td>";
                          
             echo"</tr>";
               }  else {
                   echo "<tr>";
                 echo "<td>".$row["roomno"]."</td> ";
                    echo "<td>".$row["roomsize"]."</td> ";
                      echo "<td>".$row["status"]."</td> ";
                     echo"<td><a href=\"updatestatus.php?roomno='".$row["roomno"]."'\">update</a></td>";
                         echo "</tr>";
                           
                } 
                }
                   
          //     } 
              echo " </table>";
                                      echo " 123";
                                    
 
            
          
             }
            ?>
 </tr>
    </tbody>
  </table>
</div>
    </body>
</html>
        