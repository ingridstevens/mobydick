<?php
/*
Title: Carousel Settings Section
Setting: carousel_settings
*/

  piklist('field', array(
    'type' => 'group'
    ,'field' => '_carousel'
    ,'add_more' => true
    ,'label' => 'Carousel'
    ,'fields' => array (
    array (
        'type' => 'text'
        ,'field' => '_carousel_head'
        ,'label' => 'Carousel Headline'
        ,'columns' => 9
    )
    ,array (
        'type' => 'text'
        ,'field' => '_carousel_p'
        ,'label' => 'Carousel Subhead'
        ,'columns' => 9
    )
    ,array(
        'type' => 'file'
        ,'field' => '_carousel_image'
        ,'label' => __('Carousel Image', 'plugin')
        ,'columns' => 12
        )
    )

  ));
