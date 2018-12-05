<?php
function add_slashes($data){
  if(get_magic_quotes_gpc()) $data = stripslashes($data);
  return addslashes($data);
}

function strip_slashes($data){
  return stripslashes($data);
}

function create_login_field($label='', $type='text', $name='', $id='', $extras=array()){
	if(!empty($_POST[$name])){
		$value = $_POST[$name]; //$first_name, $last_name
		$value = stripslashes($value);
	}

	echo "<p>";
	if(!empty($label)) echo "<label for='$id' class='login_input_label'>$label</label>";
	if(($type=='text') || ($type=='email') || ($type=='tel') || ($type=='url') || ($type=='password') || ($type=='date') || ($type=='color') || ($type=='number')){
		echo "<input type='$type' id='$id' name='$name'";
		if(!empty($value)) echo "value='$value'";
			if(count($extras) > 0){
				foreach($extras as $key=>$var){
					echo "$key='$var'";
				}
			}
		echo ">";
	}elseif($type=='textarea'){
		echo "<textarea id='$id' name='$name'";
			if(count($extras) > 0){
				foreach($extras as $key=>$var){
					echo "$key='$var'";
				}
			}
		echo ">";
		if(!empty($value)) echo "$value";
		echo "</textarea>";
	}
	echo "</p>";
}

function create_form_field($label='', $type='text', $name='', $id='', $extras=array()){
	if(!empty($_POST[$name])){
		$value = $_POST[$name]; //$first_name, $last_name
		$value = stripslashes($value);
	}

	echo "<p>";
	if(!empty($label)) echo "<label for='$id' class='input_label'>$label</label>";
	if(($type=='text') || ($type=='email') || ($type=='tel') || ($type=='url') || ($type=='password') || ($type=='date') || ($type=='color') || ($type=='number')){
		echo "<input type='$type' id='$id' name='$name'";
		if(!empty($value)) echo "value='$value'";
			if(count($extras) > 0){
				foreach($extras as $key=>$var){
					echo "$key='$var'";
				}
			}
		echo ">";
	}elseif($type=='textarea'){
		echo "<textarea id='$id' name='$name'";
			if(count($extras) > 0){
				foreach($extras as $key=>$var){
					echo "$key='$var'";
				}
			}
		echo ">";
		if(!empty($value)) echo "$value";
		echo "</textarea>";
	}
	echo "</p>";
}

function create_product_preview($clothing_id=0) {
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
	$qry = "SELECT clothing_photo FROM cs_clothing_items WHERE cs_clothing_id = $clothing_id";

	$result = $conn->query($qry);
	$row = mysqli_fetch_row($result);
	$image_path = $row[0];

	mysqli_free_result($result);

	$qry = "SELECT clothing_photo_path FROM cs_clothing_photos WHERE cs_clothing_photo_id = $image_path";

	$result = $conn->query($qry);
	$row = mysqli_fetch_row($result);
	$image_path = $row[0];

	mysqli_free_result($result);

	echo "<form action='' method='POST' id='product_image_form_$clothing_id' class='product_link_form'>";
	echo "<input type='hidden' name='submitted' id='submitted' value='submitted' />";
	echo "<input type='hidden' name='item_id' id='item_id' value='$clothing_id' />";
	echo "<input class='product_link_image' type='image' name='product_image' value='$clothing_id' src='$image_path'>";
	echo "</form>";

  $conn->close();
}

function create_product_page($clothing_id=0) {
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
  $qry = "SELECT clothing_photo, clothing_description_id, clothing_price, clothing_sale_price, cs_item_id  FROM cs_clothing_items WHERE cs_clothing_id = $clothing_id";

  $result = $conn->query($qry);
  while($row = $result->fetch_assoc()) {
	  $related_image_number = $row['clothing_photo'];
	  $related_description = $row['clothing_description_id'];
	  $price = $row['clothing_price'];
	  $sale = $row['clothing_sale_price'];
		$item_id = $row['cs_item_id'];
	}
  mysqli_free_result($result);


  $qry = "SELECT clothing_photo_path FROM cs_clothing_photos WHERE cs_clothing_photo_id = '" . $related_image_number . "'";

  if($result = mysqli_query($conn, $qry)) {
    mysqli_data_seek($result, 0);
    $cell = mysqli_fetch_row($result);
    $image_path = $cell[0];
    mysqli_free_result($result);
  }

  $qry = "SELECT description FROM cs_clothing_descriptions WHERE cs_clothing_description_id = '" . $related_description . "'";

  if($result = mysqli_query($conn, $qry)) {
    mysqli_data_seek($result, 0);
    $cell = mysqli_fetch_row($result);
    $description = $cell[0];
    mysqli_free_result($result);
  }

  $conn->close();

	echo "<section id='flex_container'>
	  <section id='main_product_container'>
			<section id='img_container'>
		    <img src='$image_path'>
			</section>
	    <p id='description'>
	      $description
	    </p>
	    <section id='color_select'>";
				create_color_swatches($item_id);
	    echo "</section>
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
		    <article id='price_cost'>
		      <p>Price:</p>
		      <p>$$price</p>
		    </article>";
				if($price != $sale) {
					echo "
			    <article id='sale_cost'>
			      <p>Sale</p>
			      <p>$$sale</p>
			    </article>";
				}
			echo "</section>
			<form id='cart' action='' method='POST'>
		    <article id='qty_info'>
					<label>Qty:</label>
		      <input type='number' id='item_quantity' name='item_quantity' min='1' max='10' value='1'>
		    </article>
		    <article id='cart_info'>
			    <button id='button_add_to_cart' name='button_add_to_cart'>Add To Cart</button>
					<input type='hidden' value='add_item_to_cart' id='add_item_to_cart' name='add_item_to_cart'>
		    </article>
			</form>
	  </section>
	</section>";
}

function create_color_swatches($clothing_item_id=0) {
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

  $qry = "SELECT cs_clothing_id, clothing_color_id FROM cs_clothing_items WHERE cs_item_id = $clothing_item_id";
  $clothing_item_id_result = $conn->query($qry);

	while($rows = $clothing_item_id_result->fetch_assoc()) {
		$clothing_id = $rows['cs_clothing_id'];
		$color_id = $rows['clothing_color_id'];

		$qry = "SELECT color_hex FROM cs_clothing_colors WHERE cs_clothing_color_id = $color_id";
	  $color_hex_result = $conn->query($qry);
	  $color_hex_row = $color_hex_result->fetch_assoc();
	  $color_hex = $color_hex_row['color_hex'];

		echo "<form method='POST' action='' class='color_swatch_form'>";
		echo "<button class='color_swatch' name='clothing_id' style='background-color:#$color_hex;' value='$clothing_id'></button>";
		echo "<input type='hidden' name='color_submitted' id='color_submitted' value='color_submitted' />";
		echo "</form>";
	}

	mysqli_free_result($clothing_item_id_result);
}

function create_login_header_field() {

  echo "<section id='user_info'>";
	if(!isset($_COOKIE['user'])) {
		echo "<form action='' method='POST'>
	    <section id='login_fullsize'>
	      <span class='login_fields'>";
	          create_login_field('Email:', 'email', 'email_field_login', 'email_field_login', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your email here', 'placeholder'=>'email@domain.com']);
	      echo "</span>
	      <span class='login_fields'>";
	          create_login_field('Password:', 'text', 'password_field_login', 'password_field_login', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your password here', 'placeholder'=>'Please enter your password here', 'pattern'=>'[A-Za-z]{2,20}']);
	      echo "</span>
	    </section>
	    <section class='login_links'>
	      <span class='login_links_account_info'>
	        <p class='p_link create_account_url' href='' target='_self'>Create Account</p>
	        <p class='p_link'>Forgot password?</p>
	      </span>
				<button class='login_button submit_button'>Submit</button>
				<input type='hidden' id='submit_login_info' name='submit_login_info' value='submit_login_info'>
	    </section>
		</form>
    <section id='login_compact'>
      <section class='login_fields'>
        <ul class='main_menu'>
          <li id='submenu_parent'><input type='button' id='login_button_2' class='login_button submit_button' value='Login'>
            <ul id='submenu' class='submenu'>
              <li>
								<form action='' method='POST'>
	                <span class='login_fields'>";
	                    create_login_field('Email:', 'email', 'email_field_login_compact', 'email_field_login_compact', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your email here', 'placeholder'=>'email@domain.com']);
	                echo "</span>
	                <span class='login_fields'>";
	                    create_login_field('Password:', 'text', 'password_field_login_compact', 'password_field_login_compact', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your password here', 'placeholder'=>'Please enter your password here', 'pattern'=>'[A-Za-z]{2,20}']);
	                echo "</span>
	                <span class='login_links_compact'>
	                  <span class='login_links_account_info'>
	                    <p class='p_link create_account_url'>Create Account</p>
	                    <p class='p_link'>Forgot password?</p>
	                  </span>
										<button class='login_button submit_button'>Submit</button>
										<input type='hidden' id='submit_login_info_compact' name='submit_login_info_compact' value='submit_login_info_compact'>
	                </span>
								</form>
              </li>
            </ul>
          </li>
        </ul>
    </section>";
	} else {
		$cookie_id = 'user';
		echo "<article id='logged_in_info_and_cart'>";
		echo "<span id='logged_in_info'>";
		echo "<p>Logged in as:</p>";
		echo "<p>$_COOKIE[$cookie_id]</p>";
		echo "</span>";
		echo "<span id='logout_and_cart_button_container'>";
		echo "<form action='' method='POST'>";
		echo "<button type='submit' id='user_logout_button' name='user_logout_button'>Logout</button>";
		echo "<input type='hidden' value='user_logout' name='user_logout' id='user_logout'>";
		echo "</form>";
		echo "<form action='' method='POST'>";
		echo "<button type=submit' id='view_cart_button' name='view_cart_button'>View Cart</button>";
		echo "<input type='hidden' value='view_cart' name='view_cart' id='view_cart'>";
		echo "</form>";
		echo "</span>";
		echo "</article>";
	}
  echo "</section>";
}

function check_if_user_exists($user_id) {
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

	$qry = "SELECT * FROM cs_customers WHERE email = '$user_id'";

	$result = $conn->query($qry);

	if ($result->num_rows !== 0) {
		return true;
	} else {
		return false;
	}
}

function add_customer_to_database($_name, $_email, $_password, $_phone) {
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

	$qry = "INSERT INTO cs_customers(full_name, email, phone, password) VALUES ('$_name', '$_email', '$_phone', '$_password')";

	if($conn->query($qry) === TRUE) {
		echo "<p>Successfully created customer ID</p>";
	} else {
		echo "<p>Error creating customer ID</p>";
	}

	$conn->close();
}

function validate_user_login($email, $user_password) {
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

	$qry = "SELECT * FROM cs_customers WHERE email='$email' AND password='$user_password'";

	if($conn->query($qry)) {
		create_cookie($email);
		echo "<p>User login successsful</p>";
		return true;
	} else {
		echo "<p>Bad user info</p>";
		return false;
	}

	$conn->close();
}

function create_cookie($email) {
	$cookie_name = 'user';
	$cookie_value = $email;
	setcookie($cookie_name, $cookie_value, 0, "/");
	create_shopping_cart();
	Header('Location: '.$_SERVER['PHP_SELF']);
}

function unset_cookie() {
	$cookie_name = 'user';
	unset ($_COOKIE[$cookie_name]);
	setcookie($cookie_name, null, -1, "/");

	$cookie_name = 'cart_id';
	unset ($_COOKIE[$cookie_name]);
	setcookie($cookie_name, null, -1, "/");
	Header('Location: '.$_SERVER['PHP_SELF']);
}

function create_shopping_cart() {
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

	$qry = "SELECT cs_cart_id FROM cs_carts ORDER BY cs_cart_id DESC LIMIT 1";

	$result = $conn->query($qry);
	$index = $result->fetch_assoc();

	if($result === FALSE) {
		$new_cart_id = 1;
	} else {
		$new_cart_id = $index['cs_cart_id'] + 1;
	}

	$cookie_id='cart_id';
	setcookie($cookie_id,$new_cart_id,0,"/");

	$cookie_id='user';
	$qry = "SELECT cs_customer_id FROM cs_customers WHERE email='$_COOKIE[$cookie_id]'";
	$result = $conn->query($qry);
	$customer_id = $result->fetch_assoc();

	$qry = "INSERT INTO `cs_carts`(`cs_case_id`, `cs_cart_id`, `cs_customer_id`, `cs_clothing_id`, `cs_clothing_size_id`, `cs_clothing_color_id`, `cs_clothing_price_id`, `quantity`, `date_added`, `date_modified`)
					VALUES ('', '$new_cart_id', '$customer_id', '', '', '', '', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
	if(!$conn->query($qry)) {
		echo "<p>Cart not created</p>";
	} else {
		echo "<p>Cart created successfully</p>";
	}
}
?>
