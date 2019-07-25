
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
    </head>
   
        <?php include_once 'db.php' ?>
     <?php
     
       session_start();
          $query= "select * from student where studentno='".$_SESSION['sid']."'";       
 
         $result= mysqli_query($conn, $query);
           while ($row = mysqli_fetch_array($result))   {
                   $name=$row["name"];
                   $email=$row["email"];
                    $mobile=$row["mobile"];
                   $pw =$row["password"];
                
                
           }
               
           
       mysqli_close($conn);

      
     
?>
<body>
    <div class="container">

    <form method="POST" action="handleEdit.php" class="form-horizontal" role="form">
            

        <input type="hidden" name="studentno" value="<?= $_SESSION['sid'] ?>" />

            Name  : <input type="text" name="name" value="<?=$name?>"><br>
            <div class="form-group">
                <div class="col-sm-10">
             <label for="email">Email:</label>
        E-mail:<input type="email" name="email" value="<?=$email?>"><br>
         </div  >
           </div  >
                <div class="form-group">
                       <div class="col-sm-10">
         MOBILE:<input type="text" name="mobile" value="<?=$mobile?>"><br>
         </div>
                    </div>
             <div class="form-group">
   <div class="col-sm-10">
         password:<input type="text" name="password" value="<?=$pw?>"><br>
       </div>
                 </div>
         <div class="form-group">
                <div class="col-sm-10">
         <input type="submit" value="Send" name="submit">
</div>
</div>
          </form>
</div>
   </body>


</html>
