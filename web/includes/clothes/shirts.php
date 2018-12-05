<section id='coats_page' class='coats_page'>
  <h2>Shirts</h2>
  <section id='main_splash_container'>
    <?php
    include_once('../functions.php');

    if(isset($_POST['submitted']) || isset($_POST['color_submitted'])) {
      if(isset($_POST['color_submitted'])) {
        create_product_page($_POST['clothing_id']);
      } else {
        create_product_page($_POST['item_id']);
      }
    } else {
      create_product_preview(17);
      create_product_preview(19);
      create_product_preview(21);
      create_product_preview(25);
    }
    ?>
  </section>
  <h2>T-Shirts</h2>
  <section id='main_splash_container'>
    <?php
    include_once('../functions.php');

    if(isset($_POST['submitted']) || isset($_POST['color_submitted'])) {
      if(isset($_POST['color_submitted'])) {
        create_product_page($_POST['clothing_id']);
      } else {
        create_product_page($_POST['item_id']);
      }
    } else {
      create_product_preview(41);
      create_product_preview(46);
    }
    ?>
  </section>
</section>
