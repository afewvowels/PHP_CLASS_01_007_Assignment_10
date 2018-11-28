// $(document).ready(function() {
//   // Load page on main page load
//   $('#main_form').load('./includes/splash_page.php');
// });

$(document).ready(function() {
  // Go to create user account page
  $('.create_account_url').click(function() {
    console.log('worked');
    $('#main_form').load('./includes/form_user_info.php');
  });
});

$(document).ready(function() {
  $('#menu_coats').click(function() {
    $('#main_form').load('./includes/coats.php');
  });
});

$(document).ready(function() {
  $('#menu_shirts').click(function() {
    $('#main_form').load('./includes/shirts.php');
  });
});

$(document).ready(function() {
  $('#menu_pants').click(function() {
    $('#main_form').load('./includes/pants.php');
  });
});

$(document).ready(function() {
  $('#menu_accessories').click(function() {
    $('#main_form').load('./includes/accessories.php');
  });
});

$(document).ready(function() {
  // Show/hide compact login menu
  $('#login_button_2').click(function() {
    $('#submenu').toggleClass('unhide_submenu');
  });
});

// $(document).on('click', '.coat_01', function() {
//   $('#main_form').load('./includes/clothes/coats/coat_01.php');
// });
//
// $(document).on('click', '.coat_02', function() {
//   $('#main_form').load('./includes/clothes/coats/coat_02.php');
// });
//
// $(document).on('click', '.coat_03', function() {
//   $('#main_form').load('./includes/clothes/coats/coat_03.php');
// });
