<link rel='stylesheet' href='./css/style_form.css' type='text/css' />

<?php include('./functions.php'); ?>

<section id='user_info_entry_form' class='user_info_entry_form'>
  <div id='background_fill'>
    <div id='form_wrapper'>
      <!--Form is wrapped in a section tag-->
      <section>

        <!--Input objects are all contained within this single form tag-->
        <form action='' method='POST' id='main_form' class='text_align_object' onsubmit='accepted()'>
          <fieldset>
            <legend class='form_title_legend'>User Information</legend>
            <span id='form_span'>
              <?php
                create_form_field('Full name:', 'text', 'full_name', 'full_name', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your name here', 'placeholder'=>'Please enter your name here', 'pattern'=>'.{2,20}']);
                create_form_field('Password:', 'password', 'password_field', 'password_field', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your password here', 'placeholder'=>'Please enter your password here', 'pattern'=>'[A-Za-z]{2,20}']);
                create_form_field('Email:', 'email', 'email_field', 'email_field', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your email here', 'placeholder'=>'email@domain.com']);
                create_form_field('Phone number:', 'text', 'number_field', 'number_field', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your phone number here', 'placeholder'=>'123-456-7890']);
              ?>
            </span>
            <!--These are the submit and reset button inputs-->
            <p id='form_buttons'>
              <input type='submit' name='submit_button' id='submit_button' value='Click to submit!' />
              <input type='reset' name='reset_button' id='reset_button' value='Click to reset!' />
            </p>
          </fieldset>


          <input type='hidden' name='submitted' id='submitted' value='submitted' />
        </form>
      </section>
    </div>
  </div>
</section>
