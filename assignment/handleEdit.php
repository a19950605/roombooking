<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

       
    </head>
   
        <?php include_once 'db.php' ?>
     <?php
     session_start();
       if(isset($_POST["submit"])){

 
        $name  =$_POST["name"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $pw=$_POST["password"];
       $query="update student set name='$name' , mobile='$mobile', email='$email' , password='$pw' where studentno='".$_SESSION['sid']."'";
   

      $result = mysqli_query($conn, $query);
       }
?>
<body>
        <?php
        if ($result == TRUE) {
            print("The student was  updated successfully !<br>\n");
        } else {
            print("The query could not be executed!<br>\n" . mysqli_error($conn));
        }
            mysqli_close($conn);
        ?>
    <a href="profile.php"> back to profile </a>
   
    </body>



</html>
