<?php
/*
Title: Member Fields
Post Type: member
*/

piklist('field', array(
    'type' => 'text'
    ,'field' => 'member_first_name'
    ,'label' => 'First Name'
    ,'attributes' => array(
        'class' => 'text'
        ,'columns' => '6'
    )
));
piklist('field', array(
    'type' => 'text'
    ,'field' => 'member_last_name'
    ,'label' => 'Last Name'
    ,'attributes' => array(
        'class' => 'text'
    )
));
piklist('field', array(
    'type' => 'text'
    ,'field' => 'phone'
    ,'label' => 'Phone'
    ,'attributes' => array(
        'class' => 'text'
    )
));
piklist('field', array(
    'type' => 'text'
    ,'field' => 'email'
    ,'label' => 'Email'
    ,'attributes' => array(
        'class' => 'text'
    )
));
piklist('field', array(
    'type' => 'text'
    ,'field' => 'address_one'
    ,'label' => 'Address'
    ,'attributes' => array(
        'class' => 'text'
    )
));
piklist('field', array(
    'type' => 'text'
    ,'field' => 'address_two'
    ,'label' => 'Address Line Two'
    ,'attributes' => array(
        'class' => 'text'
    )
));
piklist('field', array(
    'type' => 'text'
    ,'field' => 'city_state'
    ,'label' => 'City, State Zip'
    ,'attributes' => array(
        'class' => 'text'
    )
));

?>
