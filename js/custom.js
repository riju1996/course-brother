$(document).ready(function() {

  // Variables
  $caret = $('.header__caret');
  $navbarFixed = $('.navbar--fixed');


  // Navbar animation on scroll
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 1500) {
      $navbarFixed.css('top', '0');
    } else {
      $navbarFixed.css('top', '-19vh');
    }
  });


  // =====  GSAP Animations =====

  // caretAnimation
  function caretAnim() {
    const caretTl = new TimelineMax({ repeat: -1, yoyo: true });
    caretTl
      .fromTo($caret, 1.5, {
        y: -35,
        autoAlpha: 0,
      }, {
        y: '+=20',
        autoAlpha: 1,
        ease: Power1.easeInOut
      })
    return caretTl;
  };

    // Start function with Master Timeline
  function start() {
    console.log('----- GSAP STARTS -----');
    const masterTl = new TimelineMax();
    masterTl
      .add(caretAnim(), 'caret-animation')
    ;
  };


  // WOW JS and GSAP Animations start
  window.addEventListener('load', function () { start(); new WOW().init(); });

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });


  // Courses Carousel
  let siema = new Siema({
    selector: '.carousel__container',
    perPage: 2,
    duration: 400
  });

  $('.carousel__button .fa-angle-right').click(() => {
    siema.next();
  });
  $('.carousel__button .fa-angle-left').click(() => {
    siema.prev();
  });


  // For making the selected course visible
  $('.featured_courses__list ul li').first().addClass('list--active');
  $('.featured_courses__list ul li').click(function() {
    $('.featured_courses__list ul li').removeClass('list--active');
    $(this).addClass('list--active');
  });

});