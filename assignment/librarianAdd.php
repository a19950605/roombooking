<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

      
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
    </head>
    <body>
        <div class="container">
            <a href="studentadd.php">student add</a>
        <?php include_once 'db.php' ?>
            <form action="librarianHandler.php" method=POST>
           libid <input type="text" name="libid"><br>
            name<input type="text"   name="name"><br>
            password<input type="password"   name="pw"><br>
            
          
            <input type="submit" name="submit">
            
            </form>
            
            
            
            
            
            
        </div>