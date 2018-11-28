<link rel='stylesheet' href='./css/style_splash.css' type='text/css' />
<section id='coats_page' class='coats_page'>
  <h2>Accessories</h2>
  <section id='main_splash_container'>
    <?php
    include_once('./functions.php');

    if(isset($_POST['submitted']) || isset($_POST['color_submitted'])) {
      if(isset($_POST['color_submitted'])) {
        create_product_page($_POST['clothing_id']);
      } else {
        create_product_page($_POST['item_id']);
      }
    } else {
      create_product_preview(30);
      create_product_preview(34);
      create_product_preview(39);
      create_product_preview(48);
      create_product_preview(51);
      create_product_preview(53);
    }
    ?>
  </section>
</section>
