//jquery script to give nav-links active class
$(function() {
  var sPath = window.location.pathname;
  var sPage = sPath.substring(sPath.lastIndexOf("/") + 1);
  $('.nav-link[href="' + sPage + '"]')
    .parent()
    .addClass("active");
});
