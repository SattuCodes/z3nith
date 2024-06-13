<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://use.typekit.net/gdz2chs.css');
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *{
            overflow-x: clip;
        }
        #issuenigga{
            font-size: 24px !important;
        }
        .empty{
            height: 22vh;
        }
        .update {
            margin-top: 124.078px;
            height: 5.5vh;
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
            font-size: 0.9vw;
        }
        .update a{
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-style: normal;
            text-decoration: underline;
            color: #48D597;
            text-underline-offset: 5px;
        }
        #upbutton{
            color: #48D597;
            font-size: 0.9vw;
        }
        .showcase{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 82vh;
            flex-direction: column;
        }
        .showcase .con img{
            width: 13.3vw;
            height: 22.8vh;
        }
        .showcase .con .date{
            padding-top: 15px;
            text-transform: uppercase;
            font-family: "Roboto Condensed";
            font-size: 1.2vw;
            padding-bottom: 50px;
            color: white;
        }
        .vlo {
            border-left: 2px solid white;
            height: 22vh;
            margin-bottom: 32px;
            margin-right: 130px;
            color: white;
        }
        .vlt{
            border-left: 2px solid white;
            height: 22vh;
            margin-left: 40px;
            color: white;
        }
        .con{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
        .nav-list{
            margin-right: 51px !important;
        }
        .ani {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: -1;
            transition: opacity 0.3s;
        }
        .ani .emoji {
            position: absolute;
            font-size: 12vw;
            z-index: 2;
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
            padding: 120px 60px; 
            position: relative; 
            font-size: 3vw;
            z-index: 2; 
            height: 150vh;
            background-color: #404964;
            color: white;
        }
        .bgtxt{
            text-transform: uppercase;
            color: white;
            font-size: 50px;
            font-family: "Lato";
            font-weight: 700;
            z-index: 0;
            position: absolute;
            left: 150px;
        }
        .eve{
            background-color: #1e1e1e;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .events{
            height: 150vh;
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
            padding-left: 500px;
            overflow-y: hidden;
        }
        .event{
            height: 65vh;
            width: 25vw;
            margin-right: 150px;
            flex: none;
            z-index: 1;
            position: relative;
            transition: height 0.3s;
        }
        .event h1{
            color: white;
            z-index: 0;
        }
        .event img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 14%;
        }
        .event .text-overlay {
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            color: white; 
            font-size: 6.5vw; 
            font-family: "source-serif-pro"; 
            font-weight: 700; 
            text-align: center; 
            opacity: 1;
            transition: opacity 0.8s;
        }
        .event:hover{
            height: 70vh;
        }
        .event .hover-content {
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            text-align: center; 
            color: white; 
            width: 360px;
            opacity: 0;
            transition: opacity 0.8s;
        }
        .event .hover-content h2{
            font-size: 2.5vw;
            font-family: "Lato"; 
            font-weight: 700;
            padding-bottom: 20px;
        }
        .event .hover-content .tag{
            font-family: "Lato";
            padding-bottom: 50px;
            font-style: italic;
            font-weight: 300; 
            font-size: 1.2vw;
        }
        .event .hover-content .ven{
            font-family: "Lato";
            font-size: 1.2vw;
            font-weight: 400; 
        }
        .event:hover .text-overlay{
            opacity: 0;
        }
        .event:hover .hover-content {
            opacity: 1;
        }
        .event .hover-content h2, .event .hover-content p {
            margin: 5px 0; 
        }
        .showcase button{
            font-family: "Lato";
            font-weight: 600;
            font-size: 0.72vw;
            border: none;
            border-radius: 100px;
            width: 8.3vw;
            height: 4.9vh;
            margin-bottom: 30px;
            background-color: #ffff;
            color: #404964;
        }
        .showcase button:hover{
            transition: all 0.3s;
            background-color: #404964;
            color: #ffff;
        }
        .scrollable-content::-webkit-scrollbar {
            display: none;
        }
        .treasury{
            height: 86vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #ffff;
            position: relative;
        }
        .slider {
            position: relative;
            width: 80%;
            height: 60vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slides img {
            width: 60vw;
            height: 60vh;
            object-fit: cover;
            display: none;
        }
        .dots {
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 15px;
            width: 100%;
        }
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #ffff;
            border-radius: 50%;
            border: 1px solid black;
            display: inline-block;
            transition: background-color 0.6s ease;
            cursor: pointer;
        }
        .dot:hover{
            background-color: #d7dff5;
        }
        .dot.active {
            background-color: #7a93dd;
            border: 0;
        }
        .prev, .next {
            cursor: pointer;
            width: auto;
            color: #1e1e1e;
            font-weight: 100;
            font-size: 50px;
            transition: 0.6s ease;
            user-select: none;
            z-index: 10;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }
        .footer{
            overflow: hidden;
            border-top: 1px solid black;
            display: flex;
            height: 40vh;
            width: 100vw;
            justify-content: space-between;
            align-items: center;
            background-color: #1e1e1e;
        }
        .footer .location{
            display: flex;
            flex-direction: column;
            text-align: left;  
            font-family: "Roboto";
            font-weight: 400;
            align-items: flex-start;
            color: white;
            padding-right: 100px;
        }
        .footer .location .cr{
            font-weight: 300 !important;
            text-align: left;
            font-size: 0.8vw;
        }
        .footer .social{
            display: flex;
            flex-direction: column;
            text-decoration: none;
            font-size: 1.2vw; 
        }
        .footer .sepration{
            display: flex;
        }
        .footer .sdot {
            margin: 10px;
            height: 2.5vw;
            width: 2.5vw;
            background-color: #ffff;
            border-radius: 50%;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center; 
        }

        .footer .sdot i {
            display: flex;
            align-items: center; 
            justify-content: center;
            color: black;
            font-size: 1.1vw;
            width: 100%;
            height: 100%;
        }
        .footer .sepration .sdot a{
            text-decoration: none;
        }
        .footer #zen{
            font-family: "Lato";
            font-weight: 300;
            color: #b4edd5;
            font-size: 2.3vw;
            padding-left: 100px;
        }
        .footer .location .adw{
            font-size: 1.1vw;
            margin-bottom: 10px;
        }
        #bgVideo{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .content, .events, .treasury, .footer, .update {
            position: relative;
            z-index: 1;
        }
        .footer .sdot i:hover{
            color: #64729c;
            transition: color 0.3s;
        }
        @media (max-width: 1250px) {
            #bgVideo{
                display: none; 
            }
            .showcase {
                background-image: url('asset/img/bgm.png');
                background-size: cover;
                background-position: center;
            }
            .gloc{
                width: 400px;
            }
        }

        @media (max-width: 1090px) {
            .update{
                margin-top: 70px !important;
            }
        }
        @media (max-width: 1448px) and (max-height: 980px){
            .showcase button{
                font-size: 0.8vw;
                width: 11vw;
                height: 5vh;
            }
            .event{
                height: 60vh;
            }
            .location{
                padding-right: 50px !important;
            }
            .sdot{
                height: 40px !important;
                width: 40px !important;
            }
            .footer .sdot i{
                font-size: 1.6vw;
            }
            .footer #zen{
                font-size: 2.5vw;
            }
        }
        @media (max-height: 700px){
            .footer iframe{
                height: 135px;
                width: 300px;
            }
        }
        @media (max-width: 1024px) and (max-height: 1368px){
            .update{
                margin-top: 70px !important;
            }
            .update p{
                font-size: 2.5vw;
            }
            #upbutton{
                font-size: 2.5vw;
            }
            .slider{
                width: 100%;
            }
            .slides img{
                width: 100vw;
                height: 37vh;
            }
            .prev, .next{
                color: #f5f5f5;
                font-size: 80px;
            }
            .next{
                margin-right: 45px;
            }
            .prev{
                margin-left: 45px;
            }
            .footer{
                height: 15vh;
            }
            .footer iframe{
                height: 125px;
                width: 260px;
            }
            .footer .location .cr{
                font-size: 1.2vw;
            }
            .footer .location .adw{
                font-size: 1.3vw;
            }
            .footer .sepration .sdot i{
                font-size: 1.8vw;
            }
            .footer #zen{
                font-size: 2.8vw;
            }
            .treasury{
                height: 60vh;
            }
            .dots{
                padding-bottom: 90px;
            }
            .events{
                height: 113vh;
            }
            .bgtxt{ 
                left: inherit;
                text-align: center;
            }
            .scrollable-content{
                padding-left: 930px;
            }
            .event {
                height: 45vh;
                width: 45vw;
            }
            .event:hover{
                height: 50vh;
            }
            .event .hover-content h2 {
                font-size: 5.3vw;
            }
            .event .hover-content .tag{
                font-size: 2.2vw;
            }
            .event .hover-content .ven{
                font-size: 2.2vw;
            }
            .content{
                font-size: 4vw;
            }
            .ani .emoji{
                font-size: 25vw;
            }
            .showcase{
                height: 90vh;
                justify-content: space-between;
            }
            .showcase button{
                font-size: 0.83vw;
                width: 9.3vw;
                height: 2.5vh;
            }
            .showcase .con img{
                width: 33vw;
            }
            .showcase .con .date{
                font-size: 3.2vw;
            }
            .showcase button {
                font-size: 2.2vw;
                width: 25.3vw;
                height: 4.5vh;
            }
            .eve{
                padding-top: 300px;
                padding-bottom: 300px;
            }
        }
        @media (max-width: 450px) and (max-height: 950px) {
            .footer .social a{
                text-decoration: none !important;
            }
            .footer .social{
                padding-bottom: 30px;
            }
            .slides img{
                object-fit: fill;
            }
            .prev, .next{
                font-size: 45px;    
            }
            .prev{
                margin-left: 5px;
            }
            .next{
                margin-right: 5px;
            }
            .footer{
                height: 80vh;
                width: 100vw;
                flex-direction: column;
            }
            .footer #zen{
                padding: 0;
                padding-top: 40px;
                font-size: 8vw;
                text-align: center;
            }
            .footer .social .sdot i{
                padding-top: 8px;
                font-size: 5.5vw;
            }
            .footer .location{
                padding: 0 !important;
                padding-bottom: 20px !important;
                align-items: center;
                justify-content: center;
            }
            .footer .location .adw{
                font-size: 3.5vw;
                text-align: center;
                align-items: center;
                padding: 0; 
            }
            .footer .sdot{
                flex-direction: column;
            }
            .footer .location .cr{
                font-size: 2.9vw;
            }
            .emp{
                height: 50px !important;
            }
            .dots{
                padding-bottom: 7vh;
            }
            .gloc{
                order: 0;
            }
            .event {
                height: 45vh;
                width: 70vw;
            }
            .scrollable-content {
                padding-left: 630px;
            }
            .footer iframe {
                height: 199px;
                width: 325px;
            }
            .contentcontent{
                width: 88%;
            }
            .content{
                padding: 30px 20px;
                font-size: 6.2vw;
            }
            .ani .emoji{
                font-size: 40vw;
            }
            .update{ 
                margin-top: 70px;
                height: 7.5vh;
            }
            .update p{
                font-size: 3.3vw;
                display: flex;
                flex-direction: column;
                
            }
            #upbutton{
                font-size: 3.3vw;
            }
            .showcase{
                height: 85vh;
            }
            .showcase .con img{
                height: 18vh;
                width: 45.5vw;
            }
            .showcase .date{
                font-size: 3.6vw;
            }
            .showcase button {
                font-size: 3.5vw;
                width: 40vw;
                height: 5vh;
                font-weight: 600;
            }
            .event .hover-content h2 {
                font-size: 8.3vw;
                padding-bottom: 0px;
            }
            .event .hover-content .tag{
                font-size: 3.2vw;
            }
            .event .hover-content .ven{
                font-size: 3.2vw;
            }
            .event .text-overlay {
                font-size: 20vw;
            }
            .footer .social a {
                margin-bottom: 8px;
            }
            .arrow{
                font-size: 19vw;
            }
            .showcase{
                justify-content: space-between;
            }
            .vlo{
                height: 10vh;
            }
            .vlt{
                height: 10vh;
            }
            .showcase .con .date{
                font-size: 6.6vw;
            }
            .eve{
                padding-top: 300px;
                padding-bottom: 300px;
            }
        }
    </style>
</head>
<body>
    <?php include "navigation.html"?>
    <div class="update">
        <p><span>The Registrations for Z3NITH'24 are open, &nbsp; &nbsp;</span><span id="upbutton"><a href="">Register Now</a><span> &nbsp;&nbsp;&#10095;</span></span></p>
    </div>
    <div class="showcase">
        <video autoplay loop muted playsinline poster="asset/img/bg.png" id="bgVideo">
            <source src="asset/img/bg.mp4" type="video/mp4">
        </video>    
        <div class="vlo"></div>
        <div class="con">
            <img src="asset/img/with 24 (2).png" alt="Z3NITH 24 logo">
            <p class="date">
                26 July 2024
            </p>
            <button onclick=dothis()>VIEW TRAILER</button>
            <button onclick=dothat()>BROCHURE</button>
        </div>
        <div class="vlt"></div>
    </div>
    <div class="empty"></div>
    <div class="ani" id="ani">
        <div class="emoji" id="emoji-1">🌎</div>
        <div class="emoji" id="emoji-2">🌍</div>
        <div class="emoji" id="emoji-3">🌏</div>
        <div class="emoji" id="emoji-4">🌐</div>
    </div>
    <div class="content">
        <div class="contentcontent"> "Step into the future where the brilliance of technology meets the imperative of sustainability." <br>This year, our premier tech event, Z3NITH is dedicated to exploring cutting-edge innovations that drive sustainable practices. From eco-friendly tech solutions to green energy advancements, discover how technology is shaping our future. Together, let's ignite the spark of innovation and lead the charge towards a sustainable world.</div>
    </div>
    <div class="eve">
        <div class="bgtxt">
                Events <br> this <br> year <br><span class="arrow">&#10230;</span>
        </div>
        <div class="events">
            <div class="scrollable-content">
                <div class="event">
                    <img src="asset/img/1.png" alt="">
                    <div class="text-overlay">1</div>
                    <div class="hover-content">
                        <h2 style="color: #7D918A;">Uncover</h2>
                        <p class="tag">Designing a Sustainable Future Pixel-by-Pixel</p>
                        <p class="ven">Offline - Team of 2</p>
                    </div>
                </div>
                <div class="event">
                    <img src="asset/img/2.png" alt="">
                    <div class="text-overlay">2</div>
                    <div class="hover-content">
                        <h2 style="color: #917D7D;">Frame By Frame</h2>
                        <p class="tag">Crafting Sustainable Narratives</p>
                        <p class="ven">Submission - Team of 3</p>
                    </div>
                </div>
                <div class="event">
                    <img src="asset/img/3.png" alt="">
                    <div class="text-overlay">3</div>
                    <div class="hover-content">
                        <h2 style="color: #867D91;">Armageddon</h2>
                        <p class="tag">You are up for a Tenz-tational showdown</p>
                        <p class="ven">Online - Team of 5+1</p>
                    </div>
                </div>
                <div class="event">
                    <img src="asset/img/4.png" alt="">
                    <div class="text-overlay">4</div>
                    <div class="hover-content">
                        <h2 style="color: #86917D;">Keynote</h2>
                        <p class="tag">Kreation of New Age</p>
                        <p class="ven">Hybrid - Team of 2</p>    
                    </div>
                </div>
                <div class="event" style="margin-right: 90px">
                    <img src="asset/img/5.png" alt="">
                    <div class="text-overlay">5</div>
                    <div class="hover-content">
                        <h2 style="color: #86917D;">Technomania</h2>
                        <p class="tag">Tech for all</p>
                        <p class="ven">y</p>    
                    </div>
                </div>
                <div class="event" style="width: 0.001vw;"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="treasury" id="treasury">
        <div class="slider">
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <div class="slides">
                <img src="asset/img/s1.png" alt="Slide 2">
                <img src="asset/img/slide2.png" alt="Slide 3">
                <img src="asset/img/slide3.png" alt="Slide 4">
                <img src="asset/img/slide4.png" alt="Slide 5">
                <img src="asset/img/s5.png" alt="Slide 6">
                <img src="asset/img/slide6.png" alt="Slide 7">
                <img src="asset/img/slide7.png" alt="Slide 8">
                <img src="asset/img/slide8.png" alt="Slide 9">
                <img src="asset/img/slide9.png" alt="Slide 10">
                <img src="asset/img/slide10.png" alt="Slide 11">
                <img src="asset/img/slide11.png" alt="Slide 12">
                <img src="asset/img/slide12.png" alt="Slide 13">
                <img src="asset/img/slide13.png" alt="Slide 1">
                <img src="asset/img/slide14.png" alt="Slide 14">
            </div>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
            <span class="dot" onclick="currentSlide(13)"></span>
            <span class="dot" onclick="currentSlide(14)"></span>
        </div>
    </div>
    <div class="emp" style="background-color: white; height: 200px;"></div>
    <div class="footer">
        <span id="zen">Sustain. <br> Thrive. <br> Repeat.</span>
        <div class="social">
            <div class="sepration">
                <div class="sdot"><a href="https://www.instagram.com/futurzclub"><i class='bx bxl-instagram'></i></a></div>
                <div class="sdot"><a href="mailto:futurz.afgji@gmail.com"><i class='bx bxl-gmail' ></i></a></div>
            </div>
            <div class="sepration">
                <div class="sdot"><a href="https://www.youtube.com/@FuturzClubAFGJI"><i class='bx bxl-youtube' ></i></a></div>
                <div class="sdot"><a href="https://www.linkedin.com/company/futurzclub"><i class='bx bxl-linkedin-square' ></i></a></div>
            </div>
            
        </div>
        <iframe class="gloc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.6312729964648!2d77.14778086508149!3d28.580833082438215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19b3b69de44b%3A0x95acaea9e5c00f56!2sAir+Force+Golden+Jubilee+Institute!5e0!3m2!1sen!2sin!4v1565083569386!5m2!1sen!2sin" width="600" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        <div class="location">
            <span class="adw">Senior Wing <br> Air Force Golden Jubilee Institute, <br>Subroto Park, New Delhi, Delhi, <br>NCT, India - 110010</span>
            <span class="cr">Copyright Futurz Club 2024 &copy;</span>
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
            window.addEventListener('scroll', function() {
                const aniDiv = document.querySelector('.ani');
                const aniHeight = aniDiv.offsetHeight;
                const scrollY = window.scrollY;
                let opacity = 1;
                if (scrollY > aniHeight) {
                    opacity = 1 - ((scrollY - aniHeight) / aniHeight);
                    if (opacity < 0) opacity = 0;
                }
                aniDiv.style.opacity = opacity;
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
            setInterval(changeEmoji, 1000);
        });
        let slideIndex = 1;
        showSlides(slideIndex);
        function changeSlide(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            let i;
            const slides = document.querySelector('.slides').children;
            const dots = document.querySelectorAll('.dot');
            const prev = document.querySelector('.prev');
            const next = document.querySelector('.next');
            if (n > slides.length) { slideIndex = slides.length }
            if (n < 1) { slideIndex = 1 }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('active');
            }
            slides[slideIndex - 1].style.display = 'block';
            dots[slideIndex - 1].classList.add('active');
            prev.style.visibility = (slideIndex === 1) ? 'hidden' : 'visible';
            next.style.visibility = (slideIndex === slides.length) ? 'hidden' : 'visible';
        }
        function dothat() {
            window.open("https://bit.ly/Z3NITH24Brochure");
        }
    </script>
</body> 
</html>
