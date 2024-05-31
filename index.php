<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        .update {
            margin-top: 124.078px;
            height: 50px;
            background-color: #333333;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }   
        .update p{ 
            font-family: "Lato";
            font-weight: 300;
            font-style: normal;
            color: white;
        }
        .update a{
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-style: normal;
            text-decoration: underline;
            color: #48D597;
        }
        .update span{
            color: #48D597;
            font-size: 15px;
        }
        .showcase{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80.79034028540066vh;
            flex-direction: column;
        }
        .showcase img{
            width: 14%;
        }
        .showcase .date{
            padding-top: 15px;
            text-transform: uppercase;
            font-family: "Roboto Condensed";
            font-size: 23px;
            padding-bottom: 50px;
        }
        .vlo {
            border-left: 3px solid black;
            height: 500px;
            margin-bottom: 32px;
            margin-right: 130px;
        }
        .vlt{
            border-left: 3px solid black;
            height: 500px;
            margin-left: 40px;
        }
        .nav-list{
            margin-right: 51px !important;
        }
        .ani{
            height: 86vh;
            display: flex;
            justify-content: center; 
            align-items: center;
            background-color: #f5f5f5;
            position: relative; 
            z-index: 1;
        }
        .ani.fixed {
            position: fixed; 
            top: 245px; 
            left: 0; 
            right: 0; 
            transform: translateY(-120px);
        }
        .ani img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .ani .emoji {
            position: absolute;
            font-size: 14vw;
            z-index: 2;
            padding-bottom: 5.5vh;
            opacity: 0;
            transition: opacity 2s;
        }
        .emoji.visible {
            opacity: 1;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Lato";
            font-weight: 700;
            padding: 80px 60px; 
            position: relative; 
            font-size: 50px;
            z-index: 2; 
            height: 790px;
            background-color: white;
            color: #256D4E;
        }
        @media only screen and (max-width: 1500px) and (max-height: 800px){
            .emo {
                font-size: 145px;
                height: 217px;
                display: flex;
                flex-direction: column;
                position: relative;
            }
        }
        .bgtxt{
            text-transform: uppercase;
            color: white;
            font-size: 50px;
            font-family: "Lato";
            font-weight: 700;
            z-index: 0;
            position: absolute;
            top: 50%;
            left: 150px;
            transform: translateY(-50%);
        }
        .events{
            height: 86vh;
            background-color: #1e1e1e;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .scrollable-content {
            display: flex;
            align-items: center;
            overflow-x: auto;
            width: 100%;
            padding-left: 350px; /* Adjust the padding as per your requirement */
        }
        .event{
            height: 200px;
            min-width: 150px;
            margin-right: 20px;
            flex: none;
        }
        .event h1{
            color: white;
        }
    </style>
</head>
<body>
    <?php include "navigation.html"?>
    <div class="update">
        <p>
            The Registrations for Z3NITH'24 are open, <a href="">Register Now</a><span> ></span>
        </p>
    </div>
    <div class="showcase">
        <div class="vlo"></div>
        <img src="asset/img/with 24 (2).png" alt="Z3NITH 24 logo">
        <p class="date">
            26 July 2024
        </p>
        <div class="vlt"></div>
    </div>
    <div class="ani" id="ani">
        <img src="asset/img/bg2.jpg" alt="">
        <div class="emoji" id="emoji-1">🌎</div>
        <div class="emoji" id="emoji-2">🌍</div>
        <div class="emoji" id="emoji-3">🌏</div>
        <div class="emoji" id="emoji-4">🌐</div>
    </div>
    <div class="content">"Step into the future where the brilliance of technology meets the imperative of sustainability." <br>This year, our premier tech event, Z3NITH is dedicated to exploring cutting-edge innovations that drive sustainable practices. From eco-friendly tech solutions to green energy advancements, discover how technology is shaping our future. Together, let's ignite the spark of innovation and lead the charge towards a sustainable world.
    </div>
    <div class="events">
        <div class="bgtxt">
            Events <br> this <br> year
        </div>
        <div class="scrollable-content">
            <div class="event">
                <h1>Uncover</h1>
            </div>
            <div class="event">
                <h1>Frame By Frame</h1>
            </div>
            <div class="event">
                <h1>Armageddon</h1>
            </div>
            <div class="event">
                <h1>Keynote</h1>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const content = document.querySelector('.content');
        const ani = document.getElementById('ani');
        const aniHeight = ani.offsetHeight;
        const contentHeight = content.offsetHeight;
        const emojis = document.querySelectorAll('.emoji');
        let currentEmojiIndex = 0;

        window.addEventListener('scroll', function () {
            const scrollY = window.scrollY;
            const contentBottom = content.offsetTop + contentHeight;

            if (scrollY >= aniHeight && scrollY < contentBottom - window.innerHeight) {
                ani.classList.add('fixed');
                content.style.marginTop = aniHeight + 'px';
            } else {
                ani.classList.remove('fixed');
                content.style.marginTop = '0';
            }
        });

        function changeEmoji() {
            emojis.forEach((emoji, index) => {
                if (index === currentEmojiIndex) {
                    emoji.classList.add('visible');
                } else {
                    emoji.classList.remove('visible');
                }
            });
            currentEmojiIndex = (currentEmojiIndex + 1) % emojis.length;
        }

        changeEmoji();
        setInterval(changeEmoji, 3000);
    });
    </script>
</body>
</html>
