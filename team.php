<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        @import url('https://fonts.cdnfonts.com/css/source-serif-pro');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Lato", sans-serif;
        }
        .container {
            max-width: 1400px;
            margin: 30px 80px;
            padding: 0 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .profile {
            position: relative;
            width: 435px;
            height: 435px;
            padding: 50px;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border-radius: 30px;
            border: 1px solid #b1b8cd;
            justify-content: center;
            align-items: center;
            transition: height 0.3s ease;
        }
        .profile img {
            width: 225px;
            height: 225px;
            object-fit: cover;
            border-radius: 50%;
        }
        .profile h2 {
            margin-top: 10px;
            font-size: 25px;
            font-family: 'Source Serif Pro', sans-serif;
            font-weight: 600;
            text-align: center;
        }
        .profile p {
            margin-top: 5px;
            font-size: 20px;
            text-align: center;
        }
        .profile .extra-info {
            display: none;
            margin-top: 5px;
            font-size: 18px;
            text-align: center;
        }
        .profile::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #48D597;
            border-radius: 30px;
            z-index: -1;
            transition: all 0.3s ease;
        }
        .profile:hover::before {
            top: 30px;
            left: 50px;
        }
        .profile:hover {
            height: 500px;
        }
        .profile:hover .extra-info {
            display: block;
        }
    </style>
</head>
<body>
    <?php include 'navigation.html'?>
    <div class="container">
        <div class="row" style="margin-top: 140px">
            <div class="profile">
                <img src="asset/img/bhavya.jpg" alt="Profile 1">
                <h2>Bhavya Dhariwal</h2>
                <p>Executive - Tech</p>
                <p class="extra-info">A passionate gamer, art lover, and classical dancer who embraces technology and cherishes tradition. Organized yet clumsy, she brings creativity to everything she does</p> <!-- Extra info to display on hover -->
            </div>
            <div class="profile">
                <img src="asset/img/datta.jpg" alt="Profile 2">
                <h2>Saptangshu</h2>
                <p>Advisor (Alumni)</p>
                <p class="extra-info">Additional information on hover.</p> 
            </div>
            <div class="profile">
                <img src="profile3.jpg" alt="Profile 3">
                <h2>Name 3</h2>
                <p>Position 3</p>
                <p class="extra-info">Additional information on hover.</p>
            </div>
        </div>
    </div>
</body>
</html>
