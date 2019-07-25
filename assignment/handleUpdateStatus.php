<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

       
    </head>
   
        <?php include_once 'db.php' ?>
     <?php
       if(isset($_POST["submit"])){

        $roomno=$_POST["roomno"];
        $status  =$_POST["status"];
       
       $query="update room set status='$status' where roomno=$roomno";
   

      $result = mysqli_query($conn, $query);
       }
?>
<body>
        <?php
        if ($result == TRUE) {
            print("The status was  updated successfully !<br>\n");
        } else {
            print("The query could not be executed!<br>\n" . mysqli_error($conn));
        }
            mysqli_close($conn);
        ?>
    <a href="roomstatus.php"> room status </a>
   
    </body>



</html>
