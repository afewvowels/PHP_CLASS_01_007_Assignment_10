<?php
$errors_array = array();
$full_name = '';
$email_address = '';
$password = '';
$phone_number = '';

if(!empty($_POST['full_name']) && is_string($_POST['full_name'])) {
  $full_name = htmlspecialchars(add_slashes($_POST['full_name']));
} else {
  $errors_array['full_name'] = "Please enter a valid name";
}

if(!empty($_POST['email_field']) && filter_var($_POST['email_field']), FILTER_VALIDATE_EMAIL) {
  $email_addresss = htmlspecialchars(add_slashes($_POST['email_field']));
}
} else {
  $errors_array['email_field'] = "Please enter a valid email address";
}

if(!empty($_POST['password_field']) && is_string($_POST['password_field'])) {
  $password = htmlspecialchars(add_slashes($_POST['password_field']));
}
} else {
  $errors_array['password_field'] = "Please enter a valid password";
}

if(!empty($_POST['number_field']) && is_string($_POST['number_field'])) {
  $phone_number = htmlspecialchars(add_slashes($_POST['number_field']));
}
} else {
  $errors_array['number_field'] = "Please enter a valid phone number";
}


if(count($errors_array) > 0) {

} else {
  mysqli_query($link, 'AUTOCOMMIT = 0');
}

?>
