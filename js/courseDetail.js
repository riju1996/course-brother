$(document).ready(function() {

  $('#tab-container').easytabs();

  function clickNav(item) {
    $(`.course_detail__body__nav ul li:nth-child(${item})`).click(function() {
      $(`.etabs li .a${item}`).click();
    });
  }

  for(let i = 0 ; i <= 4; i++) { clickNav(i) };
  
});