<section id='coats_page' class='coats_page'>
  <h2>Coats</h2>
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
      create_product_preview(1);
      create_product_preview(4);
      create_product_preview(9);
    }
    ?>
  </section>
</section>
