    <div class="wrapper">
        <div class="outer">
            <div class="card" style="--delay:-1;">
                <div class="content">
                    <div class="img"><img src="#" alt=""></div>
                    <div class="details">
                        <span class="name">Sumit Kapoor</span>
                        <p>Frontend Developer</p>
                    </div>
                </div>
                <a href="#">Follow</a>
            </div>
            <div class="card" style="--delay:0;">
                <div class="content">
                    <div class="img"><img src="#" alt=""></div>
                    <div class="details">
                        <span class="name">Andrew Neil</span>
                        <p>YouTuber & Blogger</p>
                    </div>
                </div>
                <a href="#">Follow</a>
            </div>
            <div class="card" style="--delay:1;">
                <div class="content">
                    <div class="img"><img src="#" alt=""></div>
                    <div class="details">
                        <span class="name">Jasmine Carter</span>
                        <p>Freelancer & Vlogger</p>
                    </div>
                </div>
                <a href="#">Follow</a>
            </div>
            <div class="card" style="--delay:2;">
                <div class="content">
                    <div class="img"><img src="#" alt=""></div>
                    <div class="details">
                        <span class="name">Justin Chung</span>
                        <p>Backend Developer</p>
                    </div>
                </div>
                <a href="#">Follow</a>
            </div>
            <div class="card" style="--delay:2;">
                <div class="content">
                    <div class="img"><img src="#" alt=""></div>
                    <div class="details">
                        <span class="name">Adrina Calvo</span>
                        <p>Teacher & Advertiser</p>
                    </div>
                </div>
                <a href="#">Follow</a>
            </div>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper .outer {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper .card {
            background: #fff;
            width: 430px;
            display: flex;
            align-items: center;
            padding: 20px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            justify-content: space-between;
            border-radius: 100px 20px 20px 100px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            animation: animate 15s linear infinite;
            animation-delay: calc(3s * var(--delay));
        }

        .outer:hover .card {
            animation-play-state: paused;
        }

        .wrapper .card:last-child {
            animation-delay: calc(-3s * var(--delay));
        }

        @keyframes animate {
            0% {
                opacity: 0;
                transform: translateY(100%) scale(0.5);
            }

            5%,
            20% {
                opacity: 0.4;
                transform: translateY(100%) scale(0.7);
            }

            25%,
            40% {
                opacity: 1;
                pointer-events: auto;
                transform: translateY(0%) scale(1);
            }

            45%,
            60% {
                opacity: 0.4;
                transform: translateY(-100%) scale(0.7);
            }

            65%,
            100% {
                opacity: 0;
                transform: translateY(-100%) scale(0.5);
            }
        }

        .card .content {
            display: flex;
            align-items: center;
        }

        .wrapper .card .img {
            height: 90px;
            width: 90px;
            position: absolute;
            left: -5px;
            background: #fff;
            border-radius: 50%;
            padding: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .card .img img {
            height: 100%;
            width: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .card .details {
            margin-left: 80px;
        }

        .details span {
            font-weight: 600;
            font-size: 18px;
        }

        .card a {
            text-decoration: none;
            padding: 7px 18px;
            border-radius: 25px;
            color: #fff;
            background: linear-gradient(to bottom, #bea2e7 0%, #86b7e7 100%);
            transition: all 0.3s ease;
        }

        .card a:hover {
            transform: scale(0.94);
        }
    </style>
</body>

</html>