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
            $date = date("Y-m-d");
            echo $date;
            $hr = date("H");
            $m = date("i");
            $hr2 = date("H") + 1;
            echo"  '$hr'    '$hr2'  ";
            $startDate = date('Y-m-d h:i:s', strtotime("$date $hr:30:01"));
            $endDate = date('Y-m-d h:i:s', strtotime("$date $hr2:29:59"));
            // define query for selecting all records  in customer tables
            //
            $query = "SELECT roomno,btime from bookingtime where btime between '$date $hr:00:00' and '$date $hr:00:01'";


            // based on the comment,  write code to
            $result = mysqli_query($conn, $query);
            $numOfRecord = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)) {
                echo $row["btime"];
                echo $row["roomno"];

                $query2 = "update room set status='unavail' where roomno='" . $row["roomno"] . "'";
                $result2 = mysqli_query($conn, $query2);


                //   $query4="update room set room.status=\"avail\" where roomno='".$row["roomno"]."'";
                //       $result4 = mysqli_query($conn, $query4);
                //  }
                //$queryy=select roomno from bookingtime where roomno not in ( select roomno from bookingtime as bk where btime between '2016-06-26 17:29:58' and '2016-06-26 18:30:01' );
                //                     $resultt = mysqli_query($conn, $queryy);
                /* while ($row5 = mysqli_fetch_array($resultt)) {

                  echo $row["roomno"];

                  $query2="update room set status='avail' where roomno='".$row["roomno"]."'";
                  $result2 = mysqli_query($conn, $query2);} */
            }
            //  and store the result set in $result
            // 2. use mysqli_num_rows  to obtain and assign to the variable $numOfRecord
            ?>
            <?php
            $queryy = "select roomno from bookingtime where roomno not in ( select roomno from bookingtime as bk where btime between '$date $hr:00:00' and '$date $hr:00:01' ) GROUP by roomno";
            $resultt = mysqli_query($conn, $queryy);
            while ($row5 = mysqli_fetch_array($resultt)) {

                echo $row5["roomno"];

                $query2 = "update room set status='avail' where roomno='" . $row5["roomno"] . "'";
                $result2 = mysqli_query($conn, $query2);
            }
            ?>

            <?php
            $query3 = "SELECT roomno,roomsize,status from room";


            // based on the comment,  write code to
            $result3 = mysqli_query($conn, $query3);
            $numOfRecord1 = mysqli_num_rows($result3);
            if ($numOfRecord1 <= 0) {

                echo "<tr><td>NO customers found</td> </tr>";
            } else {

                echo "  <table class=\"table table-condensed\">";
                echo " <thead>";
                echo "<tr><th>roomno</th><th>size</th><th>status</th><th>timeslot</th></tr>";
                // output data of each row 
                echo"</thead><tbody>";

                while ($row = mysqli_fetch_array($result3)) {

                    if ($row["status"] == "unavail") {
                        echo "<tr id=un>";
                        echo "<td >" . $row["roomno"] . "</td> ";
                        echo "<td>" . $row["roomsize"] . "</td> ";
                        echo "<td>" . $row["status"] . "</td> ";
                        echo"<td><a href=\"test.php?roomno='" . $row["roomno"] . "'\">timeslot</a></td>";

                        echo"</tr>";
                    } else {
                        echo "<tr>";
                        echo "<td>" . $row["roomno"] . "</td> ";
                        echo "<td>" . $row["roomsize"] . "</td> ";
                        echo "<td>" . $row["status"] . "</td> ";
                        echo"<td><a href=\"largetime.php?roomno='" . $row["roomno"] . "'\">timeslot</a></td>";
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
