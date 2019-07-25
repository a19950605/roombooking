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
            <a href="librarianAdd.php">librarian add</a>
        <?php include_once 'db.php' ?>
            <form action="studenthandler.php" method=POST>
           studentno <input type="text" name="studentno"><br>
            name<input type="text"   name="name"><br>
            password<input type="password"   name="password"><br>
            email<input type="email"   name="email"><br>
            tel<input type="tel"   name="mobile"><br> 
            login <select name="login">
            <option value="avail">avail  </option>
            <option value="notavail">notavail  </option>    
        </select><br>
          
            <input type="submit" name="submit">
            
            </form>
            
            
            
            
            
            
        </div>