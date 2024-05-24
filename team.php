<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <link rel="icon" type="image/x-icon" href="asset/img/unnamed (1) (1).png">
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
            position: relative;
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
        @media only screen and (max-width: 1600px){
            .profile {
                width: 350px;
                height: 350px;
            }
            .profile img{
                height: 150px;
                width: 150px;
            }
            .profile h2{
                font-size: 20px;
            }
            .profile .des{
                font-size: 15px;
            }
            .profile p{
                font-size: 18px;
            }
        }
        @media only screen and (max-width: 1450px){
            .profile {
                width: 300px;
                height: 300px;
            }
            .profile img{
                height: 125px;
                width: 125px;
            }
            .profile h2{
                font-size: 19px;
            }
            .profile .des{
                font-size: 14px;
            }
            .profile p{
                font-size: 17px;
            }
        }
        @media only screen and (max-width: 1270px){
            .profile {
                width: 250px;
                height: 250px;
            }
            .profile img{
                height: 100px;
                width: 100px;
            }
            .profile h2{
                font-size: 18px;
            }
            .profile .des{
                font-size: 13px;
            }
            .profile p{
                font-size: 16px;
            }
        }
        @media only screen and (max-width: 1125px){
            .profile {
                width: 225px;
                height: 225px;
            }
            .profile img{
                height: 83px;
                width: 83px;
            }
            .profile h2{
                font-size: 17px;
            }
            .profile .des{
                font-size: 12px;
            }
            .profile p{
                font-size: 15px;
            }
        }
        @media only screen and (max-width: 1045px) {
            .profile {
                width: 185px;
                height: 185px;
            }
            .profile img{
                height: 60px;
                width: 60px;
            }
            .profile h2{
                font-size: 16px;
            }
            .profile .des{
                font-size: 11px;
            }
            .profile p{
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navigation.html'?>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="profile">
                <img src="asset/img/maam.jpg" alt="Profile 1">
                <h2>Ms. Mohini Arora</h2>
                <p>Event Director</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/prajwal.jpg" alt="Profile 2">
                <h2>Prajwal</h2>
                <p>Mentor Coordinator</p>
                <p class="des">des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/abhinav.jpeg" alt="Profile 3">
                <h2>Abhinav Mishra</h2>
                <p>PR Head</p>
                <p class="des">des</p>
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/bhavya.jpg" alt="Profile 1">
                <h2>Bhavya Dhariwal</h2>
                <p>Executive - Tech</p>
                <p class="des">A passionate gamer, art lover, and classical dancer who embraces technology and cherishes tradition. Organized yet clumsy, she brings creativity to everything she does</p> 
            </div>
            <div class="profile">
                <img src="asset/img/deluluheadboy.jpg" alt="Profile 1">
                <h2>Maulik Pandey</h2>
                <p>Executive - Operations</p>
                <p class="des">Always sleeping with his playlist on the play right beside him; p.s.-don't try to take away his music and bed from him unless you want him mad :)</p> 
            </div>
            <div class="profile">
                <img src="asset/img/kabir.jpg" alt="Profile 1">
                <h2>Kabir Jhamb</h2>
                <p>President</p>
                <p class="des">Des</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/sarthak.jpeg" alt="Profile 1">
                <h2>Sarthak Singh</h2>
                <p>Vice President</p>
                <p class="des">A patient guy. He clicks chrome just once and waits.</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Satyam Tiwari</h2>
                <p>Website Manager</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/artist.jpeg" alt="Profile 1">
                <h2>Aditi Gupta</h2>
                <p>Event Lead (Uncover)</p>
                <p class="des">probably your 66 year old multitasker technologically challenged granny
</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/chapra.jpg" alt="">
                <h2>Satyam Kumar</h2>
                <p>Event Lead (Frame By Frame)</p>
                <p class="des">Des</p>
            </div>
            <div class="profile">
                <img src="asset/img/mayank.jpg" alt="Profile 1">
                <h2>Mayank Kumar</h2>
                <p>Event Lead (Keynote)</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/shivanshi.jpg" alt="Profile 1">
                <h2>Shivanshi Tanwar</h2>
                <p>Event Lead (Keynote)</p>
                <p class="des">Just a beginner , on the way to learn new things</p> 
            </div>
            
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/skullvansh.jpg" alt="Profile 1">
                <h2>Vansh Bhasin</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/droy.jpeg" alt="Profile 1">
                <h2>Debangshu Roy</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Coffee chords and code... that's all that is.. that's all he is</p> 
            </div>
            <div class="profile">
                <img src="" alt="Profile 1">
                <h2>Shivya Verma</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Des</p> 
            </div>
            
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/datta.jpg" alt="Profile 1">
                <h2>Saptangshu Datta</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">*Hmm* Genius, billionaire(almost), yapper, philanthropist</p> 
            </div>
            <div class="profile">
                <img src="asset/img/raghav.jpeg" alt="">
                <h2>Raghav Bhaukandi</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Des</p>
            </div>
        </div>
    </div>
</body>
</html>
