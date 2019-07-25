<?php  include_once 'db.php'; ?>
<?php

session_start(); 
if(isset($_POST['submit']))
   
   $sid=$_POST["sid"]; 
   $password=$_POST["password"];
   $req="select * from librarian where libid='$sid' and pw='$password'";
   
   $result=mysqli_query($conn,$req);
     while ($row = mysqli_fetch_array($result)) {
     $_SESSION['name']= $row["name"];
         
     }
   if(mysqli_num_rows($result)==1){
      $_SESSION['sid']=$sid;   
    
       header('Location: index2.php');
       
   }else {
       echo "wrong input ";
       
       
   }
   if(isset($_GET["logout"])){
       session_destroy();
         header('Location: login.php');
   
   }
?>