<?php  include_once 'db.php'; ?>
<?php

session_start(); 
if(isset($_POST['submit']))
   
   $sid=$_POST["sid"]; 
   $password=$_POST["password"];
   $req="select * from student where studentno='$sid' and password='$password' and login='avail'";
   
   $result=mysqli_query($conn,$req);
     while ($row = mysqli_fetch_array($result)) {
     $_SESSION['name']= $row["name"];
         
     }
   if(mysqli_num_rows($result)==1){
      $_SESSION['sid']=$sid;   
    
       header('Location: index.php');
       
   }else {
       echo "input wrong or you are not allow login ";
 
       echo '<a href="login_page.php">back to login</a>';
       
       
   }
   if(isset($_GET["logout"])){
       session_destroy();
         header('Location: login.php');
   
   }
?>