<?php
  $settings_carousel = get_option('carousel_settings');
  $carousel_array = $settings_carousel['_carousel'];
  // print_r($carousel_add_more);
?>

<div class="container">

    <?php
    if ($carousel_array) {
        echo '<div id="carousel" class="carousel slide" data-ride="carousel">';
        echo '<div class="carousel-inner">';
        $i = 0;
        piklist(get_stylesheet_directory() . '/carousel-template', array('data' => $carousel_array, 'loop' => 'data'));

        ?>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        
        <?php


        echo '</div>';
        echo '</div>';
    }
    ?>

</div>
