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
            max-width: 1760px;
            margin: 30px 80px;
            padding: 0 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 150px;
        }
        .profile {
            position: relative;
            width: 400px;
            height: 400px;
            padding: 50px;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border-radius: 30px;
            border: 2px solid #b1b8cd;
            justify-content: center;
            align-items: center;
            transition: height 0.3s ease;
        }
        .profile img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
        }
        .profile h2 {
            margin-top: 20px;
            font-size: 25px;
            font-family: 'Source Serif Pro', sans-serif;
            font-weight: 600;
            text-align: center;
        }
        .profile p {
            margin-top: 3px;
            font-size: 20px;
            text-align: center;
        }
        .profile .des {
            display: none;
            margin-top: 25px;
            font-size: 18px;
            text-align: center;
            font-style: italic;
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
            top: 50px;
            left: 80px;
        }
        .profile:hover {
            height: 600px;
        }
        .profile:hover .des {
            display: block;
        }
    </style>
</head>
<body>
    <?php include 'navigation.html'?>
    <div class="container">
        <div class="row" style="margin-top: 200px">
            <div class="profile">
                <img src="asset/img/maam.jpg" alt="Profile 1">
                <h2>Ms. Mohini Arora</h2>
                <p>Event Director</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 2">
                <h2>Prjwal</h2>
                <p>Mentor Coordinator</p>
                <p class="des">des</p> 
            </div>
            <div class="profile">
                <img src="profile3.jpg" alt="Profile 3">
                <h2>Abhinav Mishra</h2>
                <p>PR Head</p>
                <p class="des">des</p>
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Bhavya Dhariwal</h2>
                <p>Executive - Tech</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Maulik Pandey</h2>
                <p>Executive - Operations</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Kabir Jhamb</h2>
                <p>President</p>
                <p class="des">Des</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Sarthak Singh</h2>
                <p>Vice President</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Aditi Gupta</h2>
                <p>Event Lead (Uncover)</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Satyam Kumar</h2>
                <p>Event Lead (Frame By Frame)</p>
                <p class="des">Des</p> 
            </div>
        </div>
    </div>
</body>
</html>
