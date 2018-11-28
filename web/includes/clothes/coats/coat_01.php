<?php
  error_reporting(E_ALL);
  ini_set('display_errors',1);

  $servername = 'localhost';
  $username = 'kbsmith01_user1';
  $password = 'Mynewpassword2';
  $dbname = 'kbsmith01_cs';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $qry = "SELECT clothing_photo, clothing_description_id, clothing_price  FROM cs_clothing_items WHERE cs_clothing_id = 1";
  // $image_number_query = mysqli_query($conn, $qry);
  // $image_number_query->data_seek(0);
  // mysqli_data_seek($image_number_query, 89);
  // while ($image_number = $image_number_query->fetch_assoc()) {
  //   $related_image_number = $image_number['clothing_photo'];
	// $related_description = $image_number['clothing_description_id'];
  // }

  $result = $conn->query($qry);
  $row = mysqli_fetch_row($result);
  $related_image_number = $row[0];
  $related_description = $row[1];
  $price = $row[2];
  $sale = $row[2];
  mysqli_free_result($result);


  $qry = "SELECT clothing_photo_path FROM cs_clothing_photos WHERE cs_clothing_photo_id = '" . $related_image_number . "'";
  // $result = mysqli_query($conn, $qry);
  // $result->data_seek(0);
  // mysqli_data_seek($result, $related_image_number);
  // while ($cell = $result->fetch_assoc()) {
  //   $image = $cell['clothing_photo_path'];
  // }

  if($result = mysqli_query($conn, $qry)) {
    mysqli_data_seek($result, 0);
    $cell = mysqli_fetch_row($result);
    $image_path = $cell[0];
    mysqli_free_result($result);
  }

  $qry = "SELECT description FROM cs_clothing_descriptions WHERE cs_clothing_description_id = '" . $related_description . "'";
  // $result = mysqli_query($conn, $qry);
  // $result->data_seek(0);
  // mysqli_data_seek($result, $related_description);
  // while ($cell = $result->fetch_assoc()) {
  //   $description = $cell['description'];
  // }

  if($result = mysqli_query($conn, $qry)) {
    mysqli_data_seek($result, 0);
    $cell = mysqli_fetch_row($result);
    $description = $cell[0];
    mysqli_free_result($result);
  }

  $conn->close();
?>

<section id='flex_container'>
  <section id='main_product_container'>
    <img src='<?php echo $image_path ?>'>
    <p id='description'>
      <?php echo $description ?>
    </p>
    <section id='color_select'>
      <input type='color' value='#000000'>
      <input type='color' value='#525252'>
      <input type='color' value='#C40000'>
    </section>
    <section id='size_select'>
      <label>Size:</label>
      <select name='clothes_sizes' size='1'>
        <option value='0'>XX-Small</option>
        <option value='1'>X-Small</option>
        <option value='2'>Small</option>
        <option value='3'>Medium</option>
        <option value='4'>Large</option>
        <option value='5'>X-Large</option>
        <option value='6'>XX-Large</option>
      </select>
    </section>
    <section id='price_info'>
      <p>Price:</p>
      <p>$<?php echo $price ?></p>
    </section>
    <section id='sale_info'>
      <p>Sale</p>
      <p>$<?php echo $sale ?></p>
    </section>
    <section id='qty_info'>
      <input type='number' name='quantity' min='1' max='10'>
    </section>
    <section id='cart_info'>
      <input type='button' value='Add To Cart'>
    </section>
  </section>
</section>
