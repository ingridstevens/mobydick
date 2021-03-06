<?php
/*  
Title: Ticket Order
Method: post
Message: Data saved as a post of type ticket_order.
Logged in: true
*/


/**
 * The shortcode for this form is:
 * [piklist_form form="ticket-order" add_on="theme"]
 */


/**
 * The fields in this form are exactly like the fields in piklist-demos/parts/meta-boxes/field-validate.php
 * Only the 'scope' paramater needed to be added.
 */

  // Set where to save this form
  piklist('field', array(
    'type' => 'hidden'
    ,'scope' => 'post'
    ,'field' => 'post_type'
    ,'value' => 'piklist_demo'
  ));

  piklist('field', array(
    'type' => 'hidden'
    ,'scope' => 'post'
    ,'field' => 'post_status'
    ,'value' => 'pending' // It's a good idea to save any front end form submissions to a PENDING status
  ));

  piklist('field', array(
    'type' => 'text'
    ,'scope' => 'post' // post_title is in the wp_posts table, so scope is: post
    ,'field' => 'post_title'
    ,'label' => 'Title'
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
  ));

 
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'validate_text_required'
    ,'scope' => 'post_meta' // scope needs to be set on EVERY field for front-end forms.
    ,'label' => 'Text Required'
    ,'description' => "required => true"
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
    ,'required' => true
  ));

  piklist('field', array(
    'type'    => 'group'
    ,'field'   => 'validate_group_required'
    ,'scope' => 'post_meta'
    ,'label'   => 'Group Required'
    ,'add_more'=> true
    ,'fields'  => array(
      array(
        'type' => 'text'
        ,'field' => 'name'
        ,'columns' => 8
        ,'attributes' => array(
          'placeholder' => 'Name'
        )
      )
      ,array(
        'type' => 'checkbox'
        ,'field' => 'hierarchical'
        ,'required' => true
        ,'columns' => 4
        ,'choices' => array(
          'true' => 'Hierarchical'
        )
      )
    )
  ));

  piklist('field', array(
    'type' => 'text'
    ,'label' => 'File Name'
    ,'field' => 'validate_file_name'
    ,'scope' => 'post_meta'
    ,'description' => 'Converts multiple words to a valid file name'
    ,'sanitize' => array(
      array(
        'type' => 'file_name'
      )
    )
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'validate_emaildomain'
    ,'scope' => 'post_meta'
    ,'label' => 'Email address'
    ,'description' => __('Validate Email and Email Domain')
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
    ,'validate' => array(
      array(
        'type' => 'email'
      )
      ,array(
        'type' => 'email_domain'
      )
    )
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'validate_file_exists'
    ,'scope' => 'post_meta'
    ,'label' => __('File exists?')
    ,'description' => 'Test with: http://wordpress.org/plugins/about/readme.txt'
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
    ,'validate' => array(
      array(
        'type' => 'file_exists'
      )
    )
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'validate_image'
    ,'scope' => 'post_meta'
    ,'label' => __('Image')
    ,'description' => 'Test with: http://piklist.com/wp-content/themes/piklistcom-base/images/piklist-logo@2x.png'
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
    ,'validate' => array(
      array(
        'type' => 'image'
      )
    )
  ));

  piklist('field', array(
    'type' => 'checkbox'
    ,'field' => 'validate_checkbox_limit'
    ,'scope' => 'post_meta'
    ,'label' => 'Checkbox'
    ,'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ,'value' => 'third'
    ,'choices' => array(
      'first' => 'First Choice'
      ,'second' => 'Second Choice'
      ,'third' => 'Third Choice'
    )
    ,'validate' => array(
      array(
        'type' => 'limit'
        ,'options' => array(
          'min' => 2
          ,'max' => 2
        )
      )
    )
  ));

  piklist('field', array(
    'type' => 'file'
    ,'field' => 'validate_upload_media_limit'
    ,'scope' => 'post_meta'
    ,'label' => __('Add File(s)','piklist-demo')
    ,'description' => 'No more than one file is allowed'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist-demo')
      ,'button' => __('Add','piklist-demo')
    )
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
    ,'validate' => array(
      array(
        'type' => 'limit'
        ,'options' => array(
          'min' => 0
          ,'max' => 1
        )
      )
    )
  ));

  piklist('field', array(
    'type' => 'group'
    ,'field' => 'validate_group_add_more_limit'
    ,'scope' => 'post_meta'
    ,'add_more' => true
    ,'label' => 'Grouped/Add-More with Limit'
    ,'description' => 'No more than two add-mores are allowed'
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'group_field_1'
        ,'label' => 'Field 1'
        ,'columns' => 12
      )
      ,array(
        'type' => 'text'
        ,'field' => 'group_field_2'
        ,'label' => 'Field 2'
        ,'columns' => 12
      )
    )
    ,'validate' => array(
      array(
        'type' => 'limit'
        ,'options' => array(
          'min' => 1
          ,'max' => 2
        )
      )
    )
  ));

  // Submit button
  piklist('field', array(
    'type' => 'submit'
    ,'field' => 'submit'
    ,'value' => 'Submit'
  ));
