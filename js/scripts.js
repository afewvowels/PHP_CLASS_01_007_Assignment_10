// var login_button = document.getElementById('login_button_2');
// var compact_login = document.getElementById('submenu');
// var create_account_urls = document.getElementsByClassName('create_account_url');
// var create_user_form = document.getElementsByClassName('user_info_entry_form');
//
// var i;
// for (i=0; i<2; i++) {
//   create_account_urls[i].addEventListener('click', show_user_info_entry_form);
// }

$(document).ready(function() {
  // Load page on main page load
  $('#main_form').load('./includes/splash_page.php');
});

$(document).ready(function() {
  // Go to create user account page
  $('.create_account_url').click(function() {
    console.log('worked');
    $('#main_form').load('./includes/form_user_info.php');
  });
});

$(document).ready(function() {
  $('#menu_coats').click(function() {
    $('#main_form').load('./includes/clothes/coats/coats.php');
  });
});

$(document).ready(function() {
  // Show/hide compact login menu
  $('#login_button_2').click(function() {
    $('#submenu').toggleClass('unhide_submenu');
  });
});

$(document).on('click', '.coat_01', function() {
  $('#main_form').load('./includes/clothes/coats/coat_01.php');
});

$(document).on('click', '.coat_02', function() {
  $('#main_form').load('./includes/clothes/coats/coat_02.php');
});

$(document).on('click', '.coat_03', function() {
  $('#main_form').load('./includes/clothes/coats/coat_03.php');
});

// $(document).ready(function() {
//   $('.coat_01').click(function() {
//     $('#main_form').load('./includes/clothes/coats/coat_01.php');
//   });
// });
//
// $(document).ready(function() {
//   $('.coat_02').click(function() {
//     $('#main_form').load('./includes/clothes/coats/coat_02.php');
//   });
// });
//
// $(document).ready(function() {
//   $('.coat_03').click(function() {
//     $('#main_form').load('./includes/clothes/coats/coat_03.php');
//   });
// });



// var i;
// for (i=0; i<2; i++) {
//   create_account_urls[i].addEventListener('click', show_user_info_entry_form);
// }
//
// login_button.addEventListener('click', show_compact_login);
//
// function show_user_info_entry_form() {
//   if (create_user_form[0].classList.contains('user_info_entry_form_unhide')) {
//     create_user_form[0].classList.remove('user_info_entry_form_unhide');
//   } else if (!create_user_form[0].classList.contains('user_info_entry_form_unhide')) {
//     create_user_form[0].classList.add('user_info_entry_form_unhide');
//   }
// }
//
// function show_compact_login() {
//   if (compact_login.classList.contains('unhide_submenu')) {
//     compact_login.classList.remove('unhide_submenu');
//   } else if (!compact_login.classList.contains('unhide_submenu')){
//     compact_login.classList.add('unhide_submenu');
//   }
// }
