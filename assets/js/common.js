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
$(".expand").click(function() {
  // console.log($(this))

  if (
    $(this)
      .find("img")
      .hasClass("expanded")
  ) {
    $(this)
      .find("img")
      .removeClass("expanded");
    setTimeout(() => {
      $(this)
        .parent()
        .removeClass("bg-expand");
    }, 800);
  } else {
    $(this)
      .parent()
      .addClass("bg-expand");
    $(this)
      .find("img")
      .addClass("expanded");
  }
  $($(this).siblings()[0]).slideToggle("slow");
});

$("#solution").click(function() {
  $(".sub-menu").slideToggle();
});

$("#semi-conductor").click(function() {
  $(".sc-sub").slideToggle();
});
