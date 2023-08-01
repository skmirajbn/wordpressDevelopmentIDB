jQuery(document).ready(function () {
  // Show/hide the scroll-to-top button based on the user's scroll position
  jQuery(window).scroll(function () {
    console.log(jQuery(this).scrollTop());
    if (jQuery(this).scrollTop() > 100) {
      jQuery("#scrollToTopBtn").fadeIn();
    } else {
      jQuery("#scrollToTopBtn").fadeOut();
    }
  });

  // When the scroll-to-top button is clicked, animate the scroll to the top of the page
  jQuery("#scrollToTopBtn").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  });
});
