<?php
  include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="..\assets\images\favicon.png" type="image/png" />

  <!-- NORMALIZE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">

  <!-- FONTAWESOME -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

  <!-- jQuery Plugins -->

  <!-- TOOLTIPSTER -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-shadow.min.css' />

  <!-- ANIMATE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' />

  <!-- CUSTOM CSS -->
  <link rel='stylesheet' href='../styles/style.css' />

  <title>CourseBrothers | One Stop Destination for Learning</title>
</head>
<body>
  
  
  <!-- MAIN_CONTAINER -->
  <div class="main-container">


    <!-- NAVBAR_SCROLL -->
    <?php include '../includes/navbar-scroll.php' ?>
    <!-- /NAVBAR_SCROLL -->


    <!-- SEARCH_BAR -->
    <?php include '../includes/search-bar.php' ?>
    <!-- /SEARCH_BAR -->



    <!-- COURSE_DETAIL -->
    <div class="course_detail">

      <!-- COURSE_DETAIL_HEADER -->
      <div class="course_detail__header">
        <div class='detail__skew'></div>
        <div class="detail__info">
          <div class="detail__info__head">
            <h2>MBA IN SUPPLY CHAIN</h2>
            <h5>ASSAM DOWNTOWN UNIVERSITY</h5>
          </div>
          <div class="detail__info__appendix">
            <h4>2 YEARS</h4>
            <h5>ONLINE LEARNING</h5>
          </div>
        </div>
        <div class="detail__img">
          <img src='../assets/images/institute_img/assam.jpg' />
        </div>
      </div>
      <!-- /COURSE_DETAIL_HEADER -->

      <!-- COURSE_DETAIL_BODY -->
      <div class="course_detail__body">

        <div class="course_detail__body__nav">
          <ul>
            <li class='tab'>OVERVIEW</li>
            <li class='tab'>STRUCTURE</li>
            <li class='tab'>FEE</li>
            <li class='tab'>ELIGIBILITY</li>
          </ul>
          <button>APPLY NOW</button>
        </div>
        <div class="course_detail__body__main">
          <div id='tab-container' class="main_content tab-container">

            <ul class='etabs'>
              <li class='tab'><a class='a1' href="#tabs-overview">OVERVIEW</a></li>
              <li class='tab'><a class='a2' href="#tabs-structure">STRUCTURE</a></li>
              <li class='tab'><a class='a3' href="#tabs-fee">FEE</a></li>
              <li class='tab'><a class='a4' href="#tabs-eligibility">ELIGIBILITY</a></li>
            </ul>

            <div id="tabs-overview">
              <h3 class='main_content__title'>COURSE OVERVIEW</h3>
              <p class='main_content__body'>
                MBA in supply chain management, gives students a customized, industry-centered system
                which cooperates with organizations known for store network brilliance. We give understudies
                an excellent interdisciplinary instruction that expands on basic information and joins the most
                recent in inventory network considering. The vital, cross-useful educational modules takes a
                coordinated business process perspective of supply chains, including showcasing, sourcing,
                logistics, operations, and client administration. Understudies associate with and gain from true
                inventory network pioneers and are a piece of a solid, affectionate group.
              </p>
            </div>

            <div id="tabs-structure">
              <h3 class='main_content__title'>COURSE STRUCTURE</h3>
              <p class='main_content__body'>
                1ST SEMESTER <br><br>
                Networking and Marketing<br>
                Supply Chain Basics
                <br><br><br>
                2ND SEMESTER <br><br>
                Marketing Strategies<br>
                Internet of Things Basics
              </p>
            </div>

            <div id="tabs-fee">
              <h3 class='main_content__title'>COURSE FEE</h3>
              <p class='main_content__body'>
                1ST SEMESTER - Rs 4000 <br> 
                2ND SEMESTER - Rs 5000 <br>
                3RD SEMESTER - Rs 4400
              </p>
            </div>

            <div id="tabs-eligibility">
              <h3 class='main_content__title'>COURSE ELIGIBILITY</h3>
              <p class='main_content__body'>
                Bachelor's Degree
              </p>
            </div>

          </div>
          <div class="lead_form">
            <div class="lead_form__header"><h5>TALK TO AN EXPERT COUNSELLOR FOR FREE</h5></div>
            <form action="action/action.php" method="post">
              <input type="text" name="name" placeholder='NAME' />
              <input type="email" name="email" placeholder='EMAIL ADDRESS' />
              <input type="text" name="phone" placeholder='PHONE' />
              <input type="text" name="course" placeholder='COURSE' />
              <input type="submit" value='ENQUIRE' />
            </form>
          </div>
        </div>

      </div>
      <!-- /COURSE_DETAIL_BODY -->


      <!-- RELATED_COURSES -->
      <div class="related_courses">
        <h2 class='related_courses__title'>RELATED COURSES</h2>
        <div class="related_courses__container">

          <div class="related_courses__item">
            <h3 class='related_courses__item__uni'>UNIVERSITY OF PETROLEUM AND ENERGY STUDIES</h3>
            <div class="related_courses__item__sep"></div>
            <h4 class='related_courses__item__name'>MBA in supply chain</h4>
            <div class="related_courses__item__info">
              <h4 class='related_courses__item__info__price'>Rs 35, 000</h4>
              <h4 class='related_courses__item__info__duration'>2 YEARS</h4>
            </div>
          </div>

          <div class="related_courses__item">
            <h3 class='related_courses__item__uni'>ANNAMALAI UNIVERSITY</h3>
            <div class="related_courses__item__sep"></div>
            <h4 class='related_courses__item__name'>INTEGRATED MBA BBA IN SUPPLY CHAIN</h4>
            <div class="related_courses__item__info">
              <h4 class='related_courses__item__info__price'>Rs 35, 000</h4>
              <h4 class='related_courses__item__info__duration'>2 YEARS</h4>
            </div>
          </div>

        </div>
      </div>
      <!-- /RELATED_COURSES -->

    </div>
    <!-- /COURSE_DETAIL -->

    <!-- FOOTER -->
    <?php include '../includes/footer.php' ?>
    <!-- /FOOTER -->



  </div>
  <!-- /MAIN_CONTAINER -->


  <!-- jQuery -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
  <!-- TweenMax -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <!-- EasyTabs -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js'>
  </script>
  <!-- ToolTipster -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js'>
  </script>
  <!-- WOW JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
  <!-- CUSTOM JS -->
  <script src='../js/courseDetail.js'></script>

</body>
</html> 