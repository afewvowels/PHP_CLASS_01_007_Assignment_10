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
            <legend class='form_title_legend'>Address Entry Form</legend>
            <span id='form_span'>
              <?php
                create_form_field('Address 1:', 'text', 'address_1', 'address_1', ['maxlength'=>'60', 'size'=>'20', 'title'=>'Please enter your name here', 'placeholder'=>'Please enter your address here', 'pattern'=>'.{2,20}']);
                create_form_field('Address 2:', 'text', 'address_2', 'address_2', ['maxlength'=>'60', 'size'=>'20', 'title'=>'Please enter your name here', 'placeholder'=>'Please enter your address here', 'pattern'=>'.{2,20}']);
                create_form_field('City:', 'text', 'city', 'city', ['maxlength'=>'30', 'size'=>'20', 'title'=>'Please enter your city here', 'placeholder'=>'Please enter your city here', 'pattern'=>'.{2,20}']);
                create_form_field('State:', 'text', 'state', 'state', ['maxlength'=>'2', 'size'=>'20', 'title'=>'Please enter your name here', 'placeholder'=>'Please enter your state here', 'pattern'=>'.{2,20}']);
                create_form_field('Zip:', 'text', 'zip_code', 'zip_code', ['maxlength'=>'5', 'size'=>'20', 'title'=>'Please enter your zip code here', 'placeholder'=>'Please enter your zip code here', 'pattern'=>'.{2,20}']);
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
