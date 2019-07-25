<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include_once 'db.php' ?>
    
        <?php
          $no=$_POST["libid"];
           $name=$_POST["name"];
           $password=$_POST["pw"];
         
 
        //insert record to a table 
        $query = "insert into librarian (libid, name,pw) values('$no','$name','$password')";
        $result = mysqli_query($conn, $query);
        
        
        if (!$result) {
            die("Unable to insert : " . mysqli_error($conn));
        } else {

            echo "$name is inserted to the librarian table";
            echo "<a href=\"librarianAdd.php\">back to add page</a>";
            }
        mysqli_close($conn);
        ?>
    </body>
</html>