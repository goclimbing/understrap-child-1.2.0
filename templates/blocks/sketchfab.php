<?php
#vars
$blocks = get_field('blocks');

?>

<style>

</style>




<div class="container-fluid">
    <div class="row">
        <?php foreach ($blocks as $block) : ?>
            <div class="col-12 col-md-6 mb-3">
                <div class="card box-shadow h-100 border-secondary border border-2 rounded-3 m-0 p-0 bg-light mb-3">
                    <div class="card-body mb-0 pb-0 m-0 p-0">
                        <div class="row text-center m-0 p-0">

                            <h4 class="text-dark py-2">
                                <?php echo $block['title']; ?>
                            </h4>
                            <div class="sketchfab-embed-wrapper pb-3">
                                <iframe title="<?php echo $block['title']; ?>" width="100%" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/<?php echo $block['sketchfab_id']; ?>/embed"> </iframe>
                            </div>
                            <p class="px-3">
                                <?php echo $block['description']; ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>