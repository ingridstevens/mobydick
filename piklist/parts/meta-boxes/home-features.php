<?php
/*
Title: Home Features
Post Type: page
Order: 10
ID: 5
Collapse: false
*/
piklist('field', array(
    'type' => 'group'
    ,'field' => 'features'
    ,'add_more' => true
    ,'label' => __('Features')
    ,'fields' => array(
        array (
        'type' => 'file'
        ,'field' => 'feature_img'
        ,'label' => __('Add Feature Image','piklist')
        ,'options' => array(
            'modal_title' => __('Add Image','piklist')
            ,'button' => __('+ Image','piklist')
            )
        )

        ,array(
            'type' => 'text'
            ,'field' => 'feature_title'
            ,'label' => 'Title'
        )

        ,array(
            'type' => 'editor'
            ,'field' => 'feature_info'
            ,'label' => 'Information'
        )
        ,array(
            'type' => 'text'
            ,'field' => 'feature_url'
            ,'label' => 'More Information Link'
        )

    )
));


?>
