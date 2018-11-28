<link rel='stylesheet' href='./css/style_splash.css' type='text/css' />
<section id='splash_page' class='splash_page'>
  <section id='main_splash_container'>
    <?php
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
        create_product_preview(55);
        create_product_preview(14);
        create_product_preview(16);
        create_product_preview(17);
        create_product_preview(19);
        create_product_preview(21);
        create_product_preview(25);
        create_product_preview(30);
        create_product_preview(34);
        create_product_preview(39);
        create_product_preview(41);
        create_product_preview(46);
        create_product_preview(48);
        create_product_preview(51);
        create_product_preview(53);
      }
    ?>
  </section>
</section>
