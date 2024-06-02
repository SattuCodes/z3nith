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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-y: hidden;
        }

        .content {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            margin-top: 140px;
            height: auto;
        }

        .player {
            width: auto;
            height: 100%;
            padding: 0;
            margin-left: 108px;
            margin-right: 60px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            margin-bottom: 64px;
            overflow: hidden;
        }

        #videoPlayer {
            width: 1140px;
            height: 600px;
        }

        .click {
            margin-right: 70px;
            width: 80vh;
            height: 80vh;
            padding-right: 30px;
            padding-left: 10px; 
            overflow-y: auto;
            overflow-x: auto; 
            direction: rtl; 
            scrollbar-width: thin;
            scrollbar-color: #32caf0 #00000091; 
            display: flex;
            flex-direction: column;
        }

        .click img {
            height: 264px;
            width: 455px;
            margin-bottom: 10px;
            cursor: pointer;
            direction: ltr;
            object-fit: cover;
            opacity: 100%;
        }

        .image {
            min-height: 400px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: column;
            margin-bottom: 80px;
            overflow: hidden;
        }

        .image span {
            padding-top: 10px;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
            color: #64729C;
            font-size: 25px;
            padding-bottom: 24px;
        }

        .image.active {
            background-color: rgba(207, 222, 255, 0.5);
        }

        .empty-image {
            display: none;
        }

        @media only screen and (max-height: 770px) {
            #videoPlayer {
                width: 1140px;
                height: 75vh;
                max-height: 770px;
            }
        }

        @media only screen and (max-width: 1310px) and (min-width: 587px) {
            #videoPlayer {
                width: 100%;
                max-width: 1310px;
                height: 450px;
            }

            .player {
                width: 100%;
                max-width: 1310px;
                height: 450px;
                margin: 0;
            }

            .content {
                display: flex;
                flex-direction: column;
            }

            .click {
                margin-top: 30px;
                margin-right: 0;
                padding: 0;
                width: 100%;
                display: grid;
                grid-auto-flow: column;
                height: 23vh;
                grid-auto-columns: 40%;
                direction: ltr;
                gap: 11rem;
                scroll-snap-type: x mandatory;
                scrollbar-width: none;
                scrollbar-color: initial;
            }

            .image {
                min-height: 153px;
                scroll-snap-align: center;
                padding: 0;
                margin: 0;
            }

            .image span {
                padding: 0;
            }
        }

        @media only screen and (max-width: 586px) {
            #videoPlayer {
                width: 100%;
                max-width: 1310px;
                height: 450px;
            }

            .player {
                width: 100%;
                max-width: 1310px;
                height: 450px;
                margin: 0;
            }

            .content {
                display: flex;
                flex-direction: column;
            }

            .click {
                margin-top: 30px;
                margin-right: 0;
                padding: 0;
                width: 100%;
                display: grid;
                grid-auto-flow: column;
                height: 27vh;
                direction: ltr;
                gap: 11rem;
                scroll-snap-type: x mandatory;
                scrollbar-width: none;
                scrollbar-color: initial;
                overflow-y: hidden;
            }

            .image {
                min-height: 190px;
                scroll-snap-align: center;
                padding: 0;
                margin: 0;
            }

            .image span {
                padding: 0;
                font-size: 19px;
            }
        }

        @media only screen and (max-height: 752px) and (max-width: 1310px) {
            #videoPlayer {
                width: 100%;
                max-width: 1310px;
                height: 370px;
            }
            .player {
                width: 100%;
                max-width: 1310px;
                height: 400px;
                margin: 0;
            }
            .click{
                overflow-y: hidden;
            }
        }
        @media only screen and (max-height: 673px) and (max-width: 1310px) {
            #videoPlayer {
                width: 100%;
                max-width: 1310px;
                height: 320px;
            }
            .player {
                width: 100%;
                max-width: 1310px;
                height: 320px;
                margin: 0;
            }
            .click{
                overflow-y: hidden;
            }
        }
        @media only screen and (max-width: 1700px) {
            .click img{
                width: 400px;
            }
            
        }
        @media only screen and (max-width: 1600px) {
            .click img{
                width: 350px;
                height: 225px;
            }
            .image{
                min-height: 350px;
            }
        }

        @media only screen and (max-width: 1500px) {
            .click img {
                width: 258px;
                height: 185px;
            }
            .image{
                min-height: 270px;
            }
        }
        @media only screen and (max-width: 1400px) and (max-height: 730px){
            .click img{
                width: 230px;
                height: 130px;
            }
            .image{
                min-height: 200px;
            }
        }
        @media only screen and (max-height: 800px) {
            .click img{
                height: 144px;
            }
        }
        @media only screen and (max-height: 800px) {
            .click img{
                height: 17vh;
            }
        }
        @media only screen and (max-height: 784px) {
            .click img{
                height: 13vh;
            }
        }

        @media only screen and (max-width: 1600px) and (min-height: 900px) {
            .click img {
                height: 190px;
                width: 310px;
            }
            .image {
                min-height: 293px;
            }
        }


        @media only screen and (max-width: 1440px) and (max-height: 830px) {
            .click img {
                height: 150px;
                width: 304px;
            }
            .image {
                min-height: 250px;
            }
        }
        @media only screen and (max-width: 1440px) and (max-height: 799px) {
            .click img {
                height: 120px;
                width: 195px;
            }
            .image {
                min-height: 293px;
            }
        }
        @media only screen and (max-width: 1440px) and (max-height: 770px) {
            .click img {
                height: 107px;
                width: 188px;
            }
            .image {
                min-height: 293px;
            }
        }
        @media only screen and (max-width: 1440px) and (max-height: 770px) {
            .click img {
                height: 90px;
                width: 170px;
            }
            .image {
                min-height: 293px;
            }
        }
        @media only screen and (max-width: 1440px) and (max-height: 695px) {
            .click img {
                height: 182px;
                width: 255px;
            }
            .image {
                min-height: 215px;
            }
        }
        @media only screen and (min-width: 1440px) and (max-height: 731px) {
            .click img {
                height: 190px;
                width: 304px;
            }
            .image {
                min-height: 293px;
            }
        }
        @media only screen and (min-width: 1400px) and (max-height: 800px) {
            .click img {
                width: 230px;
                height: 140px;
            }
            .image {
                min-height: 240px;
            }
        }
        @media only screen and (min-width: 1349px) and (max-height: 599px) {
            .click img {
                height: 155px;
                width: 245px;
            }
            .image {
                min-height: 228px;
            }
            .image span{
                font-size: 18px;
            }

        }
    </style>
</head>
<body>
    <?php include 'navigation.html'?>
    <div class="content">
        <div class="player">
            <iframe id="videoPlayer" width="1140" height="600" src="https://www.youtube.com/embed/zMDJWq8-JdU"></iframe>
        </div>
        <div class="click">
            <div class="image empty-image">
                <img src="" alt="">
                <span></span>
            </div>
            <div class="image" id="secondImage" data-video="https://www.youtube.com/embed/zMDJWq8-JdU">
                <img id="sp" src="asset/img/Frame 1 (13).png" alt="">
                <span>Z3NITH'23 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/zZk0F9yvb4A">
                <img src="asset/img/zeroT.png" alt="">
                <span>Z3NITH'23 | Teaser</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/VROaUIA-ACs">
                <img id="i12" src="asset/img/teaser22.png" alt="">
                <span>Z3NITH'22 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/5Vc6nkNHsyA">
                <img src="asset/img/z22 teaser.png" alt="">
                <span>Z3NITH'22 | Teaser</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/7M50LH8Gw8c">
                <img src="asset/img/z21.png" alt="">
                <span>Z3NITH'21 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/rXvGnig0VQU">
                <img src="asset/img/z20.png" alt="">
                <span>Z3NITH'20 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/95kbdhlDFdE">
                <img src="asset/img/z19.png" alt="" style="object-fit: fill;">
                <span>Z3NITH'19 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/JjguhXUWHds">
                <img src="asset/img/z18.jpg" alt="" style="object-fit: fill;">
                <span>Z3NITH'18 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/V608MMmU0Tk">
                <img src="asset/img/z17.png" alt="" style="object-fit: fill;">
                <span>Z3NITH'17 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/f2szmdziWZ4?">
                <img src="asset/img/z15.png" alt="" style="object-fit: fill;">
                <span>Z3NITH'15 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/mx8zwQOqASM?">
                <img src="asset/img/z13.png" alt="">
                <span>Z3NITH'13 | Trailer</span>
            </div>
            <div class="image" data-video="https://www.youtube.com/embed/2mvur73vxX4?">
                <img src="asset/img/z12.png" alt="" style="object-fit: fill;">
                <span>Z3NITH'12 | Trailer</span>
            </div>
        </div>
    </div>
    <script>
            document.addEventListener('DOMContentLoaded', (event) => {
            const images = document.querySelectorAll('.click .image');
            const videoPlayer = document.getElementById('videoPlayer');
            const emptyImage = document.querySelector('.empty-image');
            let activeImage = null;

            const changeVideo = (videoUrl) => {
                videoPlayer.src = videoUrl;
            };

            images.forEach(image => {
                image.addEventListener('click', () => {
                    const videoUrl = image.getAttribute('data-video');
                    changeVideo(videoUrl);
                    if (activeImage) {
                        activeImage.classList.remove('active');
                    }
                    image.classList.add('active');
                    activeImage = image;
                });
            });

            const handleMediaQueryChange = (e, queryType) => {
                if (e.matches) {
                    if (queryType === 'mid') {
                        emptyImage.style.display = 'block';
                        setupScroll('40%');
                    } else if (queryType === 'small') {
                        emptyImage.style.display = 'block';
                        setupScroll('60%');
                    }
                } else {
                    emptyImage.style.display = 'none';
                }
            };

            const setupScroll = (columnWidth) => {
                const clickContainer = document.querySelector('.click');
                clickContainer.style.gridAutoColumns = columnWidth;
            };

            const midScreenQuery = window.matchMedia('(max-width: 1310px) and (min-width: 587px)');
            const smallScreenQuery = window.matchMedia('(max-width: 586px)');

            handleMediaQueryChange(midScreenQuery, 'mid');
            handleMediaQueryChange(smallScreenQuery, 'small');

            midScreenQuery.addListener((e) => handleMediaQueryChange(e, 'mid'));
            smallScreenQuery.addListener((e) => handleMediaQueryChange(e, 'small'));
        });


    </script>
</body>
</html>
