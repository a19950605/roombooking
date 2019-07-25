<?php include_once 'db.php' ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <?php
        session_start();
        $query = "select * from room";
        $result = mysqli_query($conn, $query);
        $numOfRecord = mysqli_num_rows($result);
        $today = date("Y-m-d");
        $today2 = date("Y-(m+2)-d");
        $time = strtotime($today);
        $final = date("Y-m-d", strtotime("+2 month", $time));

        echo"<form action=\"searchandler.php\" method=POST>";

        echo" Room No.<select name=\"room\">";
        echo"    <option value=\"\">Select Room No.</option>";
        while ($row = mysqli_fetch_array($result)) {

            $room = $row['roomno'];
            echo"    <option value=" . $room . ">" . $row['roomno'] . "</option>";
        }
        echo "  </select><br>";
        echo"    Room Size<select name=\"size\">";
        echo"    <option value=\"\">Select Room Size</option>";
        echo"    <option value=\"large\">\"Large\"</option>";
        echo"    <option value=\"small\">\"Small\"</option>";
        echo"    <option value=\"all\">\"All\"</option>";

        echo "  </select><br>";
        echo"    Time<select name=\"time\">";
        for ($i = 9; $i < 24; $i++) {
            $b=$i+1;
            echo"    <option value=\"$i\" >$i:30 - $b:30</option>";
        }
        echo "</select><br>";
        echo"Date: <input type=\"date\" min=\"$today\" max=\"$final\" name=\"dat\"><br>";
        echo" <input type=\"submit\" value=\"Send\" name=\"submit\">";
        echo "</form>";
        ?>
        
