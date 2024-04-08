<?php
#vars
$intro_header = get_field('intro_header');
$intro_sub_header = get_field('intro_sub_header');
$intro_text = get_field('intro_text');
$hero_image = get_field('hero_image');

$sub_intro_header = get_field('sub_intro_header');
$sub_intro_text = get_field('sub_intro_text');

$features_title = get_field('features_title');
$features_text = get_field('features_text');

$cta1_title = get_field('cta1_title');
$cta1_button_text = get_field('cta1_button_text');
$cta1_button_url = get_field('cta1_button_url');

$how_it_works_list = get_field('how_it_works_list');
$how_it_works_text = get_field('how_it_works_text');
$how_it_works_image = get_field('how_it_works_image');

$why_choose_reveel = get_field('why_choose_reveel');

$cta2_title = get_field('cta2_title');
$cta2_text = get_field('cta2_text');
$cta2_button_text = get_field('cta2_button_text');
$cta2_button_url = get_field('cta2_button_url');
?>







<div class="container  overflow-hidden">
    <div class="row mb-3">
        <div class="col-md-6 col-sm-12 col-xs-12 vh-center">
            <h2>
                <?php echo $intro_header; ?>
            </h2>
            <h3>
                <?php echo $intro_sub_header; ?>
            </h3>
            <p>
                <?php echo $intro_text; ?>
            </p>
            <h3><?php echo $sub_intro_header; ?></h3>
            <p><?php echo $sub_intro_text; ?></p>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 vh-center card p-5 box-shadow h-100 border-primary border border-1 bg-light rounded-3">
            <img src="<?php echo $hero_image; ?>" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>
                <?php echo $features_title; ?>
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($features_text as $block) : ?>
                <div class="col-12 col-lg-6 mb-3">
                    <div class="card mb-3 box-shadow h-100 border-secondary border border-2 bg-light rounded-3">
                        <div class="card-body mb-0 pb-0">
                            <div class="row ps-3 pb-2">
                                <div class="w-25">
                                </div>
                                <div class="w-75">
                                    <h3 class="  text-end mb-0 text-primary">
                                        <?php echo $block['title']; ?>
                                    </h3>
                                </div>
                            </div>

                            <div class="row text-center m-1">
                                <div>

                                </div>
                            </div>
                            <div class="row text-center text-dark mx-0 mb-0 pb-0">
                                <p>
                                    <?php echo $block['text']; ?>

                                </p>
                            </div>


                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <div class="row">
        <div class="col">
            <h2>
                How it Works
            </h2>
            <p>
                <?php echo $how_it_works_text ?>
            </p>
        </div>
    </div>


    <div class="container overflow-hidden my-3">
        <div class="row">
            <div class="col m-0 p-0 col-md-4">
                <?php
                foreach ($how_it_works_list as $how_it_works_data) :
                    $html = '<div class="row p-3 border bg-light"><li>';
                    $html .= '<strong>' . $how_it_works_data['title'] . '</strong>';
                    $html .= "<p>" . $how_it_works_data['text'] . "</p>";
                    $html .= '</li></div>';
                    echo $html;
                endforeach;
                ?>
                <div class="col  vh-center  justify-content-center text-center mt-3 p-2">
                    <div class="row  justify-content-center">
                        <h2><?php echo $cta1_title; ?></h2>
                        <a href="<?php echo $cta1_button_url; ?>">
                            <button type="button" class="btn btn-secondary understrap-read-more-link text-white" data-toggle="modal" data-target="#video_model_first" data-sr-id="24" style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; transition: transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; ">
                                <?php echo $cta1_button_text; ?>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="col vh-center mt-3 justify-content-center text-center p-2">
                    <h2><?php echo $cta2_title; ?></h2>
                    <a href="<?php echo $cta2_button_url; ?>">
                        <button type="button" class="btn btn-secondary understrap-read-more-link text-white" data-toggle="modal" data-target="#video_model_first" data-sr-id="24" style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; transition: transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; ">
                            <?php echo $cta2_button_text; ?>
                        </button>
                    </a>
                </div>
            </div>

            <div class="col gy-0 g-0 p-0 col-md-8">
                <img src="<?php echo $how_it_works_image; ?>" class="img-fluid">
            </div>
        </div>
    </div>

    <h2>Why Choose ACF + Gutenberg + BS5?</h2>
    <p><?php echo $why_choose_reveel; ?></p>

</div>




<!--  ACF "Name" Fields

intro_header
intro_text

sub_intro_header
sub_intro_text

features_title
features_text

cta1_title
cta1_text
cta1_button_text
cta1_button_url

how_it_works_list

why_choose_reveel

cta2_title
cta2_text
cta2_button_text
cta2_button_url

->