<?php
#vars
$blocks = get_field('blocks');

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container-fluid">
    <div class="row">
        <?php foreach ($blocks as $block) : ?>
            <div class="col-12 col-md-12 mb-3">
                <div class="card box-shadow h-100 border-secondary border border-2 rounded-3 m-0 p-0 bg-light mb-3">
                    <div class="card-body mb-0 pb-0 m-0 p-0">
                        <div class="row text-center m-0 p-0">

                            <h4 class="text-dark py-2">
                                <?php echo $block['title']; ?>
                            </h4>

                            <div class="sketchfab-embed-wrapper pb-3">
                                <iframe title="<?php echo $block['title']; ?>" src="<?php echo $block['url']; ?>" width="100%" frameborder="0" style=" min-height:400px;"></iframe>
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


<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>