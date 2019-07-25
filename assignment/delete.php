
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
        $rm=$_GET["roomno"];
        $date=$_GET["date"];
              date_default_timezone_set("Asia/Hong_Kong");
$date2=  strtotime(date('Y-m-d H:i:s'));
$date5=  strtotime($date);
$date3=$date5-$date2;
$date4=($date3/3600);
if($date4<24){
    $message = "you need to pay extra $";
echo "<script type='text/javascript'>alert('$message');</script>";
    $query2="update student set fee=fee+5 where studentno='".$_SESSION['sid']."'";
      $result= mysqli_query($conn, $query2);
}
          $query="DELETE FROM bookingtime where roomno='$rm' and studentno='".$_SESSION['sid']."' and btime='$date'";       

         $result= mysqli_query($conn, $query);
        

      
     
?>
<body>
     <?php
        if (!$result) {
            die("delete fail: " . mysqli_error($conn));
        } else {

            echo "The record  is successfully deleted  $date4";
        }
        mysqli_close($conn);
        ?> 
    <a href="bkrecord.php" target="a">back to record </a>
   </body>


</html>