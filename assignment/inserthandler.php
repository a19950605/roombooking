
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            table, th, td {
                border: 1px solid black;
            }
            .even{background: #00d0ff;}
        </style>
    </head>
   
        <?php include_once 'db.php' ?>
     <?php
   
       session_start();
       $queryt="select studentno,count(*) as count from bookingtime where studentno='".$_SESSION['sid']."'";
       $result = mysqli_query($conn, $queryt);
       $numOfRecord = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
                     $count=$row["count"];
       if ( $count>=5) {
            echo "YOU CANT BOOK MORE THAN FIVE ROOMS".                     $count;
            
        
       }else{
           echo "$numOfRecord";
        $room  =$_GET["roomno"];
              $date  =$_GET["date"];

        $time=$_GET["time"];
        
          
        //conditional operateor

  $query = "insert into bookingtime (btime, studentno, roomno) "
          . " values ('".$date." ".$time.":30:00"."',". "'".$_SESSION['sid']."','".$room."')";
        $result = mysqli_query($conn, $query);
        if ($result == TRUE) {
            print("The booking was  added  successfully !<br>\n");
        } else {
            print("The query could not be executed!<br>\n" . mysqli_error($conn));
        }
       }
         
        
     
?>
 <body>
        <?php
        
       mysqli_close($conn);
        ?>
     <a href="searching.php"> back to search </a>
    
    </body>

</html>
