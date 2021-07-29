$(document).ready(function(){
  $('section.clientes-slider .slider-container').slick({
    dots: true,
    arrows:false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive:
    [
    {
      breakpoint:768,
      settings: {
        slidesToShow: 3
      }
    }
    ]
  });

  $('.menu-mobile i').click(function(){
    $('.menu-mobile').find('ul').slideToggle();
  })

  $('.menu-mobile i').click(function(){
    if($('.menu-mobile i').hasClass('fa-times')){
      $('.menu-mobile').find('i').removeClass('fa-times');
      $('.menu-mobile').find('i').addClass('fa-bars');
    }else{
      $('.menu-mobile').find('i').removeClass('fa-bars');
      $('.menu-mobile').find('i').addClass('fa-times');
    }
  })


  $('section.depoimentos .depoimentos-box').slick({
    infinite:true,
    arrows:false,
    dots: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000
  });
});