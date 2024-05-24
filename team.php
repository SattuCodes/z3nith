<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        @import url('https://fonts.cdnfonts.com/css/source-serif-pro');
        *{
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 30px 85px;
            padding: 0 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            gap: 360px;
        }
        .profile {
            padding: 60px;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border-radius: 15px;
            border: 1px solid #b1b8cd;
            justify-content: center;
            align-items: center;
        }
        .profile img {
            width: 210px;
            height: 210px;
            object-fit: cover;
            border-radius: 50%;
        }
        .profile h2 {
            margin-top: 10px;
            font-size: 18px;
            font-family: 'Source Serif Pro', sans-serif;
            font-weight: 600;
        }
        .profile p {
            margin-top: 5px;
            font-size: 14px;
            font-family: "Lato", sans-serif;
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
            </div>
            <div class="profile">
                <img src="profile2.jpg" alt="Profile 2">
                <h2>Name 2</h2>
                <p>Position 2</p>
            </div>
            <div class="profile">
                <img src="profile3.jpg" alt="Profile 3">
                <h2>Name 3</h2>
                <p>Position 3</p>
            </div>
        </div>
    </div>
</body>
</html>