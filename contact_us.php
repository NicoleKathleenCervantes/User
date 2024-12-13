<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        .contact-header {
            padding: 20px;
            margin: 20px 0;
            font-weight: bolder;
        }
        .contact-card {
            margin: 10px 0;
        }

        .change-yo-ass-to-gold{
            background-color:rgb(254, 232, 146); 
            padding: 20px;
            margin: 20px;
            margin-right: 60%;
            border-radius: 15px;
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
            <li><a class="active" href="contact_us.php"><h4>Contact Us</h4></a></li>
        </ul>
        <div class="nav-right">
        <a href="#profile"><button class="btn btn-link btn-lg" style="color: #3C70BD; padding: 20px; padding-right: 40px;"><span class="glyphicon glyphicon-off"></span></button></a>
        </div>
    </nav>
    
    <div class="image-container" style="padding-top: 10px;">
        <!-------------- INPUT PHOTO FROM THE DATABASE HERE ------------------->
        <img src="img/To The Thought Of You.png">
        <div class="container">
            <h3 style="line-height: 2;">Contact Us</h3>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <h1 class="contact-header">Interested In Joining a team? Contact us!</h1>
        <div class="change-yo-ass-to-gold">
            <div class="card contact-card">
                <div class="card-body" style="margin-bottom: 10px;">
                    <h4 class="card-title" style="font-size: 33px; font-weight: 600;">Head Teams Manager</h4>
                    <h4 class="card-title" style="font-size: 29px; font-weight: 500">Fredrickson Acorda</h4>
                    <p class="card-text" style="font-size: 24px;">Email: john.doe@example.com</p>
                    <p class="card-text" style="font-size: 24px;">Phone: (123) 456-7890</p>
                </div>
            </div>
        </div>

        <h1 class="contact-header">Other Contact Information</h1>
        <div class="change-yo-ass-to-gold">
            <div class="card contact-card">
                <div class="card-body" style="margin-bottom: 10px;">
                    <h4 class="card-title" style="font-size: 33px; font-weight: 600;">Lead Game Manager</h4>
                    <h4 class="card-title" style="font-size: 29px; font-weight: 500">Miguel Mistica</h4>
                    <p class="card-text" style="font-size: 24px;">Email: john.doe@example.com</p>
                    <p class="card-text" style="font-size: 24px;">Phone: (123) 456-7890</p>
                </div>
            </div>
        </div>
        <div class="change-yo-ass-to-gold">
            <div class="card contact-card">
                <div class="card-body" style="margin-bottom: 10px;">
                    <h4 class="card-title" style="font-size: 33px; font-weight: 600;">Head Schedule Manager</h4>
                    <h4 class="card-title" style="font-size: 29px; font-weight: 500">Charmille Yabes</h4>
                    <p class="card-text" style="font-size: 24px;">Email: john.doe@example.com</p>
                    <p class="card-text" style="font-size: 24px;">Phone: (123) 456-7890</p>
                </div>
            </div>
        </div>
        <div class="change-yo-ass-to-gold">
            <div class="card contact-card">
                <div class="card-body" style="margin-bottom: 10px;">
                    <h4 class="card-title" style="font-size: 33px; font-weight: 600;">Contact Person</h4>
                    <h4 class="card-title" style="font-size: 29px; font-weight: 500">Nicole Kathleen Cervantes</h4>
                    <p class="card-text" style="font-size: 24px;">Email: john.doe@example.com</p>
                    <p class="card-text" style="font-size: 24px;">Phone: (123) 456-7890</p>
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