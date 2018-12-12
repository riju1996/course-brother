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


    <!-- COURSE_RESULTS -->
    <div class="course_results">

      <div class="course_results__header">
        <h3>FOUND <b>24</b> RESULT(S) FOR <b>MBA</b> </h3>
      </div>

      <div class="course_results__refined_search">

        <h3 class='course_results__refined_search__title'>REFINED SEARCH</h3>
        <div class="course_results__refined_search__button">
          <i class="fa fa-angle-down"></i>
        </div>
        <!-- TODO: Add the refined search section -->
      </div>


      <!-- COURSE_RESULTS_SYSTEM -->
      <div class="course_results__system">
        <div class="course_results__system__block">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="course_results__system__grid">
          <div></div> <div></div> <div></div> 
          <div></div> <div></div> <div></div>
        </div>
      </div>
      <!-- /COURSE_RESULTS_SYSTEM -->


      <!-- COURSES_MAIN -->
      <div class="course_results__main">


        <div class="course_results__item">
          <div class="course_results__item__logo">
            <img src="../assets/images/institute_img/annamalai.jpeg" />
          </div>
          <div class="course_results__item__body">
            <div class="course_results__item__body__content">
              <div class="course_results__item__body__content__head">
                <h2>MBA IN TELECOM</h2>
                <h5>ANNAMALAI UNIVERSITY</h5>
              </div>
              <div class="course_results__item__body__content__appendix">
                <h4>2 YEARS</h4>
                <h4>ONLINE LEARNING</h4>
              </div>
              <div class="course_results__item__body__content__buttons">
                <button>GO TO COURSE</button>
                <button>ADD TO COMPARE</button>
              </div>
            </div>
            <div class="course_results__item__body__price">
              <h4>Rs 35, 000</h4>
            </div>
          </div>
        </div>

        <div class="course_results__item">
          <div class="course_results__item__logo">
            <img src="../assets/images/institute_img/nmims44.jpeg" />
          </div>
          <div class="course_results__item__body">
            <div class="course_results__item__body__content">
              <div class="course_results__item__body__content__head">
                <h2>MBA IN SUPPLY CHAIN</h2>
                <h5>NMIMS</h5>
              </div>
              <div class="course_results__item__body__content__appendix">
                <h4>2 YEARS</h4>
                <h4>ONLINE LEARNING</h4>
              </div>
              <div class="course_results__item__body__content__buttons">
                <button>GO TO COURSE</button>
                <button>ADD TO COMPARE</button>
              </div>
            </div>
            <div class="course_results__item__body__price">
              <h4>Rs 20, 000</h4>
            </div>
          </div>
        </div>


      </div>
      <!-- /COURSES_MAIN -->


    </div>
    <!-- /COURSE_RESULTS -->
    

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
  <!-- WOW JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
  <!-- CUSTOM JS -->
  <script src='../js/courseDetail.js'></script>

</body>
</html> 