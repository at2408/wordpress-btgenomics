<?php
/*Template Name: NGS Clinical Labs*/
get_header();
?>
<section>
        <nav style="position: absolute; display: inherit; top: 0; left: 0; z-index: 10; right: 0;" class="navbar navbar-light content-container pt-0">
          <div class="row" style="justify-content: space-between; padding-top: 1%;">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand col-lg-4 col-6">
              <img  class="img-fluid" src="<?php bloginfo('template_directory');?>/image/BTG_logo_white.png">
            </a>
            <div class="navbar-toggler col-lg-2 col-4" style="border: none; text-align: end;">
              <img src="<?php bloginfo('template_directory');?>/image/search_icon.png" style="width: 18%; padding-top: 20px;">&nbsp;&nbsp;
              <img data-toggle="collapse" class="nav-button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="width: 20%; padding-top: 20px;" src="<?php bloginfo('template_directory');?>/image/menu_lines.png">
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
                <a href="#" class="dropdown-item">Partners</a>
                <a href="#" class="dropdown-item">Lab Accreditations & Licenses</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                End-to-End Solutions
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <a href="<?php echo get_site_url(); ?>/ends-to-ends-solution" class="dropdown-item">End-to-End Solutions</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NGS Clinical Lab
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a href="<?php echo get_site_url(); ?>/ngs-clinical-lab" class="dropdown-item">NGS Clinical Lab</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clinical Interpretation Services
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a href="<?php echo get_site_url(); ?>/clinical-interpretation-services" class="dropdown-item">Clinical Interpretation Services</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact us
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink4">
                <a href="#" class="dropdown-item">Contact us</a>
              </div>
            </li>
          </ul>
        </div>
    </section>
    <section>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"
                        style="background-image: url(<?php bloginfo('template_directory');?>/image/NGS_Services_banner.png); background-repeat: no-repeat; background-size: cover; background-position: left; height: 550px;">
                        <div class="content-container pt-0">
                          <div class="fix-padding-top-2" style="padding-top: 300px;">
                                <div class="oxygen-font" style="color: #fff; font-weight: 500; font-size: 45px; margin-bottom: 20px;">
                                    High Quality,<br>
                                    Agile-Clinical NGS Services
                                    <div class="oxygen-font" style="color: #2CACE3; font-size: 25px; margin-top: 15px;">
                                      CLIA Consultation Request
                                      <span><img src="<?php bloginfo('template_directory');?>/image/arrow_banner.png" style="width: 40px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="position: relative">
      <div style="position: absolute; top: -11px; left: 5%;">
        <ul class="breadcrumb">
          <li><a style="color: #fff" href="#">Home</a></li>
          <li><a style="color: #2CACE3" href="#">NGS Clinical Lab</a></li>
        </ul>
      </div>
    </section>
  <section class="content-container-gray">
    <h2 style="margin-bottom: 25px;" class="content-title fix-center">
      CLIA Services
    </h2>
    <div class="end-to-end-container pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-7 col-10">
          <p style="text-align: justify" class="content-text pr-md-3">
          Our clinical lab is CLIA certified by The Centers for Medicare & Medicaid Services (CMS) and accredited by the College of American Pathologists (CAP) for clinical NGS and Sanger sequencing, and we are routinely instepcted by CAP for accrediations renewal. Our commitment to providing reliable, cost-effective services and high-quality results remain paramount for our CLIA service portfolio.<br><br>
          We treat all customer information study-related data, and intellectual propery, with the same degree of care and security that we do for our own. This allows our customers at both top-tier pharmaceutical companies and biothechnology start-ups the flexibility to utilize our regulatore services, while trusting in our commitment to quality and communication.
          </p>
        </div>
        <div class="col-lg-4 col-md-5 col-10" style="background-image: url(<?php bloginfo('template_directory');?>/image/covid_sequencing.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 260px; border-radius: 15px;">
          <div style="color: #fff; font-weight: 500; font-size: 23px; padding-left: 15px; padding-top: 37px">
            High-throughput
            <div style="font-size: 30px; color: #C64C9C;">COVID-19 Sequencing</div>
            & Surveillance
            <div style="margin-top: 10px"><a href="#" style="color: #2CACE3;">Learn more
            <span><img src="<?php bloginfo('template_directory');?>/image/arrow_banner.png" style="width: 40px;"></span></a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content-container">
    <h2 class="content-title-blue">
      Features & Benefits
    </h2>
    <div class="row">
      <div class="col-md-6">
        <div class="clearfix mt-5">
          <img style="float: right; width:15%" class="ml-3" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol1.png" alt="">
          <p class="features-text">
            Superior data quality that exceeds
            manufacturer's benchmarks
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="clearfix mt-5">
          <img style="float: right; width:11%" class="ml-3" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol3.png" alt="">
          <p class="features-text">
            Custom CLIA Validations to support
            specific clinical trials
          </p>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-6">
        <div class="clearfix mt-5">
          <img style="float: right; width:15%" class="ml-3" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol2.png" alt="">
          <p class="features-text">
            Ph.D.-level support during the entire
            project, including free consultations
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="clearfix mt-5">
          <img style="float: right; width:14%" class="ml-3" src="<?php bloginfo('template_directory');?>/image/end_to_end/symbol4.png" alt="">
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
    <h4 class="m-0 inquire-title">Inquire about custom CLIA validations for specific arrays or sample types <span><img src="<?php bloginfo('template_directory');?>/image/end_to_end/white_Arrow.png" style="width: 40px;"></span> </h4>
    </div>
    <div class="background-gray">
      <div class="container-fluid">
      <div class="row inquire-wrapper" style="padding: 2% 0%">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/NGS/whole_genome_symbol.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem; color: #c64c9c">Whole Genome</h5>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/NGS/whole_exome_symbol.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem; color: #c64c9c">Whole Exome</h5>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/end_to_end/Rare_diseases.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem; color: #c64c9c">Gene Panels</h5>
      </div>
    </div>

  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card custom_square mb-2" style="">
      <div class="square"
        style=" background: #fff;     height: -webkit-fill-available; background-image: url('<?php bloginfo('template_directory');?>/image/NGS/covid_symbol.png') ;     background-position: center; background-size: contain; background-repeat: no-repeat;">
      </div>
      <div class="card-body p-0">
        <h5 class="card-title" style="font-size: 1rem; font-weight: 700; margin-top: .75rem; color: #c64c9c">Covid-19 Dx</h5>
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
<?php
get_footer();
?>