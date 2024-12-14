<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

        <style>
        body {
            min-height: 100vh;
            width: 100vw;
            background: white;
        }

        .nav {
            height: 75%;
            width: 100vw;
            position: relative;
            background-color: #FEE06B;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .glyphicon{
            font-size: 45px;
        }

        .nav h4{
            font-weight: bold;
            font-size: 25px;
        }

        .navbar-nav li a:hover{
            color: white;
            background-color: #3C70BD;
            border-radius: 5px;
        }

        .navbar-nav a.active{
            color: white;
            background-color: #3C70BD;
            border-radius: 5px;
        }

        .footer {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            height: 50px;
            background-color: #FEE06B;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .footer-content {
            grid-column: 1;
            grid-row: 1;
        }

        .image-container {
            width: 100vw; /* Set the width to the full viewport width */
            height: 550px; /* Set the height to the full viewport height */
        }

        .image-container img {
            width: 100%; /* Set the width to the full container width */
            height: 100%; /* Set the height to the full container height */
            object-fit: cover; /* Scale the image to cover the entire container */
            opacity: 0.9;
        }

        .container, .container h3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 60px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
        }

        .rows{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1px;
            border-radius: 10px;
            padding-bottom: 10px;
        }
        .rows div{
            font-size: 25px;
            font-weight: 600;
            margin: 1px;
            border-radius: 5px;
            container: fill;
            text-align: center;
            display: flex; 
            justify-content: center; 
            align-items: center;
        }

        </style>
    
</head>
<body>
    <nav class="nav navbar-fixed-top">
        <div class="nav-left">
            <a href="home.php"><img src="img/Qu4drilogy (1).png" style="width: 120px; height: 100px;"></a>
        </div>
        <ul class="nav navbar-nav nav-center">
            <li><a href="home.php"><h4>Home</h4></a></li>
            <li><a href="gameSchedule.php"><h4>Game Schedule</h4></a></li>
            <li><a href="teams.php"><h4>Teams</h4></a></li>
            <li><a class="active" href="leaderboard.php"><h4>Leaderboard</h4></a></li>
        </ul>
        <div class="nav-right">
        <a href="#profile"><button class="btn btn-link btn-lg" style="color: #3C70BD; padding: 20px; padding-right: 40px;"><span class="glyphicon glyphicon-off"></span></button></a>
        </div>
    </nav>
    
    <div class="image-container" style="padding-top: 10px;">
        <!-------------- INPUT PHOTO FROM THE DATABASE HERE ------------------->
        <img src="img/To The Thought Of You.png">
        <div class="container">
            <h3 style="line-height: 2;">Leaderboard</h3>
        </div>
    </div>
    <hr>
    
    <div class="container-fluid">
            <div style="border: 5px solid #E6E6E6;">
                <div class="col-md-offset-0">
                    <h1 style="font-weight:800; padding: 20px;">TEAM MVP OF THE WEEK</h1>
                </div>
                <div class="container-fluid">
                    <!-------------- CHANGE TEAM INFO HEREEEEEEEEEEEEEE--------------->
                    <div class="rows">
                        <div class="col-md-3" style="background-color: #3C70BD; color: white;">RANK</div>
                        <div class="col-md-3" style="background-color: #3C70BD; color: white;">TEAM NAME</div>
                        <div class="col-md-3" style="background-color: #3C70BD; color: white;">WINS</div>
                        <div class="col-md-3" style="background-color: #3C70BD; color: white;">LOSES</div>
                    </div>
                    <div class="rows">
                        <div class="col-md-3" style="height: 100px;">1</div>
                        <div class="col-md-3" style="height: 100px;">Crimson Chrysalis</div>
                        <div class="col-md-3" style="height: 100px;">7</div>
                        <div class="col-md-3" style="height: 100px;">0</div>
                    </div>
                </div>

            </div>
        </div>
</div>
        <hr>
    <div class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Unity Games District Of Central Edition</p>
        </div>
    </div>
</body>
</html>