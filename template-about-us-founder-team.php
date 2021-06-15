<?php 
/* Template Name: About Us - Founder Team*/
get_header();
?>
    <section>
        <nav style="position: absolute;" class="navbar navbar-light fixed-top content-container pt-0">
            <div class="row" style="justify-content: space-between; padding-top: 1%;">
                <a class="navbar-brand col-lg-4 col-6">
                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/image/BTG_logo_white.png">
                </a>
                <div class="navbar-toggler col-lg-2 col-4" style="border: none; text-align: end;">
                    <img src="<?php bloginfo('template_directory');?>/image/search_icon.png" style="width: 23%; padding-top: 20px;">&nbsp;&nbsp;
                    <img data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                        style="width: 30%; padding-top: 20px;" src="<?php bloginfo('template_directory');?>/image/menu_lines.png">
                </div>
        </nav>
        <div class="collapse navbar-collapse dropdownNavbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li style="padding: 0 15px; background: #2CACE3;" class="nav-item active">
                    <a class="nav-link">Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="padding-left: 15px; padding-right: 15px;"
                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About us
                    </a>
                    <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item">Mission & Core Values</a>
                        <a class="dropdown-item">Team Members</a>
                        <a class="dropdown-item">Partners</a>
                        <a class="dropdown-item">Lab Accreditations & Licenses</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle"
                        id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        End-to-End Solutions
                    </a>
                    <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item">Team Members</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle"
                        id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NGS Clinical Lab
                    </a>
                    <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                        <a class="dropdown-item">Team Members</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle"
                        id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clinical Interpretation Services
                    </a>
                    <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                        <a class="dropdown-item">Team Members</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle"
                        id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact us
                    </a>
                    <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink4">
                        <a class="dropdown-item">Team Members</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active"
                        style="background-image: url(<?php bloginfo('template_directory');?>/image/banner1.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;">
                        <div class="content-container pt-0">
                            <div style="text-align: end; padding-top: 130px;">
                                <div style="margin-bottom: 20px;">
                                    <img class="img-width" src="<?php bloginfo('template_directory');?>/image/mycovscan_logo.png" style="width: 33%;">
                                </div>
                                <div style="color: #fff; font-weight: 500; font-size: 35px; margin-bottom: 20px;">
                                    COVID-19 Testing <br>
                                    through Breakthrough Genomics
                                </div>
                                <div style="color: #C64C9C;">
                                    EXPLORE ALL OUR TURN-KEY SOLUTIONS
                                    <span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" style="width: 40px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url(<?php bloginfo('template_directory');?>/image/banner2.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;">
                        <div class="content-container pt-0">
                            <div class="fix-width"
                                style="padding-top: 130px; width: 35%; margin-left: auto; margin-right: 0;">
                                <div style="margin-bottom: 20px; font-size: 40px; font-weight: 500;">
                                    Diagnose accurately.<br>
                                    Care better
                                </div>
                                <div style="color: #C64C9C; margin-bottom: 20px;">
                                    END THE DISEASE DIAGNOSIS <br>
                                    FOR PATIENTS IN ONE STEP<span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png"
                                            style="width: 40px;"></span>
                                </div>
                                <div style="color: #2CACE3; text-align: end;">
                                    <span><img src="<?php bloginfo('template_directory');?>/image/arrow_blue.png" style="width: 40px;"></span>
                                    SCHEDULE CONSULT
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url(<?php bloginfo('template_directory');?>/image/virtual_geneticist_banner.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;">
                        <div class="content-container pt-0">
                            <div class="fix-padding-top" style="padding-top: 160px;">
                                <div class="fix-display mb-md-3" style="display: flex;">
                                    <img class="img-width-2" src="<?php bloginfo('template_directory');?>/image/virtual_geneticist_logo.png"
                                        style="width: 30%; ">&nbsp;&nbsp;&nbsp;
                                    <div style="font-weight: 600; font-size: 35px;">
                                        One platform.<br>
                                        Many Applications<br>
                                        tailored to your needs
                                    </div>
                                </div>
                                <div style="color: #C64C9C;">
                                    CONNECT YOUR GENOMIC EXPERTS TO BTG PLAFORM<br>
                                    TO STREAMLINE LAB TO CLINIC REPORTING
                                    <span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" style="width: 40px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="content-container">
        <h2 class="content-title">
            Founders & Team Members
        </h2>
        <br>
        <p class="content-text">
            Breakthrough Genomics is a pioneer in Whole Exome, Whole Genome, and Gene Panel Tests. Collectively, the
            company s founders
            have over 60 years of experience directing genomics programs for leading institutions including Mumina, UCLA
            and Quest
            Diagnostics.<br>
            Meet our experienced leadership team:

        </p>
        <div class="team-members">
            <ul class="wp-tm-theme-7 grayscale-default wp-team-wrapper theme-orange">
                <li class="col-md-4 odd-row-counter" style="background-color: #2cace3;">
                    <div id="info1" style="display: none;">
                        <div class="info-container">
                            <h4>Laura Li</h4>
                            <p class="job-info">Founder & CEO</p>
                            <p class="info-text">
                                CV Summary......delays in diagnosis can lead
                                to disease progress are diseases,
                                Breakthrough Genomics offers free
                                consultation and full service molecular
                                diagnosis for even the most difficult cases.

                            </p>
                            <p class="info-text">
                                Choose between Clinical Whole Exome or
                                Whole Genome Sequencing and receive your
                                diagnosis within 3 weeks. All tests are
                                performed by a U.S. CLIA-certified lab and
                                clinical reports returned to patients are all
                                reviewed and signed by a U.S. Board-Certified
                                Medical Geneticist.
                            </p>
                            <p class="info-text">
                                Contact details: LauraLi@BTGenomics.com
                            </p>
                        </div>
                    </div>
                    <div class="member-img-wrap" id="image1">
                        <a>
                            <img src="<?php bloginfo('template_directory');?>/image/member1.jpg" class="" alt="">
                        </a>
                    </div>
                    <div class="member-detail">
                        <div class="member-name">Cassandra Mueller<span>Designer</span></div>

                    </div>
                </li>
                <li class="col-md-4 odd-row-counter" style="background-color: #646c93;">
                    <div id="info2" style="display: none;">
                        <div class="info-container">
                            <h4>Laura Li</h4>
                            <p class="job-info">Founder & CEO</p>
                            <p class="info-text">
                                CV Summary......delays in diagnosis can lead
                                to disease progress are diseases,
                                Breakthrough Genomics offers free
                                consultation and full service molecular
                                diagnosis for even the most difficult cases.

                            </p>
                            <p class="info-text">
                                Choose between Clinical Whole Exome or
                                Whole Genome Sequencing and receive your
                                diagnosis within 3 weeks. All tests are
                                performed by a U.S. CLIA-certified lab and
                                clinical reports returned to patients are all
                                reviewed and signed by a U.S. Board-Certified
                                Medical Geneticist.
                            </p>
                            <p class="info-text">
                                Contact details: LauraLi@BTGenomics.com
                            </p>
                        </div>
                    </div>
                    <div class="member-img-wrap" id="image2">
                        <a>
                            <img src="<?php bloginfo('template_directory');?>/image/member1.jpg" class="" alt="">
                        </a>
                    </div>
                    <div class="member-detail">
                        <div class="member-name">Cassandra Mueller<span>Designer</span></div>

                    </div>
                </li>
                <li class="col-md-4 odd-row-counter" style="background-color: #24365e;">
                    <div id="info3" style="display: none;">
                        <div class="info-container" style="border-left: 5px solid #fff;">
                            <h4>Laura Li</h4>
                            <p class="job-info">Founder & CEO</p>
                            <p class="info-text">
                                CV Summary......delays in diagnosis can lead
                                to disease progress are diseases,
                                Breakthrough Genomics offers free
                                consultation and full service molecular
                                diagnosis for even the most difficult cases.

                            </p>
                            <p class="info-text">
                                Choose between Clinical Whole Exome or
                                Whole Genome Sequencing and receive your
                                diagnosis within 3 weeks. All tests are
                                performed by a U.S. CLIA-certified lab and
                                clinical reports returned to patients are all
                                reviewed and signed by a U.S. Board-Certified
                                Medical Geneticist.
                            </p>
                            <p class="info-text">
                                Contact details: LauraLi@BTGenomics.com
                            </p>
                        </div>
                    </div>
                    <div class="member-img-wrap" id="image3">
                        <a>
                            <img src="<?php bloginfo('template_directory');?>/image/member1.jpg" class="" alt="">
                        </a>
                    </div>
                    <div class="member-detail">
                        <div class="member-name">Cassandra Mueller<span>Designer</span></div>

                    </div>
                </li>
                <li class="col-md-4 even-row-counter" style="background-color: #24365e;">
                    <div id="info4" style="display: none;">
                        <div class="info-container">
                            <h4>Laura Li</h4>
                            <p class="job-info">Founder & CEO</p>
                            <p class="info-text">
                                CV Summary......delays in diagnosis can lead
                                to disease progress are diseases,
                                Breakthrough Genomics offers free
                                consultation and full service molecular
                                diagnosis for even the most difficult cases.

                            </p>
                            <p class="info-text">
                                Choose between Clinical Whole Exome or
                                Whole Genome Sequencing and receive your
                                diagnosis within 3 weeks. All tests are
                                performed by a U.S. CLIA-certified lab and
                                clinical reports returned to patients are all
                                reviewed and signed by a U.S. Board-Certified
                                Medical Geneticist.
                            </p>
                            <p class="info-text">
                                Contact details: LauraLi@BTGenomics.com
                            </p>
                        </div>
                    </div>
                    <div class="member-img-wrap" id="image4">
                        <a>
                            <img src="<?php bloginfo('template_directory');?>/image/member1.jpg" class="" alt="">
                        </a>
                    </div>
                    <div class="member-detail">
                        <div class="member-name">Cassandra Mueller<span>Designer</span></div>

                    </div>
                </li>
                <li class="col-md-4 even-row-counter" style="background-color: #c64c9c;">
                    <div id="info5" style="display: none;">
                        <div class="info-container" style="border-left: 5px solid #fff;">
                            <h4>Laura Li</h4>
                            <p class="job-info">Founder & CEO</p>
                            <p class="info-text">
                                CV Summary......delays in diagnosis can lead
                                to disease progress are diseases,
                                Breakthrough Genomics offers free
                                consultation and full service molecular
                                diagnosis for even the most difficult cases.

                            </p>
                            <p class="info-text">
                                Choose between Clinical Whole Exome or
                                Whole Genome Sequencing and receive your
                                diagnosis within 3 weeks. All tests are
                                performed by a U.S. CLIA-certified lab and
                                clinical reports returned to patients are all
                                reviewed and signed by a U.S. Board-Certified
                                Medical Geneticist.
                            </p>
                            <p class="info-text">
                                Contact details: LauraLi@BTGenomics.com
                            </p>
                        </div>
                    </div>
                    <div class="member-img-wrap" id="image5">
                        <a>
                            <img src="<?php bloginfo('template_directory');?>/image/member1.jpg" class="" alt="">
                        </a>
                    </div>
                    <div class="member-detail">
                        <div class="member-name">Cassandra Mueller<span>Designer</span></div>

                    </div>
                </li>
                <li class="col-md-4 even-row-counter" style="background-color: #2cace3;">
                    <div id="info6" style="display: none;">
                        <div class="info-container">
                            <h4>Laura Li</h4>
                            <p class="job-info">Founder & CEO</p>
                            <p class="info-text">
                                CV Summary......delays in diagnosis can lead
                                to disease progress are diseases,
                                Breakthrough Genomics offers free
                                consultation and full service molecular
                                diagnosis for even the most difficult cases.

                            </p>
                            <p class="info-text">
                                Choose between Clinical Whole Exome or
                                Whole Genome Sequencing and receive your
                                diagnosis within 3 weeks. All tests are
                                performed by a U.S. CLIA-certified lab and
                                clinical reports returned to patients are all
                                reviewed and signed by a U.S. Board-Certified
                                Medical Geneticist.
                            </p>
                            <p class="info-text">
                                Contact details: LauraLi@BTGenomics.com
                            </p>
                        </div>
                    </div>
                    <div class="member-img-wrap" id="image6">
                        <a>
                            <img src="<?php bloginfo('template_directory');?>/image/member1.jpg" class="" alt="">
                        </a>
                    </div>
                    <div class="member-detail">
                        <div class="member-name">Cassandra Mueller<span>Designer</span></div>

                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div style="clear: both; height: 25px"></div>
<?php get_footer();?>
