<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LARGE Roombooking</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <style>
            @import url(https://fonts.googleapis.com/css?family=Lobster+Two);
            @import url(https://fonts.googleapis.com/css?family=Montserrat);
            .button {
                font-family: 'Lobster Two';
                border-radius: 14px;
                background-color: grey;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 4px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button span {
                position: relative;
                transition: 0.3s;
            }

            .button span:after {
                content: '»';
                position: absolute;
                opacity: 0;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
            #font{
                font-family: 'Lobster Two';
            }
            #desc{
                font-family: 'Montserrat';
            }
        </style>
    <body background="img/bg.jpg">
        <div class="container text-center">
            <h1><div id="font">Large Room Timetable</div></h1>
            <div id="desc">Check the timetable and book study room NOW!</div>
            <div class="field"><div id="desc">
               Booking Date : 
                <input type="date" id="id_application_deadline" name="application_deadline">
                </div></div>
            <a href="smalltime.php"><button class="button"><span>Small Room</span></button></a>
            <br> 

            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>Time/StudyRoom</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="success text-center" >
                        <th>08:30 - 09:30</th>
                        <td><mark class="text-danger bg-danger">Booked</mark></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="danger text-center">
                        <th>09:30 - 10:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="info text-center">
                        <th>10:30 - 11:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="warning text-center">
                        <th>11:30 - 12:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="success text-center">
                        <th>12:30 - 13:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="danger text-center">
                        <th>13:30 - 14:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="info text-center">
                        <th>14:30 - 15:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="warning text-center">
                        <th>15:30 - 16:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="success text-center" >
                        <th>16:30 - 17:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="danger text-center" >
                        <th>17:30 - 18:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="info text-center" >
                        <th>18:30 - 19:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="warning text-center" >
                        <th>19:30 - 20:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                    <tr class="success text-center" >
                        <th>20:30 - 21:30</th>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                        <td><img src="img/add.png"></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
</html>