<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'24</title>
    <style>
        @import url('https://use.typekit.net/gdz2chs.css');
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        #issuenigga{
            font-size: 24px !important;
        }
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
            height: 200px;
            margin-bottom: 32px;
            margin-right: 130px;
        }
        .vlt{
            border-left: 3px solid black;
            height: 200px;
            margin-left: 40px;
        }
        .nav-list{
            margin-right: 51px !important;
        }
        .ani{
            height: 90vh;
            display: flex;
            justify-content: center; 
            align-items: center;
            background-color: #f5f5f5;
            position: relative; 
            z-index: 1;
        }
        .ani.fixed {
            position: fixed; 
            top: 205px; 
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
            padding-left: 500px;
            overflow-y: hidden;
        }
        .event{
            height: 550px;
            width: 460px;
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
            font-size: 7rem; 
            font-family: "source-serif-pro"; 
            font-weight: 700; 
            text-align: center; 
            opacity: 1;
            transition: opacity 0.8s;
        }
        .event:hover{
            height: 620px;
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
            font-size: 3rem;
            font-family: "Lato"; 
            font-weight: 700;
            padding-bottom: 20px;
        }
        .event .hover-content .tag{
            font-family: "Lato";
            padding-bottom: 50px;
            font-style: italic;
            font-weight: 300; 
            font-size: 1.3rem;
        }
        .event .hover-content .ven{
            font-family: "Lato";
            font-size: 1.3rem;
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
            font-size: 14px;
            border: none;
            border-radius: 100px;
            width: 160px;
            height: 63px;
            margin-bottom: 30px;
            background-color: #ffff;
            color: #6376b0;
        }
        .showcase button:hover{
            transition: all 0.3s;
            background-color: #6376b0;
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
        .footer .social a:hover{
            color: #64729c;
            transition: color 0.3s;
        }
        .footer{
            border-top: 1px solid black;
            display: flex;
            height: 28vh;
            width: 99vw;
            justify-content: space-between;
            align-items: center;
        }
        .footer #fzl{
            padding-left: 50px;
            width: 200px;
            height: 110px;
        }
        .footer .location{
            display: flex;
            flex-direction: column;
            text-align: right;  
            font-family: "source-serif-pro";
            font-weight: 600;
            align-items: flex-end;
        }
        .footer .location .cr{
            font-weight: 400 !important;
        }
        .footer .social{
            display: flex;
            flex-direction: column;
            font-family: "source-serif-pro";
            font-weight: 600;
            text-decoration: none;
            font-size: 1.5rem; 
        }
        .footer .location .adw{
            font-size: 1.5rem;
        }
        .footer .social a{
            color: black;
            text-align: left;   
        }
        .footer #fcl{
            padding-right: 50px;
            height: 150px;
        }
    </style>
</head>
<body>
    <?php include "navigation.html"?>
    <div class="update">
        <p>
            The Registrations for Z3NITH'24 are open, &nbsp; <a href="">&nbsp;Register Now</a><span> &#10095;</span>
        </p>
    </div>
    <div class="showcase">
        <div class="vlo"></div>
        <img src="asset/img/with 24 (2).png" alt="Z3NITH 24 logo">
        <p class="date">
            26 July 2024
        </p>
        <button onclick=dothis()>VIEW TRAILER</button>
        <button onclick=dothat()>BROCHURE</button>
        <div class="vlt"></div>
    </div>
    <div class="ani" id="ani">
        <img src="asset/img/bg1.png" alt="">
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
                <img src="asset/img/1.png" alt="">
                <div class="text-overlay">1</div>
                <div class="hover-content">
                    <h2 style="color: #7D918A;">Uncover</h2>
                    <p class="tag">Designing a Sustainable Future Pixel-by-Pixel</p>
                    <p class="ven">Offline - Team of 2 <br> SR. COMPUTER LAB</p>
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
                    <p class="ven">Hybrid - Team of 2 <br> JR. COMPUTER LAB</p>    
                </div>
            </div>
        </div>
    </div>
    <div class="treasury" id="treasury">
        <div class="slider">
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <div class="slides">
                <img src="asset/img/slide1.jpg" alt="Slide 1">
                <img src="asset/img/slide2.jpg" alt="Slide 2">
                <img src="asset/img/slide3.jpg" alt="Slide 3">
                <img src="asset/img/slide3.jpg" alt="Slide 4">
                <img src="asset/img/slide3.jpg" alt="Slide 5">
                <img src="asset/img/slide3.jpg" alt="Slide 6">
                <img src="asset/img/slide3.jpg" alt="Slide 7">
                <img src="asset/img/slide3.jpg" alt="Slide 8">
                <img src="asset/img/slide3.jpg" alt="Slide 9">
                <img src="asset/img/slide3.jpg" alt="Slide 10">
                <img src="asset/img/slide3.jpg" alt="Slide 11">
                <img src="asset/img/slide3.jpg" alt="Slide 12">
                <img src="asset/img/slide3.jpg" alt="Slide 13">
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
        </div>
    </div>
    <div class="footer" style="margin-top: 200px;">
        <img src="asset/img/Z3NITH24BLACK.png" alt="" id=fzl>
        <div class="social">
            <a href="">Instagram</a>
            <a href="">Email</a>
            <a href="">YouTube</a>
            <a href="">LinkedIn</a>
        </div>
        <div class="location">
            <span class="adw">Senior Wing, Air Force Golden Jubilee Institute <br>Subroto Park, New Delhi, Delhi, India - 110010</span>
            <div class="cr">Copyright Futurz Club 2024 &copy;</div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.6312729964648!2d77.14778086508149!3d28.580833082438215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19b3b69de44b%3A0x95acaea9e5c00f56!2sAir+Force+Golden+Jubilee+Institute!5e0!3m2!1sen!2sin!4v1565083569386!5m2!1sen!2sin" width="300" height="180" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        <img src="asset/img/unnamed (1) (1).png" alt="" id="fcl">
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
    const treasuryButton = document.getElementById('issuenigga');
    treasuryButton.addEventListener('click', function () {
        const treasurySection = document.getElementById('treasury');
        treasurySection.scrollIntoView({ behavior: 'smooth' });
    });
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
</script>

</body>
</html>
