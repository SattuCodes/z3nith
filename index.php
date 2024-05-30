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
        .ani{
            height: 786px;
            display: flex;
            justify-content: center; 
            align-items: center;
        }
        .ani img{
            width: 10%;
        }
        .vl{
            border-left: 3px solid black;
            height: 180px;
            margin-left: 80px;
            margin-right: 44px;
            margin-bottom: 0px;
            margin-top: 0px;
        }
        .emo{
            font-size: 190px;
            height: 277px;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .emo span {
            position: absolute;
            left: 0;
            top: 0;
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }
        .hidden {
            opacity: 0;
        }
        .visible {
            opacity: 1;
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
    <div class="ani">
        <img src="asset/img/unnamed (1) (1).png" alt="">
        <div class="vl"></div>
        <div class="emo">
            <span class="visible" style="z-index: 1;">&#127758;</span>
            <span class="hidden" style="z-index: 0;">&#127757;</span>
            <span class="hidden" style="z-index: 0;">&#127759;</span>
            <span class="hidden" style="z-index: 0;">&#127760;</span>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const spans = document.querySelectorAll('.emo span');
            let currentIndex = 0;
            function updateVisibility() {
                spans.forEach((span, index) => {
                    if (index === currentIndex) {
                        span.classList.remove('hidden');
                        span.classList.add('visible');
                        span.style.transform = 'translateY(0)';
                        span.style.zIndex = 1;
                    } else {
                        span.classList.remove('visible');
                        span.classList.add('hidden');
                        span.style.transform = 'translateY(-80px)';
                        span.style.zIndex = 0;
                    }
                });
            }
            function onKeyframe() {
                currentIndex = (currentIndex + 1) % spans.length;
                updateVisibility();
            }
            updateVisibility();
            setInterval(onKeyframe, 4000);
        });
    </script>
</body>
</html>
