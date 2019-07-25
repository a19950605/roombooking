<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include_once 'db.php' ?>
    
        <?php
          $no=$_POST["studentno"];
           $name=$_POST["name"];
           $password=$_POST["password"];
           $email=$_POST["email"];
             $mobile =$_POST["mobile"];
              $login= $_POST["login"];
     
 
        //insert record to a table 
        $query = "insert into student (studentno, name,password,email,mobile,login) values('$no','$name','$password','$email','$mobile','$login')";
        $result = mysqli_query($conn, $query);
        
        
        if (!$result) {
            die("Unable to insert : " . mysqli_error($conn));
        } else {

            echo "$name is inserted to the room table";
            echo "<a href=\"studentadd.php\">back to add page</a>";
            }
        mysqli_close($conn);
        ?>
    </body>
</html>