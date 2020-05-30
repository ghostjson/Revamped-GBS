$(document).ready(function() {
  $(".close-btn").click(function() {
    $("nav").css({ left: "-175px" });
    $(".sub-menu").slideUp();
    setTimeout(function() {
      $(".show-btn").css({ right: "-30px", opacity: "1" });
    }, 1000);
  });

  $(".show-btn").click(function() {
    $(".show-btn").css({ opacity: "0" });
    setTimeout(function() {
      $("nav").css({ left: "0px" });
    }, 200);
  });
});


// solution page expand
$('.expand').click(function(){
  if($(this).hasClass('expanded')){
    $(this).removeClass('expanded')
  }else{
    $(this).addClass('expanded')
  }
  $($(this).parent().siblings()[0]).slideToggle('slow')
})

$('#solution').click(function(){
  $('.sub-menu').slideToggle()
})