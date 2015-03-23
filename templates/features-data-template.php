<?php

$title = $data['feature_title'];
$info = $data['feature_info'];
$link = $data['feature_url'];

$images = $data['feature_img'];
foreach ($images as $image) {
    $img = wp_get_attachment_image($image);
}

?>
<div class="col-sm-4 home-feature text-center">
    <?php echo $img; ?>
    <h2><?php echo $title;?></h2>
    <p><?php echo $info;?></p>
    <a class="btn btn-cbc" href="<?php echo $link; ?>">Learn More</a>
</div>
