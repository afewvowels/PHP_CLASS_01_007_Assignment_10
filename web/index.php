<!DOCTYPE html>

<html>

  <head>
    <title>CS: Clothing Store</title>

    <meta charset="utf-8">
    <?php include('./includes/style.php'); ?>
    <?php include('./includes/scripts.php'); ?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

    <?php include('./includes/mysql.php'); ?>
    <?php include_once('./includes/functions.php'); ?>
  </head>

  <body class='body'>
    <section id='main_wrapper'>
      <header>
        <?php include('./includes/inc_header.php'); ?>
      </header>

      <nav>
        <?php include('./includes/inc_nav.php'); ?>
      </nav>

      <section id='main_form' class='main_form'>
        <?php
          if(isset($_POST['submitted'])) {
            create_product_page($_POST['item_id']);
          } else {
            include('./includes/splash_page.php');
          }
        ?>
      </section>

      <footer>
        <?php include('./includes/inc_footer.php'); ?>
      </footer>
    </section>
  </body>
</html>
