
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CONVERGENCE - 2025</title>
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <!-- Remix icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <!-- Swiper Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">
    <script src="https://kit.fontawesome.com/a371cf6c17.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- NAV -->
<nav id="main-nav">
        <div class="logo">
            <a href="./"><img src="logo.png" alt=""></a>
        </div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#speciality">Speciality</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#university">University</a></li>
            <li><a href="#sponsors">Sponsors</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="help.php">Help/Support</a></li>
                        <li class="hidden">
                                    <a href="login.php"><button>Register Now</button></a>
                            </li>
        </ul>
        <div class="nav_btns not-hidden">
            <!-- <i class="ri-search-line"></i> -->
                            <a href="login.php"><button>Register Now</button></a>
                                </div>
        <div class="bars"><i class="ri-menu-2-line"></i></div>
    </nav>


    <!-- HERO -->
    <header id="Header" style="justify-content: center;" class="home-header">
        <div class="hero_content">
            <h1>2025
                <br>CONVERGENCE<br>
                <h2 style = "margin-top: 20px; margin-bottom: 20px; font-family: Conthrax-bold; text-indent: 0.2em">National Level Technical Symposium</h2>
                <h3 style = "font-family: Conthrax-bold; text-indent: 0.2em"> 15-16 September, 2025</h3>
            </h1>
            <br>
            <h3><span id="text"></span></h3>
            <br>
            <div class="button-container">
                <a href="#about"><button>About the Event</button></a>
                <a href="https://youtu.be/OsoXEo1wpYI?si=J91jPzATM__CrkP-" target="_blank" class="play-btn"></a>
            </div>
            <!-- Timer Section -->
            <div id="countdown-timer" class="countdown-timer">
                <div class="time-box">
                    <span id="days">00</span> <span>Days</span>
                </div>
                <div class="time-box">
                    <span id="hours">00</span> <span>Hours</span>
                </div>
                <div class="time-box">
                    <span id="minutes">00</span> <span>Minutes</span>
                </div>
                <div class="time-box">
                    <span id="seconds">00</span> <span>Seconds</span>
                </div>
            </div>

            <!-- Event Started Message -->
            <div id="event-started" class="event-started" style="display: none;">
                Event Started!
            </div>

        </div>
        <div class="hero_img">
            <img src="hero.png" alt="">
            <div class="img_box">
                <img src="about-02.png" alt="">
                <div class="box_info">
                    <h5>Convergence25</h5>
                    <h2>GUNI - UVPCE</h2>
                </div>
            </div>
            <div class="img_box img_box2">
                <img src="about-05.png" alt="">
                <div class="box_info">
                    <h2>GUNI - UVPCE</h2>
                    <h5>@convergence2025</h5>
                </div>
            </div>
        </div>
        <div class="hero_shape"></div>
    </header>

    <!-- ABOUT -->
    <section id="about" class="about">
        <div class="bg_shape"></div>
        <img src="about-02.png" alt="" class="about_img_shape about_img_shape1">
        <img src="about-03.png" alt="" class="about_img_shape about_img_shape2">
        <img src="about-04.png" alt="" class="about_img_shape about_img_shape3">
        <img src="about-05.png" alt="" class="about_img_shape about_img_shape4">
        <div class="about_imgs">
            <img src="convo_poster.heic" alt="">
            <a href="imgs/convo_video.mp4" target="_blank" class="play-btn"></a>
        </div>
        <div class="about_content">
            <div class="Headings">
                <h2>About Us</h2>
                <h1>CONVERGENCE</h1>
            </div>
            <p>Convergence 2025 is a grand National-Level platform celebrating the synergy of nine pivotal tech domains:
                MechMechato, Infocrats, CIVESTA, Petrox, Biotechnia, Electrabuzz, MARITECH, and HUMANICA. These pillars
                of Science and Technology, spanning disciplines such as Mechatronics, Mechanical, IT, Computer, Civil,
                Electrical Engineering, provide a stage for tech enthusiasts to showcase and refine their expertise.</p>
            <p>Under the theme “AI and Ethics, ” Convergence 2025 intertwines innovation with responsibility. As one of
                the year’s most anticipated events, it ignites the campus with boundless energy, fostering youthful
                exuberance and a vibrant celebration of technological ingenuity.</p>
            <button class="about_btn" style="width: 500px;" onclick="window.open('https://uvpce.guni.ac.in/', '_blank')">GANPAT UNIVERSITY</button>
        </div>
    </section>

    <!-- SPECIALITY -->
    <section id="speciality" class="speciality">
        <div class="bg_shape"></div>
        <div class="Headings">
            <h2>Our Speciality</h2>
            <!-- <h1>Complete Solutions for Your NFT</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta incidunt exercitationem natus quae!
                Dolorum amet illum perspiciatis omnis.</p> -->
        </div>
        <div class="speciality_cards">
            <!-- card 1 -->
            <div class="speciality_card">
                <img src="icon-1.svg" alt="">
                <div class="speciality_card_info">
                    <h2>OBJECTIVE</h2>
                    <p>To give new aspiring students and developers, an opportunity to achieve excellence and fight it
                        out in newer, smarter and more challenging technical problem statements. </p>
                    <h1>01</h1>
                </div>
            </div>
            <!-- card 2 -->
            <div class="speciality_card">
                <img src="icon-2.svg" alt="">
                <div class="speciality_card_info">
                    <h2>ELIGIBILITY</h2>
                    <p>Students pursuing any Bachelor Degree, Master Degree, any certificate course or diploma is
                        eligible to apply. (e.g. B.Tech , M.Tech , Diploma Courses , BBA , MBA ,BCA , MCA ,B.Sc , M.Sc
                        ,Bcs BCom. , etc.) </p>
                    <h1>02</h1>
                </div>
            </div>
            <!-- card 3 -->
            <div class="speciality_card">
                <img src="icon-3.svg" alt="">
                <div class="speciality_card_info">
                    <h2>PRIZES</h2>
                    <p>Prizes worth Rs 3,00,000+ to be distributed among the winners along with certificates, trophies
                        and refreshments for the participants. Take Participate and win exciting prizes!!!</p>
                    <h1>03</h1>
                </div>
            </div>
            <!-- card 4 -->
            <!-- <div class="speciality_card">
                <img src="Images/icon-4.svg" alt="">
                <div class="speciality_card_info">
                    <h2>Big Community</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <h1>04</h1>
                </div>
            </div> -->
        </div>
    </section>

    <!-- JOIN NFT PORTFOLIO -->
    <section class="portfolio">
        <div class="portfolio_imgs">
            <img src="p1.png" alt="">
            <img src="p2.png" alt="">
            <img src="p3.png" alt="">
        </div>
        <div class="bg_shape"></div>
        <div class="Headings">
            <h2>Join Convergence 2025</h2>
            <h1 style="font-size: 3rem;">Navigating <br> AI Ethics</h1>
        </div>
        <div class="portfolio_container">
            <div class="portfolio_boxses">
                <!-- box 1 -->
                <div class="portfolio_box">
                    <!-- <span>Step 1</span> -->
                    <div class="portfolio_box_img">
                        <img src="portfolio-1.svg" alt="">
                    </div>
                    <div class="portfolio_box_info">
                        <h2>10</h2>
                        <p>MEGA EVENTS</p>
                    </div>
                </div>
                <!-- box 2 -->
                <div class="portfolio_box">
                    <!-- <span>Step 2</span> -->
                    <div class="portfolio_box_img">
                        <img src="portfolio-2.svg" alt="">
                    </div>
                    <div class="portfolio_box_info">
                        <h2>40+</h2>
                        <p>SUB EVENTS</p>
                    </div>
                </div>
                <!-- box 3 -->
                <div class="portfolio_box">
                    <!-- <span>Step 3</span> -->
                    <div class="portfolio_box_img">
                        <img src="portfolio-3.svg" alt="">
                    </div>
                    <div class="portfolio_box_info">
                        <h2>300,000+</h2>
                        <p>CASH PRIZES</p>
                    </div>
                </div>
                <!-- box 4 -->
                <!-- <div class="portfolio_box">
                    <span>Step 4</span>
                    <div class="portfolio_box_img">
                        <img src="Images/portfolio-4.svg" alt="">
                    </div>
                    <div class="portfolio_box_info">
                        <h2>Sell Your NFT</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aut corrupti quos neque
                            odio a explicabo architecto perferendis, sit dignissimos! Explicabo, nostrum esse.</p>
                    </div>
                </div> -->
            </div>
            <div class="portfolio_img">
                <img src="protfolio.png" alt="">
            </div>
        </div>
    </section>

    <!-- OUR MEGA_EVENT COLLECTION -->
    <section id="events" class="collection">

        <div class="Headings">
            <h2>Our MEGA EVENTS</h2>
            <h1>MEGA EVENTS DEPARTMENTS</h1>
        </div>
        <div class="swiper collectionSwiper">
            <div class="swiper-wrapper" style="display: flex; justify-content: space-evenly;">
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=Infocrats">
                                        <img src="6895d7b65bef9_Infocrats.png" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=Biotechnica">
                                        <img src="biotechnica.jpg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=CIVESTA">
                                        <img src="688a537d10fb9_civesta.jpeg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=ElectaBuzz">
                                        <img src="electabuzz.jpg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=Humanica">
                                        <img src="688a53b14a49f_humanica.jpeg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=MariTech">
                                        <img src="688a53c35168d_maritech.jpg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=Mech_Mechato">
                                        <img src="688a53cc80e2d_mech_mechato.png" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=Petrox">
                                        <img src="688a53d4a721a_petrox.jpeg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=ElectroSpark">
                                        <img src="689cd94f90401_EC__DEPPP.png" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=BioVation">
                                        <img src="biovation.jpg" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="collection_box">
                                <div class="collection_box_img">
                                    <a href="events.php?department=TechRanga">
                                        <img src="68a4946a7bbef_Dep.png" alt="Department">
                                    </a>
                                </div>
                            </div>
                        </div>
                            </div>
                                </div>
    </section>


    <!-- ROAD MAP & TEAM -->
    <section id="university" class="roadmap_Teams">
        <div class="bg_shape"></div>
        <div class="road_map">
            <div class="Headings">
                <h2>Vision & Mission</h2>
                <h1 style="font-size: 2.5rem;">GANPAT UNIVERSITY</h1>
            </div>
            <div class="road_map_container">
                <!-- boxses 1 -->
                <div class="road_map_boxses">
                    <!-- box 1 -->
                    <div class="road_map_box">
                        <!-- <span>GANPAT UNIVERSITY</span> -->
                        <h2>VISION</h2>
                        <p>The vision of Convergence 2025 is to create a transformative platform that unites diverse
                            fields of science and technology, fostering innovation, collaboration, and ethical
                            responsibility. By embracing the theme “AI and Ethics, ” the event aims to inspire tech
                            enthusiasts to explore the intersection of cuttingedge advancements and moral principles,
                            ensuring sustainable progress. Convergence 2025 aspires to cultivate a vibrant ecosystem
                            where creativity, youthful energy, and intellectual rigor drive impactful solutions, shaping
                            a better future for society and technology.</p>
                    </div>
                </div>
                <!-- boxses 2 -->
                <div class="road_map_boxses">
                    <!-- box 1 -->
                    <div class="road_map_box road_map_box2">
                        <!-- <span>GANPAT UNIVERSITY</span> -->
                        <h2>MISSION</h2>
                        <p>The mission of Convergence 2025 is to unite innovators across diverse tech domains, fostering
                            collaboration and knowledge exchange. With the theme “AI and Ethics, ” it promotes
                            responsible innovation, inspiring participants to tackle real-world challenges ethically.
                            Through dynamic events, it empowers future leaders to drive impactful, sustainable, and
                            interdisciplinary advancements.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="guni_img">
            <img src="guni_logo_main.png" alt="Ganpat University Logo">
        </div>
        <div>
            <h2 style="font-family: 'Conthrax-bold'">Hosted By</h2>
        </div>
        <!-- <marquee behavior="alternate" direction="" class="choose_marquee"> -->
        <div class="marquee_text">
            <img src="brand-01.png" alt="Hosted by logos" class="hosted_logo">
        </div>
        <!-- </marquee> -->
    <!-- FACULTY MEMBERS -->
        <div class="team">
            <div class="Headings">
                <h2>Faculty Coordinators</h2>
                <h1 style="font-size: 3rem;">Our<br /> Faculty Members</h1>
            </div>
            <div class="swiper teamSwiper facultySwiper">
                <div class="swiper-wrapper">
                    <!-- slide 1 -->
                    <div class="swiper-slide">
                        <div class="team_box">
                            <div class="team_img_box">
                                <div class="team_img">
                                    <img src="faculty-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="team_content">
                                <h2>Prof. Himanshu Patel</h2>
                                <p style="font-size: 1.2rem; padding-top: 10px;"><i class="ri-phone-fill"></i> &nbsp;
                                    +91 94263 46481</p>
                                <p>Central faculty Co-ordinator</p>
                                <!--<div class="team_social">-->
                                <!--<i class="ri-instagram-fill"></i>-->
                                <!--    <i class="ri-linkedin-fill"></i>-->
                                <!--    <i class="ri-github-fill"></i>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <!-- slide 2 -->
                    <div class="swiper-slide">
                        <div class="team_box">
                            <div class="team_img_box">
                                <div class="team_img">
                                    <img src="faculty-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="team_content">
                                <h2>Prof. Chirag Gami</h2>
                                <p style="font-size: 1.2rem; padding-top: 10px;"><i class="ri-phone-fill"></i> &nbsp;
                                    +91 98243 35549</p>
                                <p>Central faculty Co-ordinator</p>
                                <!--<div class="team_social">-->
                                <!--<i class="ri-instagram-fill"></i>-->
                                <!--    <i class="ri-linkedin-fill"></i>-->
                                <!--    <i class="ri-github-fill"></i>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <!-- slide 3 -->
                    <div class="swiper-slide">
                        <div class="team_box">
                            <div class="team_img_box">
                                <div class="team_img">
                                    <img src="faculty-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="team_content">
                                <h2>Prof. Manan Thakkar</h2>
                                <p style="font-size: 1.2rem; padding-top: 10px;"><i class="ri-phone-fill"></i> &nbsp;
                                    +91 70161 65873</p>
                                <p>Central faculty Co-ordinator</p>
                                <!--<div class="team_social">-->
                                <!--<i class="ri-instagram-fill"></i>-->
                                <!--    <i class="ri-linkedin-fill"></i>-->
                                <!--    <i class="ri-github-fill"></i>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <!-- slide 4 -->
                    <div class="swiper-slide">
                        <div class="team_box">
                            <div class="team_img_box">
                                <div class="team_img">
                                    <img src="faculty-04.jpg" alt="">
                                </div>
                            </div>
                            <div class="team_content">
                                <h2>Prof. Yogeshkumar Prajapati</h2>
                                <p style="font-size: 1.2rem; padding-top: 10px;"><i class="ri-phone-fill"></i> &nbsp;
                                    +91 79840 11603</p>
                                <p>Central faculty Co-ordinator</p>
                                <!--<div class="team_social">-->
                                <!--<i class="ri-instagram-fill"></i>-->
                                <!--    <i class="ri-linkedin-fill"></i>-->
                                <!--    <i class="ri-github-fill"></i>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPONSORS -->
<section id="sponsors" class="sponsors">
    <div class="bg_shape"></div>
    <div class="Headings">
        <h2>Sponsors</h2>
        <h1 style="font-size: 3rem;">Our Sponsors</h1>
    </div>

    <!-- Platinum Sponsors -->
    <h2 class="sponsor-label">Our Sponsors with Association</h2>
    <div class="sponsors_wrap">
        <div class="sponsor_img">
            <img src="UVAA.jpg" alt="">
        </div>
        <div class="sponsor_img">
            <img src="SSIP_Logo.png" alt="">
        </div>
        <div class="sponsor_img">
            <img src="IEEE.png" alt="">
        </div>
        <!--<div class="sponsor_img">-->
        <!--    <img src="imgs/s4.png" alt="">-->
        <!--</div>-->
    </div>

    <!-- Our Sponsors -->
    <h2 class="sponsor-label">Our Sponsors</h2>
    <div class="sponsors_wrap">
        <div class="sponsor_img">
            <img src="digiwagon_Sponsors.png" alt="" onclick = "window.location.href = 'https://digiwagon.com/'">
        </div>
        <!--<div class="sponsor_img">-->
        <!--    <img src="imgs/s6.png" alt="">-->
        <!--</div>-->
        <!--<div class="sponsor_img">-->
        <!--    <img src="imgs/s7.png" alt="">-->
        <!--</div>-->
        <!--<div class="sponsor_img">-->
        <!--    <img src="imgs/s8.jpeg" alt="">-->
        <!--</div>-->
    </div>

    <!-- Silver Sponsors -->
    <!--<h2 class="sponsor-label">Silver Sponsors</h2>-->
    <!--<div class="sponsors_wrap">-->
    <!--    <div class="sponsor_img">-->
    <!--        <img src="imgs/s9.png" alt="">-->
    <!--    </div>-->
    <!--    <div class="sponsor_img">-->
    <!--        <img src="imgs/s10.jpeg" alt="">-->
    <!--    </div>-->
    <!--    <div class="sponsor_img">-->
    <!--        <img src="imgs/s11.png" alt="">-->
    <!--    </div>-->
    <!--    <div class="sponsor_img">-->
    <!--        <img src="imgs/s12.jpeg" alt="">-->
    <!--    </div>-->
    <!--</div>-->

    <div class="bg_shape bg_shape2"></div>
</section>


    <!-- FOOTER -->
    <footer>
        <div class="footer_grid">
            <div class="footer_col">
                <div class="footer_logo">
                    <div class="logo">
                        <a href="#"><img src="logo.png" alt=""></a>
                    </div>
                </div>
                <p>CONVERGENCE 2025 <br><span>WHEN IMAGINATION <br> MEETS INNOVATION</span></p>
                <div class="social_media_icon">
                    <i class="fa-brands fa-facebook-f" onclick="window.open('https://www.facebook.com/guni.uvpce/', '_blank')"></i>
                    <i class="fa-brands fa-instagram" onclick="window.open('https://www.instagram.com/convergence.uvpce?igsh=cTd6dTlhaGE4OGhq', '_blank')"></i>
                    <i class="fa-brands fa-linkedin-in" onclick="window.open('https://in.linkedin.com/company/guni-uvpce', '_blank')"></i>
                    <i class="ri-youtube-fill"></i>
                </div>
            </div>
            <div class="footer_col">
                <h2>Explore</h2>
                <div class="footer_col_links">
                    <a href="https://www.ganpatuniversity.ac.in/"><i class="ri-arrow-drop-right-line"></i> &nbsp; Ganpat University</a>
                    <a href="https://uvpce.guni.ac.in/"><i class="ri-arrow-drop-right-line"></i> &nbsp; U.V. Patel College of Engineering</a>
                    <a href="https://convergence.uvpce.ac.in/"><i class="ri-arrow-drop-right-line"></i> &nbsp; Convergence 2025</a>
                </div>
            </div>
            <div class="footer_col">
                <h2>Contact Info</h2>
                <div class="footer_box">
                    <i class="ri-map-pin-line"></i>
                    <div class="footer_box_text">
                        <h3>Our Location: </h3>
                        <p>Ganpat Vidyanagar , Mehsana-Gozaria Highway, Kherva, Mahesana - Gujarat 384012</p>
                    </div>
                </div>
                <div class="footer_box">
                    <i style="margin-top: -10%;" class="ri-phone-line"></i>
                    <div class="footer_box_text" style="margin-top: -10%;">
                        <h3>Phone: </h3>
                        <p>+91 63524 60502</p>
                        <p>+91 93275 16682</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p>Copyright &copy; 2025 Convergence. All Rights Reserved.</p>
        </div>
    </footer>
    <div class="footer_created_by">
        <p>Created by @ <a href="#"><span>Bhavik</span> | <span>Divya</span> | <span>Parth</span> | <span>Vraj</span> | <span>Krish</span> | <span>Prince</span></a></p>
    </div>

    <!-- BACK TO TOP BUTTON -->
    <a href="#" class="back-to-top" id="back-to-top"><i>&#9650;</i></a>


    <!-- CUSTOME CURSOR  -->
    <div class="cursor" data-cursor></div>

    <!-- Swiper Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <!-- Typed JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <!-- <script src="script.js"></script> -->
    <script src="script.js"></script></body>

</html>