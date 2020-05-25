$(document).ready(function() {
  $(".close-btn").click(function() {
    $("nav").css({ left: "-175px" });
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
