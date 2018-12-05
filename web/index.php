<?php
  ob_start();
?>
<!DOCTYPE html>

<html>

  <head>
    <title>CS: Clothing Store</title>

    <meta charset="utf-8">
    <?php include('./includes/bundles/style.php'); ?>
    <?php include('./includes/bundles/scripts.php'); ?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

    <?php include('../secure_files/mysql.php'); ?>
    <?php include_once('./includes/functions.php'); ?>
  </head>

  <body class='body'>
    <section id='main_wrapper'>
      <header>
        <?php include('./includes/html_elements/inc_header.php'); ?>
      </header>

      <nav>
        <?php include('./includes/html_elements/inc_nav.php'); ?>
      </nav>

      <section id='main_form' class='main_form'>
        <?php
          if(isset($_POST['submitted'])) {
            create_product_page($_POST['item_id']);
          } else if(isset($_POST['customer_submitted'])) {
            include('./includes/forms/form_user_info_handle.php');
          } else if(isset($_POST['add_item_to_cart']) && isset($_POST['item_quantity'])) {
            include('./includes/forms/form_show_cart.php');
          } else if(isset($_POST['submit_login_info'])) {
            validate_user_login($_POST['email_field_login'],$_POST['password_field_login']);
          } else if(isset($_POST['submit_login_info_compact'])) {
            validate_user_login($_POST['email_field_login_compact'],$_POST['password_field_login_compact']);
          } else if(isset($_POST['user_logout'])) {
            unset_cookie();
          } else if(isset($_POST['view_cart'])) {
            include('./includes/forms/form_show_cart.php');
          } else {
            include('./includes/html_elements/splash_page.php');
          }
        ?>
      </section>

      <footer>
        <?php include('./includes/html_elements/inc_footer.php'); ?>
      </footer>
    </section>
  </body>
</html>
<?php
  ob_end_flush();
?>
