@extends('layouts.app')

@section('content')

<section class="focus" id="focus">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Our Focus</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                We design &amp; develop qaulity products to help small &amp; medium level business.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->
        <!-- 4 FOCUS BOXES -->
        <div class="row">

            <!-- FIRST FOCUS BOXES -->
            <div class="col-lg-3 col-sm-3 focus-box red wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <div class="service-icon">
                    <i class="pixeden pd-icon-monitor"></i> <!-- FOCUS ICON-->
                </div>
                <h5 class="red-border-bottom">Web Design</h5> <!-- FOCUS HEADING -->
                <p> <!-- FOCUS DESCRIPTION -->
                    Created cattle form fruit. Saying from given together face without waters, whose. Second first. Face it saw give creature was thing. Over upon is brought. Him you'll above kind set
                </p>
            </div>
            <!-- / END FIRST FOCUS BOX. Other boxes has same format -->

            <div class="col-lg-3 col-sm-3 focus-box green wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <div class="service-icon">
                    <span class="pixeden pd-icon-camera"></span>
                </div>
                <h5 class="green-border-bottom">Photography</h5>
                <p>
                    Created cattle form fruit. Saying from given together face without waters, whose. Second first. Face it saw give creature was thing. Over upon is brought. Him you'll above kind set
                </p>
            </div>

            <div class="col-lg-3 col-sm-3 focus-box blue wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <div class="service-icon">
                    <i class="pixeden pd-icon-email-marketing"></i>
                </div>
                <h5 class="blue-border-bottom">Email Marketing</h5>
                <p>
                    Created cattle form fruit. Saying from given together face without waters, whose. Second first. Face it saw give creature was thing. Over upon is brought. Him you'll above kind set
                </p>
            </div>

            <div class="col-lg-3 col-sm-3 focus-box yellow wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <div class="service-icon">
                    <i class="pixeden pd-icon-check"></i>
                </div>
                <h5 class="yellow-border-bottom">SEO &amp; SMM</h5>
                <p>
                    Created cattle form fruit. Saying from given together face without waters, whose. Second first. Face it saw give creature was thing. Over upon is brought. Him you'll above kind set
                </p>
            </div>
        </div>
        <!-- / END 4 FOCUS BOXES -->

        <!-- OTHER FOCUSES -->
        <div class="other-focuses">
            <h5><span class="section-footer-title">ALSO WE FOCUS ON</span></h5>
        </div>

        <!-- OTHER FOCUS LIST -->
        <div class="other-focus-list wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <ul>
                <li><i class="icon-fontawesome-webfont-8"></i>WEB APPLICATIONS</li>
                <li><i class="icon-fontawesome-webfont-267"></i>SEARCH ENGINE OPTIMIZATION</li>
                <li><i class="icon-fontawesome-webfont-75"></i>CLOUD STORAGE</li>
                <li><i class="icon-fontawesome-webfont-358"></i>Project Management</li>
                <li><i class="icon-fontawesome-webfont-102"></i>IOS APP</li>
                <li><i class="icon-fontawesome-webfont-328"></i>ANDROID APP</li>
                <li><i class="icon-fontawesome-webfont-195"></i>WINDOWS APP</li>
                <li><i class="icon-fontawesome-webfont-297"></i>UX STRATEGY</li>
            </ul>
        </div> <!-- / END OTHER FOCUS LIST -->
    </div> <!-- / END CONTAINER -->
</section>  <!-- / END FOCUS SECTION -->

<!-- =========================
   SEPARATOR ONE
============================== -->

<section class="separator-one">
    <div class="color-overlay">
        <h3 class="container text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            We have 100+ happy customers in last few years. You can check what they're saying about us. </h3>
        <div class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <a href="v1.3.1.html" class="btn btn-primary custom-button green-btn">TESTIMONIALS</a>
        </div>
    </div>
</section>  <!-- / END SEPARATOR -->


<!-- =========================
   WORKS SECTION
============================== -->

<section class="works" id="works">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Portfolio</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                We have designed and developed many awesome products. Just take a look.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->
        <div class="row projects">
            <div id="loader">
                <div class="loader-icon"></div>
            </div>
            <div class="col-md-12" id="portfolio-list">
                <!-- PORTFOLIO ITEMS-->
                <ul class="cbp-rfgrid">

                    <!-- PROJECT -->
                    <li class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <a href="project.html" class="more"><img src="images/portfolio/1.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInDown animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <a href="project.html" class="more"><img src="images/portfolio/2.jpg" alt="project" />
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInDown animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <a href="project.html" class="more"><img src="images/portfolio/3.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <a href="project.html" class="more"><img src="images/portfolio/4.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.8s" data-wow-delay="0.15s">
                        <a href="project.html" class="more"><img src="images/portfolio/5.jpg" alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li>
                        <a href="project.html" class="more"><img src="images/portfolio/6.jpg" alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li>
                        <a href="project.html" class="more"><img src="images/portfolio/7.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.8s" data-wow-delay="0.15s">
                        <a href="project.html" class="more"><img src="images/portfolio/8.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a href="project.html" class="more"><img src="images/portfolio/9.jpg" alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a href="project.html" class="more"><img src="images/portfolio/10.jpg" alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a href="project.html" class="more"><img src="images/portfolio/11.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- PROJECT -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a href="project.html" class="more"><img src="images/portfolio/12.jpg"  alt="project"/>
                            <div class="project-info">
                                <div class="project-details">
                                    <h5 class="white-text red-border-bottom">
                                        Project Title </h5>
                                    <div class="details white-text">
                                        Web Design
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- / PROJECT -->

                    <!-- ... -->
                </ul>
            </div>
            <!-- END OF PORTFOLIO ITEMS-->
        </div>

        <!-- PROJECT DETAILS WILL BE LOADED HERE -->
        <div id="loaded-content"></div>

        <a id="back-button" class="red-btn" href="v1.3.1.html#"><i class="icon-fontawesome-webfont-27"></i> Go Back</a>

    </div> <!-- / END CONTAINER -->
</section> <!-- / END WORKS SECTION -->


<!-- =========================
   ABOUT US SECTION
============================== -->

<section class="about-us" id="aboutus">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">About US</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                We design &amp; develop qaulity products to help small &amp; medium level business.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- 3 COLUMNS OF ABOUT US-->
        <div class="row">

            <!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->
            <div class="col-lg-4 col-md-4 column">
                <div class="big-intro wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    Developing Amazing Things with Passion since 2002.
                </div>
            </div>

            <!-- COLUMN 2 - BRIEF ABOUT THE COMPANY-->
            <div class="col-lg-4 col-md-4 column">
                <p class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    Created forth two. Behold appear first, kind all i saying fowl man itself moved which every open shall moved subdue appear. Saying life wherein stars. Give dry, own, male had that us third lesser over deep. May every bring in it Whose. Female earth heaven won't behold female.<br/><br/>
                    Moved bearing give a two after. Had. Seas. Man they're. Grass above kind saying thing for that void sixth fly His after it.<br/><br/>
                    The set doesn't moved. Deep don't fruit fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it Whose. Female earth heaven won't behold female.
                </p>
            </div>

            <!-- COLUMN 1 - SKILSS-->
            <div class="col-lg-4 col-md-4 column">
                <ul class="skills wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                    <!-- SKILL ONE -->
                    <li class="skill">
                        <div class="skill-count">
                            <input type="text" value="86" data-thickness=".2" class="skill1">
                        </div>
                        <h6>Web Design</h6>
                        <p>
                            We are expert on HTML development. Clean, semantic and valid HTML codes.
                        </p>
                    </li>

                    <!-- SKILL TWO -->
                    <li class="skill">
                        <div class="skill-count">
                            <input type="text" value="80" data-thickness=".2" class="skill2">
                        </div>
                        <h6>development</h6>
                        <p>
                            We are expert on HTML development. Clean, semantic and valid HTML codes.
                        </p>
                    </li>

                    <!-- SKILL THREE -->
                    <li class="skill">
                        <div class="skill-count">
                            <input type="text" value="89" data-thickness=".2" class="skill3">
                        </div>
                        <h6>photography</h6>
                        <p>
                            We are expert on HTML development. Clean, semantic and valid HTML codes.
                        </p>
                    </li>

                    <!-- SKILL FOUR -->
                    <li class="skill">
                        <div class="skill-count">
                            <input type="text" value="95" data-thickness=".2" class="skill4">
                        </div>
                        <h6>SEO</h6>
                        <p>
                            We are expert on HTML development. Clean, semantic and valid HTML codes.
                        </p>
                    </li>

                </ul>
            </div> <!-- / END SKILLS COLUMN-->
        </div> <!-- / END 3 COLUMNS OF ABOUT US-->

        <!-- CLIENTS -->
        <div class="our-clients">
            <h5><span class="section-footer-title">OUR HAPPY CLIENTS</span></h5>
        </div>
        <!-- CLIENT LIST -->
        <div class="client-list">
            <ul class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <li><a href="v1.3.1.html#"><img src="images/clients/1.png" alt="Client 1"></a></li>
                <li><a href="v1.3.1.html#"><img src="images/clients/2.png" alt="Client 2"></a></li>
                <li><a href="v1.3.1.html#"><img src="images/clients/3.png" alt="Client 3"></a></li>
                <li><a href="v1.3.1.html#"><img src="images/clients/1.png" alt="Client 1"></a></li>
                <li><a href="v1.3.1.html#"><img src="images/clients/4.png" alt="Client 4"></a></li>
                <li><a href="v1.3.1.html#"><img src="images/clients/5.png" alt="Client 5"></a></li>
                <li><a href="v1.3.1.html#"><img src="images/clients/6.png" alt="Client 6"></a></li>
            </ul>
        </div> <!-- / END CLIENT LIST -->
    </div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->

<!-- =========================
   STATS
============================== -->

<section class="stats">
    <div class="container">
        <!-- STATS -->
        <div class="row">

            <!-- START COLUMN -->
            <div class="col-lg-3 col-sm-3">
                <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="icon-top red-text">
                        <i class="icon-design-graphic-tablet-streamline-tablet"></i>
                    </div>
                    <div class="stat-text">
                        <h3 class="white-text red-border-bottom">1,236</h3>
                        <h6>Projects Completed</h6>
                    </div>
                </div>
            </div> <!-- / END COLUMN -->

            <!-- START COLUMN -->
            <div class="col-lg-3 col-sm-3">
                <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.75s" data-wow-delay="0.30s">
                    <div class="icon-top green-text">
                        <i class="icon-man-people-streamline-user"></i>
                    </div>
                    <div class="stat-text">
                        <h3 class="white-text green-border-bottom">196</h3>
                        <h6>Happy Clients</h6>
                    </div>
                </div>
            </div> <!-- / END COLUMN -->

            <!-- START COLUMN -->
            <div class="col-lg-3 col-sm-3">
                <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.45s">
                    <div class="icon-top blue-text">
                        <i class="icon-email-mail-streamline"></i>
                    </div>
                    <div class="stat-text">
                        <h3 class="white-text blue-border-bottom">56,236</h3>
                        <h6>Mail Conversation</h6>
                    </div>
                </div>
            </div> <!-- / END COLUMN -->

            <!-- START COLUMN -->
            <div class="col-lg-3 col-sm-3">
                <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="2.25s" data-wow-delay="1s">
                    <div class="icon-top yellow-text">
                        <i class="icon-picture-streamline-1"></i>
                    </div>
                    <div class="stat-text">
                        <h3 class="white-text yellow-border-bottom">2,519</h3>
                        <h6>Photos Taken</h6>
                    </div>
                </div>
            </div> <!-- / END COLUMN -->
        </div>
    </div>
</section>  <!-- / END STATS -->

<!-- =========================
   OUR TEAM SECTION
============================== -->

<section class="our-team" id="team">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Our Team</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                Check our awesome team memebers who always work hard to provide quality products.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- TEAM MEMBERS -->
        <div class="row wow fadeInRight animated" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">
            <!-- MEMBER -->
            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic1.jpg" alt=""> <!-- MEMBER PROFILE PIC -->
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red-border-bottom">Jason Daniels</h5>
                        <div class="position">
                            Founder
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>
            <!-- / END MEMBER -->

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic2.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text green-border-bottom">Patricia Medina</h5>
                        <div class="position">
                            Senior Desigener
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic3.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text blue-border-bottom">Eugene Lane</h5>
                        <div class="position">
                            Lead Developer
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic4.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow-border-bottom">Kathy Hudson</h5>
                        <div class="position">
                            Art Director
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic5.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red-border-bottom">Vincent Mccoy</h5>
                        <div class="position">
                            Project Manager
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic6.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text green-border-bottom">Gary Morrison</h5>
                        <div class="position">
                            Photographer
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic7.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text blue-border-bottom">Patrick Sanchez</h5>
                        <div class="position">
                            Business Development
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="images/team/pic8.jpg" alt="">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow-border-bottom">Rachel Rogers</h5>
                        <div class="position">
                            Account Manager
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="v1.3.1.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-behance"></i></a></li>
                            <li><a href="v1.3.1.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae quo aut error corrupti officiis dolore accusantium rem rerum illum nulla sed quisquam.
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- / END TEAM MEMBER LIST -->

    </div> <!-- / END CONTAINER -->
</section> <!-- / END OUR TEAM SECTION -->

<!-- =========================
   PACKAGES SECTION
============================== -->

<section class="packages" id="pricingtable">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Packages</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                We have 4 friendly packages for you. Check all the packages and choose the right one for you.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- PACKAGES -->
        <div class="row">

            <!-- FIRST PACKAGE -->
            <div class="col-lg-3 col-sm-3">
                <div class="package wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="package-header green-bg">
                        <h5>Basic</h5>
                    </div>
                    <div class="price dark-bg">
                        <div class="price-container">
                            <h4><span class="dollar-sign">$</span>15</h4><span class="price-meta">
					    / mo
					</span>
                        </div>
                    </div>
                    <ul>
                        <li><i class="icon-check"></i>100GB Storage</li>
                        <li><i class="icon-check"></i>All Themes</li>
                        <li><i class="icon-cancel"></i>Access to Tutorials</li>
                        <li><i class="icon-cancel"></i>Auto Backup</li>
                        <li><i class="icon-cancel"></i>Extended Security</li>
                    </ul>
                    <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">
                        Sign Up </a>
                </div>
            </div> <!-- / END FIRST PACKAGE -->

            <div class="col-lg-3 col-sm-3">
                <div class="package wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="package-header blue-bg">
                        <h5>Standard</h5>
                    </div>
                    <div class="price dark-bg">
                        <div class="price-container">
                            <h4><span class="dollar-sign">$</span>21 </h4>
                            <span class="price-meta">/ Mo</span>
                        </div>
                    </div>
                    <ul>
                        <li><i class="icon-check"></i>100GB Storage</li>
                        <li><i class="icon-check"></i>All Themes</li>
                        <li><i class="icon-cancel"></i>Access to Tutorials</li>
                        <li><i class="icon-cancel"></i>Auto Backup</li>
                        <li><i class="icon-cancel"></i>Extended Security</li>
                    </ul>
                    <a href="v1.3.1.html#" class="btn btn-primary custom-button blue-btn">
                        Sign Up </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="best-value">
                    <div class="package wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="package-header red-bg">
                            <h4>Premium</h4>
                            <div class="meta-text">
                                Best Value
                            </div>
                        </div>
                        <div class="price dark-bg">
                            <h4><span class="dollar-sign">$</span>53</h4>
                            <span class="price-meta">/ mo</span>
                        </div>
                        <ul>
                            <li><i class="icon-check"></i>100GB Storage</li>
                            <li><i class="icon-check"></i>All Themes</li>
                            <li><i class="icon-cancel"></i>Access to Tutorials</li>
                            <li><i class="icon-cancel"></i>Auto Backup</li>
                            <li><i class="icon-cancel"></i>Extended Security</li>
                        </ul>
                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">
                            Sign Up </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="package wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="package-header yellow-bg">
                        <h5>Ultimate</h5>
                    </div>
                    <div class="price dark-bg">
                        <h4><span class="dollar-sign">$</span>99 </h4>
                        <span class="price-meta">/ mo</span>
                    </div>
                    <ul>
                        <li><i class="icon-check"></i>100GB Storage</li>
                        <li><i class="icon-check"></i>All Themes</li>
                        <li><i class="icon-cancel"></i>Access to Tutorials</li>
                        <li><i class="icon-cancel"></i>Auto Backup</li>
                        <li><i class="icon-cancel"></i>Extended Security</li>
                    </ul>
                    <a href="v1.3.1.html#" class="btn btn-primary custom-button yellow-btn">
                        Sign Up </a>
                </div>
            </div>
        </div> <!-- / END PACKAGES -->

    </div> <!--END CONTAINER  -->
</section> <!-- END PACKAGES SECTION -->

<!-- =========================
   FEATURES SECTION
============================== -->
<section class="features" id="features">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Features</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                We design &amp; develop qaulity products to help small &amp; medium level business.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- FEATURS -->
        <div class="row">

            <!-- FEATURES COLUMN LEFT -->
            <div class="col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                <!-- FEATURE -->
                <div class="feature">
                    <div class="feature-icon">
                        <i class="icon-heart-1"></i>
                    </div>
                    <h5>Design with Love</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- / END FEATURE -->

                <!-- FEATURE -->
                <div class="feature">
                    <div class="feature-icon">
                        <i class="icon-bulb"></i>
                    </div>
                    <h5>Creative Features</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- / END FEATURE -->

                <!-- FEATURE -->
                <div class="feature">
                    <div class="feature-icon">
                        <i class="icon-settings-1"></i>
                    </div>
                    <h5>Thousands of Options</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- / END FEATURE -->
            </div> <!-- / FEATURES COLUMN LEFT -->

            <!-- FEATURES COLUMN RIGHT -->
            <div class="col-md-6 col-sm-6 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <!-- FEATURE -->
                <div class="feature">
                    <div class="feature-icon">
                        <i class="icon-params"></i>
                    </div>
                    <h5>Easy to Customize</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- / END FEATURE -->

                <!-- FEATURE -->
                <div class="feature">
                    <div class="feature-icon">
                        <i class="icon-handle-streamline-vector"></i>
                    </div>
                    <h5>Clean Strategy</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- / END FEATURE -->

                <!-- FEATURE -->
                <div class="feature">
                    <div class="feature-icon">
                        <i class="icon-speech-streamline-talk-user"></i>
                    </div>
                    <h5>Awesome Support</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- / END FEATURE -->

            </div> <!-- / END FEATURES COLUMN RIGHT -->
        </div> <!-- / END FEATURES -->
    </div> <!-- / END CONTAINER -->
</section> <!-- / END FEATURES SECTION -->

<!-- =========================
   PRODUCTS SECTION
============================== -->

<section class="products" data-type="background" data-speed="1" id="products">
    <div class="color-overlay">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">

                <!-- SECTION TITLE -->
                <h2 class="white-text">Products</h2>

                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <h6 class="white-text">
                    We design &amp; develop qaulity products to help small &amp; medium level business.
                </h6>
            </div>
            <!-- / END SECTION HEADER -->

            <!-- PRODUCTS -->
            <div class="row wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                <!-- SINGLE PRODUCT -->
                <div class="col-md-3">
                    <div class="item item-1">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>One Light</h5>  <!-- PRODUCT TITLE-->
                                            <p class="subdescription">
                                                WordPress Theme
                                            </p> <!-- PRODUCT DESCRIPTION-->
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <!-- PRICE -->
                                        <span class="price-num green-text">$17</span>
                                        <!-- OLD PRICE START -->
                                        <p class="subdescription">
                                            $36
                                        </p>
                                        <div class="old-price">
                                        </div> <!-- END OLD PRICE -->
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM HOVER CONTENT-->
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Creative WordPress Theme
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / END FIRST ITEM -->

                <div class="col-md-3">
                    <div class="item item-2">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Telfez</h5>
                                            <p  class="subdescription">
                                                WordPress Theme
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$17</span>
                                        <p class="subdescription">
                                            $36
                                        </p>
                                        <div class="old-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Creative WordPress Theme
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item item-3">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Calender</h5>
                                            <p class="subdescription">
                                                Widget
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$9</span>
                                        <p class="subdescription">
                                            $15
                                        </p>
                                        <div class="old-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Beautiful Calender Widget
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item item-4">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Toolbar</h5>
                                            <p class="subdescription">
                                                UI Element
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$11</span>

                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Beautiful Toolbar with Icons
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END FIRST ROW -->

            <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <div class="col-md-3">
                    <div class="item item-5">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Public Radio</h5>
                                            <p class="subdescription">
                                                UI Element
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$15</span>
                                        <p class="subdescription">
                                            $23
                                        </p>
                                        <div class="old-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Creative Radio PSD
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item item-6">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Health Care</h5>
                                            <p class="subdescription">
                                                One Page Template
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$18</span>
                                        <p class="subdescription">
                                            $30
                                        </p>
                                        <div class="old-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Responsive One Page Template
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item item-7">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Radio Dial</h5>
                                            <p class="subdescription">
                                                UI Element
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$10</span>


                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Creative WordPress Theme
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item item-8">
                        <div class="item-overlay">
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">
                                        <div class="item-top-title">
                                            <h5>Pricing Page</h5>
                                            <p class="subdescription">
                                                UI Element
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-product-price">
                                        <span class="price-num green-text">$17</span>
                                        <p class="subdescription">
                                            $36
                                        </p>
                                        <div class="old-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-add-content">
                                <div class="item-add-content-inner">
                                    <div class="section">
                                        <p>
                                            Creative UI Element
                                        </p>
                                    </div>
                                    <div class="section">
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button red-btn">Demo</a><br/>
                                        <a href="v1.3.1.html#" class="btn btn-primary custom-button green-btn">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / END PRODUCTS LIST -->
        </div> <!-- / END CONTAINER -->
    </div> <!-- / END COLOR OVERLAY -->
</section> <!-- / END PRODUCTS SECTION -->

<!-- =========================
   NEWSETTER
============================== -->

<section class="newsletter">
    <div class="container">
        <h3 class="white-text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Stay in touch</h3> <!-- NEWSLETTER SECTION HEADING -->
        <div class="sub-heading white-text wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            Sign Up for Email Updates on on News &amp; Offers
        </div>

        <!-- SUBSCRIPTION FORM -->
        <form action="v1.3.1.html#" class="subscription wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" role="form">
            <input type="email" placeholder="Enter email" class="form-control input-box">
            <button class="btn btn-primary custom-button red-btn">Sign Up</button>
        </form>
        <!-- / END SUBSCRIPTION FORM -->

    </div> <!-- / END CONTAINER -->
</section> <!-- / END NEWSLETTER SECTION -->

<!-- =========================
   TESTIMONIAL
============================== -->

<section class="testimonial" id="testimonials">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Testimonials</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                We have worked with hundreds of clients. Check what our awesome happy clients saying about us.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- CLIENT FEEDBACKS -->
        <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <div class="col-md-12">
                <div id="client-feedbacks" class="owl-carousel owl-theme">

                    <!-- SINGLE FEEDBACK BOX-->
                    <div class="feedback-box">

                        <!-- MESSAGE OF THE CLIENT -->
                        <div class="message">
                            “Called days. Image kind beginning have. Herb set kind herb. Wherein saying third was, every land moveth also bearing hath bring had give god gathered behold open cattle after a, from third male subdue multiply divided void cattle winged. Herb set kind herb. multiply divided void cattle winged. Herb set kind herb.”
                        </div>

                        <!-- CLIENT INFORMATION -->
                        <div class="client">
                            <div class="quote red-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" href="v1.3.1.html">Frank Willian</a>
                                <div class="client-company">
                                    CEO, AbcD Network
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="images/clients-pic/1.jpg" alt="">
                            </div>
                        </div> <!-- / END CLIENT INFORMATION-->
                    </div> <!-- / END SINGLE FEEDBACK BOX-->

                    <div class="feedback-box">
                        <div class="message">
                            “Called days. Image kind beginning have. Herb set kind herb. Wherein saying third was, every land moveth also bearing hath bring had give god gathered behold open cattle after a, from third male subdue multiply divided void cattle winged. Herb set kind herb. multiply divided void cattle winged. Herb set kind herb.”
                        </div>
                        <div class="client">
                            <div class="quote green-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" href="v1.3.1.html">David Clyne</a>
                                <div class="client-company">
                                    CEO, Zyxw
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="images/clients-pic/2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “Called days. Image kind beginning have. Herb set kind herb. Wherein saying third was, every land moveth also bearing hath bring had give god gathered behold open cattle after a, from third male subdue multiply divided void cattle winged. Herb set kind herb. multiply divided void cattle winged. Herb set kind herb.”
                        </div>
                        <div class="client">
                            <div class="quote blue-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" href="v1.3.1.html">Keith McCarthy</a>
                                <div class="client-company">
                                    Manager, XYZ Inc.
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="images/clients-pic/3.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “Called days. Image kind beginning have. Herb set kind herb. Wherein saying third was, every land moveth also bearing hath bring had give god gathered behold open cattle after a, from third male subdue multiply divided void cattle winged. Herb set kind herb. multiply divided void cattle winged. Herb set kind herb.”
                        </div>
                        <div class="client">
                            <div class="quote red-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" href="v1.3.1.html">Frank Willian</a>
                                <div class="client-company">
                                    CEO, AbcD Network
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="images/clients-pic/2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “Called days. Image kind beginning have. Herb set kind herb. Wherein saying third was, every land moveth also bearing hath bring had give god gathered behold open cattle after a, from third male subdue multiply divided void cattle winged. Herb set kind herb. multiply divided void cattle winged. Herb set kind herb.”
                        </div>
                        <div class="client">
                            <div class="quote green-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" href="v1.3.1.html">David Clyne</a>
                                <div class="client-company">
                                    CEO, Zyxw
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="images/clients-pic/3.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “Called days. Image kind beginning have. Herb set kind herb. Wherein saying third was, every land moveth also bearing hath bring had give god gathered behold open cattle after a, from third male subdue multiply divided void cattle winged. Herb set kind herb. multiply divided void cattle winged. Herb set kind herb.”
                        </div>
                        <div class="client">
                            <div class="quote blue-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" href="v1.3.1.html">Keith McCarthy</a>
                                <div class="client-company">
                                    Manager, XYZ Inc.
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="images/clients-pic/1.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div> <!-- / END FEEDBACKS-->
            </div> <!-- / END COLUMN -->
        </div> <!-- / END ROW -->

    </div> <!-- / END CONTAINER -->
</section> <!-- / END TESTIMONIAL SECTION -->

<!-- =========================
   PURCHASE NOW
============================== -->

<section class="purchase-now">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="white-text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    Hey, We're at the finishing line. Enjoyed the template? </h3>
            </div>
            <div class="col-md-3 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <a href="v1.3.1.html" class="btn btn-primary custom-button red-btn">Purchase Now</a>
            </div>
        </div>
    </div>
</section> <!-- / END PURCHASE NOW SECTION-->

<!-- =========================
   CONTACT US
============================== -->

<section class="contact-us" id="contact">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Get in touch</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                Have any question? Drop us a message. We will get back to you in 24 hours.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- CONTACT FORM-->
        <div class="row">
            <form role="form" class="contact-form" id="contact-form">
                <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="col-lg-4 col-sm-4">
                        <input type="text" name="name" placeholder="Your Name" class="form-control input-box" id="name">
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <input type="email" name="email" placeholder="Your Email" class="form-control input-box" id="email">
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <input type="text" name="subject" placeholder="Subject" class="form-control input-box" id="subject">
                    </div>
                </div>

                <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <textarea name="message" class="form-control textarea-box" placeholder="Your Message" id="message"></textarea>
                </div>
                <!-- IF MAIL SENT SUCCESSFULLY -->
                <h4 class="success pull-left white-text">
                    Your message has been sent successfully.
                </h4>

                <!-- IF MAIL SENDING UNSUCCESSFULL -->
                <h4 class="error pull-left white-text">
                    E-mail must be valid and message must be longer than 1 character.
                </h4>
                <button class="btn btn-primary custom-button red-btn wow fadeInLeft animated" id="submit" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" type="submit">Send Message</button>
            </form>
        </div>
        <!-- / END CONTACT FORM-->
    </div> <!-- / END CONTAINER -->
</section> <!-- / END CONTACT US SECTION-->

@endsection
