<!DOCTYPE html>

<html>

  <head>
    <title>CS: Clothing Store</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='./css/style.css' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <?php include('./includes/mysql.php'); ?>
    <?php include('./includes/functions.php'); ?>
  </head>

  <body class='body'>
    <header>
      <?php include('./includes/inc_header.php'); ?>
    </header>

    <section class='main_form'>
      <?php include('./includes/form_user_info.php'); ?>
    </section>

    <footer>
      <?php include('./includes/inc_footer.php'); ?>
    </footer>
  </body>
</html>
