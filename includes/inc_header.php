<section id='nav_section'>
  <section id='logo'>
    <a href='display_errors.php'><h2>CS</h2></a>
    <h1>The Clothing Store</h1>
  </section>
  <section id='user_info'>
    <section id='login_fullsize'>
      <span class='login_fields'>
        <?php
          create_login_field('Email:', 'email', 'email_field_login', 'email_field_login', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your email here', 'placeholder'=>'email@domain.com']);
        ?>
      </span>
      <span class='login_fields'>
        <?php
          create_login_field('Password:', 'password', 'password_field_login', 'password_field_login', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your password here', 'placeholder'=>'Please enter your password here', 'pattern'=>'[A-Za-z]{2,20}']);
        ?>
      </span>
    </section>
    <section class='login_links'>
      <span class='login_links_account_info'>
        <p class='p_link create_account_url' href='' target='_self'>Create Account</p>
        <p class='p_link'>Forgot password?</p>
      </span>
      <input type='button' class='login_button submit_button' value='Submit'>
    </section>
    <section id='login_compact'>
      <section class='login_fields'>
        <ul class='main_menu'>
          <li id='submenu_parent'><input type='button' id='login_button_2' class='login_button submit_button' value='Login'>
            <ul id='submenu' class='submenu'>
              <li>
                <span class='login_fields'>
                  <?php
                    create_login_field('Email:', 'email', 'email_field_login_compact', 'email_field_login_compact', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your email here', 'placeholder'=>'email@domain.com']);
                  ?>
                </span>
                <span class='login_fields'>
                  <?php
                    create_login_field('Password:', 'password', 'password_field_login_compact', 'password_field_login_compact', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your password here', 'placeholder'=>'Please enter your password here', 'pattern'=>'[A-Za-z]{2,20}']);
                  ?>
                </span>
                <span class='login_links_compact'>
                  <span class='login_links_account_info'>
                    <p class='p_link create_account_url'>Create Account</p>
                    <p class='p_link'>Forgot password?</p>
                  </span>
                  <input type='button' class='submit_button login_button' value='Submit'>
                </span>
              </li>
            </ul>
          </li>
        </ul>
    </section>
  </section>
</section>
