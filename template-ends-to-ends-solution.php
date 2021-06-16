<?php
/*Template Name: Ends-to-Ends-Solution*/
get_header();
?>

<section>
        <nav style="position: absolute;" class="navbar navbar-light fixed-top content-container pt-0">
          <div class="row" style="justify-content: space-between; padding-top: 1%;">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand col-lg-4 col-6">
              <img class="img-fluid" src="<?php bloginfo('template_directory');?>/image/BTG_logo_white.png">
            </a>
            <div class="navbar-toggler col-lg-2 col-4" style="border: none; text-align: end;">
              <img src="<?php bloginfo('template_directory');?>/image/search_icon.png" style="width: 23%; padding-top: 20px;">&nbsp;&nbsp;
              <img data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="width: 30%; padding-top: 20px;" src="<?php bloginfo('template_directory');?>/image/menu_lines.png">
            </div>
          </div>
        </nav>
        <div class="collapse navbar-collapse dropdownNavbar" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li style="padding: 0 15px; background: #2CACE3;" class="nav-item active">
              <a class="nav-link">Menu <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="padding-left: 15px; padding-right: 15px; cursor: pointer" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About us
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink">
                <a href="<?php echo get_site_url(); ?>/about-us-mission-core" class="dropdown-item">Mission & Core Values</a>
                <a href="<?php echo get_site_url(); ?>/about-us-founder-team" class="dropdown-item">Team Members</a>
                <a class="dropdown-item">Partners</a>
                <a class="dropdown-item">Lab Accreditations & Licenses</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                End-to-End Solutions
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <a href="<?php echo get_site_url(); ?>/ends-to-ends-solution" class="dropdown-item">End-to-End Solutions</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NGS Clinical Lab
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a href="<?php echo get_site_url(); ?>/ngs-clinical-lab" class="dropdown-item">NGS Clinical Lab</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clinical Interpretation Services
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a class="dropdown-item">Team Members</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

  <section class="content-container-gray">
    <h2 class="content-title">
      End-to-end Solutions
    </h2>
    <div class="end-to-end-container">
      <div class="clearfix">
        <div style="width: 40%; float: right; position: relative" class="covid-img-container">
        <img style="width: 100%" src="<?php bloginfo('template_directory');?>/image/end_to_end/covid_sequencing.png" alt="">
        <div style="position: absolute; top: 10%; left: 5%" class="text-block">
          <p style="color: #fff; font-weight: 500; font-size: 2vw">High-throughput</p>
          <p style="color: #c64c9c; font-size: 2vw">COVID-19 SEQUENCING</p>
          <p style="color: #fff; font-weight: 500; font-size: 2vw">& Surveillance</p>
          <br>
          <a href="#" style="color: #2CACE3; font-weight: 500; font-size: 1.5vw">Learn more <span class="ml-3" ><img style="width: 10%" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow_banner.png" alt=""> </span></a>
        </div>
        </div>
        
        <p class="content-text">
          Our clinical lab is CLIA certified by The Centers for Medicare & Medicaid Services
          (CMS) and accredited by the College of American Pathologists (CAP) for clinical
          NGS and Sanger sequencing, and we are routinely instepcted by CAP for
          accrediations renewal. Our commitment to providing reliable, cost-effective
          services and high-quality results remain paramount for our CLIA service portfolio.<br>
          We treat all customer information study-related data, and intellectual propery,
          with the same degree of care and security that we do for our own. This allows our
          customers at both top-tier pharmaceutical companies and biothechnology start-
          ups the flexibility to utilize our regulatore services, while trusting in our
          commitment to quality and communication.
        </p>
      </div>
      <div style="  display: flex; flex-wrap: wrap;" class="shape-wrapper mt-4">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrows_magenta.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow1.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow2.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow4.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow5.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow6.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow7.png" alt="">
        <img style="display: flex; width: 12.5%" class="mb-4" src="<?php bloginfo('template_directory');?>/image/end_to_end/arrow8.png" alt="">
      </div>
    </div>
  </section>
  <section class="content-container">
    <h2 class="content-title-blue">
      Features & Benefits
    </h2>
    <div class="row">
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right; width:20%" class="ml-2" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol1.png" alt="">
          <p class="features-text">
            Superior data quality that exceeds
            manufacturer's benchmarks
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right; width:20%" class="ml-2" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol3.png" alt="">
          <p class="features-text">
            Custom CLIA Validations to support
            specific clinical trials
          </p>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right; width:20%" class="ml-2" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol2.png" alt="">
          <p class="features-text">
            Ph.D.-level support during the entire
            project, including free consultations
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right; width:20%" class="ml-2" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol4.png" alt="">
          <p class="features-text">
            Complementary NGS and Sanger
            services provide variant discovery-to-
            validation workflows
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="content-container">
    <div class="background-pink">
      <h4 class="m-0 inquire-title">Inquire about custom CLIA validations for specific arrays or sample types</h4>
    </div>
    <div class="background-gray">
      <div class="container-fluid">
      <div class="row inquire-wrapper p-3">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/end_to_end/covid_symbol.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem">Card title</h5>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/end_to_end/population_screenig.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem">Popluation Screening</h5>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/end_to_end/Rare_diseases.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem">Rare Diseases Dx</h5>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/end_to_end/customized.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem">Customized</h5>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
  </section>
  <section class="content-container">
    <h2 class="content-title">
    Who is using our services
    </h2>
    <div class="row client">
      <div class="auto-feature-clients-start">
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/novogene.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/repogene.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/10/NGXBIO_logo_One_Stop_Shop-001.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/fullgene.jpg"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/10/admera_health_231px-001.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/cedarSanai.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/chla.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/ubc.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/ucla.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2018/09/usc.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:16%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/10/EpigeneticsRX-logo-main-001.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/03/alinaHealth.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/03/ucsf.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/03/baylorCollegeOfMedicine.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/10/DDC-Lab-logo-white-001.jpg');"></div>
        </a>
        <a class="featured-clients-container" style="display: flex;width:20%">
          <div class="feature-image"
            style="filter: grayscale(100%); background-image: url('https://secureservercdn.net/198.71.233.235/f7r.b60.myftpupload.com/wp-content/uploads/2019/03/macrogen.jpg');"></div>
        </a>
      </div>
    </div>
  </section>
  <div style="clear: both; height: 25px"></div>
<?php get_footer();?>
