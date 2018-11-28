<?php
  $image = "SELECT clothing_photo FROM cs_clothing_items WHERE cs_clothing_id = 89"
?>

<link rel='stylesheet' href='./css/style_product.css' type='text/css' />
<section id='flex_container'>
  <section id='main_product_container'>
    <img src='<? echo $image ?>'>
    <p id='description'>
      Suspendisse ipsum tortor, mattis a efficitur nec, venenatis a quam. Fusce luctus fermentum neque vitae aliquam. Sed vel elit volutpat, semper diam in, mollis diam. Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus.
    </p>
    <section id='color_select'>
      <input type='color' value='#000000'>
      <input type='color' value='#525252'>
      <input type='color' value='#C40000'>
    </section>
    <section id='size_select'>
      <label>Size:</label>
      <select name='clothes_sizes' size='1'>
        <option value='xx-s'>XX-Small</option>
        <option value='x-s'>X-Small</option>
        <option value='s'>Small</option>
        <option value='m'>Medium</option>
        <option value='l'>Large</option>
        <option value='x-l'>X-Large</option>
        <option value='xx-l'>XX-Large</option>
      </select>
    </section>
    <section id='price_info'>
      <p>Price:</p>
      <p>$100.00</p>
    </section>
    <section id='sale_info'>
      <p>Sale</p>
      <p>$80.00</p>
    </section>
    <section id='qty_info'>
      <input type='number'>
    </section>
    <section id='cart_info'>
      <input type='button' value='View Cart'>
    </section>
  </section>
</section>
