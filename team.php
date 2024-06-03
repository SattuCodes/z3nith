<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <link rel="icon" type="image/x-icon" href="asset/img/unnamed (1) (1).png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        @import url("https://use.typekit.net/gdz2chs.css");
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
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
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border-radius: 30px;
            border: 2px solid #b1b8cd;
            transition: height 0.3s ease;
            justify-content: center;
            align-items: center;
        }
        #issuenigga{
            font-size: 24px !important;
        }
        .nav-list{
            margin-right: 51px !important;
        }
        .profile img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 100%;
            margin-top: 20px;
        }
        .profile h2,
        .profile p {
            text-align: center;
        }
        .profile h2 {
            margin-top: 20px;
            font-size: 28px;
            font-family: "source-serif-pro", serif;
            font-weight: 600;
        }
        .profile p {
            margin-top: 2px;
            font-size: 15px;
            color: #1e1e1e;
            text-transform: uppercase;
            font-weight: bold;
        }
        .profile .des {
            display: none;
            font-family: "Roboto", sans-serif;
            margin-top: 27px;
            font-size: 17px;
            font-style: italic;
            font-weight: 400;
            line-height: 1.2;
            word-spacing: 4px;
            text-transform: none;
            text-align: inherit;
            padding: 0 40px;
        }
        .profile::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #48D597;
            border-radius: 30px;
            z-index: -1;
            transition: all 0.3s ease;
        }
        .profile:hover::before {
            top: 60px;
            left: 70px;
        }
        .profile:hover {
            height: 600px;
        }
        .profile:hover .des {
            display: block;
        }
        .txt{
            display: none;
            justify-content: center;
            align-items: center;
        }
        .txt h1{ 
            font-size: 45px;
            font-family: "source-serif-pro", serif;
            font-weight: 700;
            text-transform: uppercase;
            color: #484848;
        }
        @media only screen and (max-width: 1600px){
            .profile .img-container{
                margin-top: 80px
            }
            .profile {
                width: 350px;
                height: 350px;
            }
            .profile img{
                height: 130px;
                width: 130px;
            }
            .profile h2{
                font-size: 26px;
            }
            .profile .des{
                font-size: 16px;
                padding: 0 60px;
            }
            .profile p{
                font-size: 14px;
            }
            .profile:hover{
                height: 480px;
            }
        }
        @media only screen and (max-width: 1450px){
            .profile .img-container{
                margin-top: 70px
            }
            .profile {
                width: 300px;
                height: 300px;
            }
            .profile img{
                height: 110px;
                width: 110px;
            }
            .profile h2{
                font-size: 23px;
            }
            .profile .des{
                font-size: 15px;
                padding: 0 40px;
            }
            .profile p{
                font-size: 13px;
            }
            .profile:hover{
                height: 450px;
            }
        }
        @media only screen and (max-width: 1370px){
            .profile .img-container{
                margin-top: 50px;
            }
            .profile {
                width: 260px;
                height: 260px;
            }
            .profile img{
                height: 110px;
                width: 110px;
            }
            .profile h2{
                font-size: 21px;
            }
            .profile .des{
                font-size: 15px;
                padding: 0 30px;
            }
            .profile p{
                font-size: 12px;
            }
            .profile:hover{
                height: 400px;
            }
        }
        @media only screen and (max-width: 1270px){
            .profile .img-container{
                margin-top: 40px;
            }
            .profile {
                width: 250px;
                height: 250px;
            }
            .profile img{
                height: 100px;
                width: 100px;
            }
            .profile h2{
                font-size: 21px;
            }
            .profile .des{
                font-size: 14px;
                padding: 0 20px;
            }
            .profile p{
                font-size: 12px;
            }
            .profile:hover{
                height: 410px;
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
                font-size: 20px;
            }
            .profile .des{
                font-size: 13px;
            }
            .profile p{
                font-size: 11px;
            }
            .profile:hover{
                height: 390px;
            }
        }
        @media only screen and (max-width: 1045px) {
            .profile {
                width: 300px;
                height: 300px;
            }
            .profile img{
                height: 110px;
                width: 110px;
            }
            .profile h2{
                font-size: 27px;
            }
            .profile .des{
                font-size: 17px;
            }
            .profile p{
                font-size: 15px;
            }
            .profile:hover{
                height: 450px;
            }
        }
        @media only screen and (max-width: 880px) {
            .txt{
                display: flex;
            }
            .container{
                margin-top: 100px !important;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .container:hover{
                margin-right: 20px !important;
                margin: 0;
            }
        }
        @media only screen and (max-width: 475px) {
            .profile{
                width: 300px;
                height: 300px;
            }
            .container{
                margin: 30px 0px;
            }
            .profile:hover{
                height: 500px;
            }
        }
        @media only screen and (max-width: 450px) {
            .profile{
                height: 250px;
                width: 250px;
            }
            .profile h2{
                font-size: 23px;
            }
            .profile p{
                font-size: 14px;
            }
            .profile .des{
                font-size: 12px;
            }
        }
        @media only screen and (max-width: 400px) {
            .profile img{
                height: 80px;
                width: 80px;
            }
            .profile{
                height: 200px;
                width: 200px;
            }
            .profile h2{
                font-size: 20px;
            }
            .profile p{
                font-size: 13px;
            }
            .profile .des{
                font-size: 12px;
            }
            .profile:hover{
                height: 400px
            }
        }
    </style>
</head>
<body>
    <?php include 'navigation.html'?>
    <div class="txt" style="margin-top: 180px;"><h1>Our Team</h1></div>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="profile">
                <img src="asset/img/maam.png" alt="Profile 1">
                <h2>Ms. Mohini Arora</h2>
                <p>Event Director</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/prajwal.png" alt="Profile 2">
                <h2>Prajwal</h2>
                <p>Mentor Coordinator</p>
                <p class="des">A developer and skill collector.</p> 
            </div>
            <div class="profile">
                <img src="asset/img/Abhinavnew.png" alt="Profile 3">
                <h2>Abhinav Mishra</h2>
                <p>PR Head</p>
                <p class="des">Spending half his life Rotoscoping water, one mask at a time.</p>
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/kabir.png" alt="Profile 1">
                <h2>Kabir Jhamb</h2>
                <p>President</p>
                <p class="des">An avid gamer and caffeine aficionado, he is always fueled for action, whether it's on the screen or cheering for his favorite teams in football, basketball, or F1 races.</p> 
            </div>
            <div class="profile">
                <img src="asset/img/sarthak.png" alt="Profile 1">
                <h2>Sarthak Singh</h2>
                <p>Vice President</p>
                <p class="des">A patient guy. He clicks chrome just once and waits.</p> 
            </div>
            <div class="profile">
                <img src="asset/img/babya.png" alt="Profile 1">
                <h2>Bhavya Dhariwal</h2>
                <p>Executive - Tech</p>
                <p class="des">A passionate gamer, art lover, and classical dancer who embraces technology and cherishes tradition. Organized yet clumsy, she brings creativity to everything she does</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/deluluheadboy.png" alt="Profile 1">
                <h2>Maulik Pandey</h2>
                <p>Executive - Operations</p>
                <p class="des">Always sleeping with his playlist on the play right beside him; p.s.-don't try to take away his music and bed from him unless you want him mad :)</p>
            </div>
            <div class="profile">
                <img src="asset/img/sutta.png" alt="Profile 1">
                <h2>Satyam Tiwari</h2>
                <p>Website Manager</p>
                <p class="des">Des</p> 
            </div>
            <div class="profile">
                <img src="asset/img/artist.png" alt="Profile 1">
                <h2>Aditi Gupta</h2>
                <p>Event Lead (Uncover)</p>
                <p class="des">probably your 66 year old multitasker technologically challenged granny</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/chapra.png" alt="">
                <h2>Satyam Kumar</h2>
                <p>Event Lead (Frame By Frame)</p>
                <p class="des">Professional Reeler, Dreamer, Designer & Paneer Enjoyer</p>
            </div>
            <div class="profile">
                <img src="asset/img/mayank.png" alt="Profile 1">
                <h2>Mayank Kumar</h2>
                <p>Event Lead (Keynote)</p>
                <p class="des">Techy Sporty aspirant. Found everywhere outside of class.</p> 
            </div>
            <div class="profile">
                <img src="asset/img/shivanshi.png" alt="Profile 1">
                <h2>Shivanshi Tanwar</h2>
                <p>Event Lead (Keynote)</p>
                <p class="des">Just a beginner , on the way to learn new things</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/skullvansh.png" alt="Profile 1">
                <h2>Vansh Bhasin</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Finally stopped eating sugar, gym is love hate relationship💀💀💀💀</p> 
            </div>
            <div class="profile">
                <img src="asset/img/droy.png" alt="Profile 1">
                <h2>Debangshu Roy</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Coffee chords and code... that's all that is.. that's all he is</p> 
            </div>
            <div class="profile">
                <img src="asset/img/shivya.png" alt="Profile 1">
                <h2>Shivya Verma</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">A psychology student trying to get her life together</p> 
            </div>
        </div>
        <div class="row">
            <div class="profile">
                <img src="asset/img/datta.png" alt="Profile 1">
                <h2>Saptangshu Datta</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">*Hmm* Genius, billionaire(almost), yapper, philanthropist</p> 
            </div>
            <div class="profile">
                <img src="asset/img/raghav.png" alt="">
                <h2>Raghav Bahukhandi</h2>
                <p>Alumni (Advisor)</p>
                <p class="des">Professional ‘hello world’ printer, does web development sometimes.</p>
            </div>
        </div>
    </div>
    <script>
    function rearrangeProfiles() {
        const container = document.querySelector('.container');
        const profiles = Array.from(container.querySelectorAll('.profile'));
        container.innerHTML = '';
        if (window.matchMedia('(max-width: 880px)').matches) {
            profiles.forEach(profile => {
                const newRow = document.createElement('div');
                newRow.classList.add('row');
                newRow.appendChild(profile);
                container.appendChild(newRow);
            });
        } else if (window.matchMedia('(max-width: 1045px)').matches) {
            let newRow;
            profiles.forEach((profile, index) => {
                if (index % 2 === 0) {
                    newRow = document.createElement('div');
                    newRow.classList.add('row');
                    container.appendChild(newRow);
                }
                newRow.appendChild(profile);
            });
        } else {
            let newRow;
            profiles.forEach((profile, index) => {
                if (index % 3 === 0) {
                    newRow = document.createElement('div');
                    newRow.classList.add('row');
                    container.appendChild(newRow);
                }
                newRow.appendChild(profile);
            });
        }
    }
    const mediaQuery880 = window.matchMedia('(max-width: 880px)');
    const mediaQuery1045 = window.matchMedia('(max-width: 1045px)');
    mediaQuery880.addListener(rearrangeProfiles);
    mediaQuery1045.addListener(rearrangeProfiles);
    rearrangeProfiles();
</script>



</body>
</html>
