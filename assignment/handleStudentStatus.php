<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

       
    </head>
   
        <?php include_once 'db.php' ?>
     <?php
       if(isset($_POST["submit"])){

        $student=$_POST["studentno"];
        $status  =$_POST["status"];
       
       $query="update student set login='$status' where studentno=$student";
   

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
    <a href="studentStatus.php.php"> student status </a>
   
    </body>



</html>
