// $(document).ready(function() {
//   // Load page on main page load
//   $('#main_form').load('./includes/splash_page.php');
// });

$(document).ready(function() {
  // Go to create user account page
  $('.create_account_url').click(function() {
    $('#main_form').load('./includes/forms/form_user_info.php');
  });

  $('#menu_coats').click(function() {
    $('#main_form').load('./includes/clothes/coats.php');
  });

  $('#menu_shirts').click(function() {
    $('#main_form').load('./includes/clothes/shirts.php');
  });

  $('#menu_pants').click(function() {
    $('#main_form').load('./includes/clothes/pants.php');
  });

  $('#menu_accessories').click(function() {
    $('#main_form').load('./includes/clothes/accessories.php');
  });

  $('#login_button_2').click(function() {
    $('#submenu').toggleClass('unhide_submenu');
  });
});

// $(document).ready(function() {
//   $('#menu_coats').click(function() {
//     $('#main_form').load('./includes/clothes/coats.php');
//   });
// });
//
// $(document).ready(function() {
//   $('#menu_shirts').click(function() {
//     $('#main_form').load('./includes/clothes/shirts.php');
//   });
// });
//
// $(document).ready(function() {
//   $('#menu_pants').click(function() {
//     $('#main_form').load('./includes/clothes/pants.php');
//   });
// });
//
// $(document).ready(function() {
//   $('#menu_accessories').click(function() {
//     $('#main_form').load('./includes/clothes/accessories.php');
//   });
// });
//
// $(document).ready(function() {
//   // Show/hide compact login menu
//   $('#login_button_2').click(function() {
//     $('#submenu').toggleClass('unhide_submenu');
//   });
// });
