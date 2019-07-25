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
        <?php include_once 'db.php' ?>
            <form action="newroomhandler.php" method=POST>
           roomno <input type="text" name="roomno"><br>
            roomname<input type="text"   name="roomname"><br>
            status <select name="status">
            <option value="avail">avail  </option>
            <option value="notavail">noavail  </option>
            <option value="3">3  </option>
        </select><br>
            roomsize<input type="text"    name="roomsize"><br>
            <input type="submit" name="submit">
            
            </form>
            
            
            
            
            
            
        </div>