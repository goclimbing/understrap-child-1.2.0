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

<style>
    .list li {
        background-size: 25px;
        background-position: left top;
        list-style-type: none;
    }

    .features-list {
        display: block;
    }

    .features-column {
        display: block;
        width: 50%;
        float: left;
        padding-left: 10px;
    }
</style>

<div class="container  overflow-hidden">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 vh-center">
            <h1>
                <?php echo $intro_header; ?>
            </h1>
            <h2>
                <?php echo $intro_sub_header; ?>
            </h2>
            <p>
                <?php echo $intro_text; ?>
            </p>
            <h2><?php echo $sub_intro_header; ?></h2>
            <p><?php echo $sub_intro_text; ?></p>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 vh-center">
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

    <div class="row list">
        <div class="features-list">
            <div class="features-column">
                <?php
                //$ttl_features = sizeof($features_text);
                $ttl_features = 2;
                $half = ceil($ttl_features / 2);
                $num = 0;
                foreach ($features_text as $feature_text) :

                    $html = '<div class=feature-li><li style="visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.5s ease-in-out 0.18s, opacity 0.5s ease-in-out 0.18s; transition: transform 0.5s ease-in-out 0.18s, opacity 0.5s ease-in-out 0.18s; ">';
                    $html .= '<strong>' . $feature_text['title'] . '</strong>';
                    $html .= "<p>" . $feature_text['text'] . "</p>";
                    $html .= '</li></div>';
                    $num++;
                    if ($num == $half) {
                        $html .= '</div><div class="features-column">';
                    }
                    echo $html;
                endforeach;
                ?>

            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12 col-xs-12 vh-center ">
            <div class="row  justify-content-center">
                <h2><?php echo $cta1_title; ?></h2>
                <a href="<?php echo $cta1_button_url; ?>">
                    <button type="button" class="btn btn-secondary understrap-read-more-link" data-toggle="modal" data-target="#video_model_first" data-sr-id="24" style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; transition: transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; ">
                        <?php echo $cta1_button_text; ?>
                    </button>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12 vh-center">
            <h2><?php echo $cta2_title; ?></h2>
            <a href="<?php echo $cta2_button_url; ?>">
                <button type="button" class="btn btn-secondary understrap-read-more-link" data-toggle="modal" data-target="#video_model_first" data-sr-id="24" style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; transition: transform 0.5s ease-in-out 0.11s, opacity 0.5s ease-in-out 0.11s; ">
                    <?php echo $cta2_button_text; ?>
                </button>
            </a>
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

    <div class="row list gy-5 g-2">
        <div class="features-list">
            <div class="container overflow-hidden">
                <div class="features-column row  g-2 p-3">
                    <?php
                    foreach ($how_it_works_list as $how_it_works_data) :
                        $html = '<div class="feature-li p-3 border bg-light"><li>';
                        $html .= '<strong>' . $how_it_works_data['title'] . '</strong>';
                        $html .= "<p>" . $how_it_works_data['text'] . "</p>";
                        $html .= '</li></div>';
                        echo $html;
                    endforeach;
                    ?>
                </div>

                <div class="features-column row gy-5 g-2 p-3">
                    <img src="<?php echo $how_it_works_image; ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <h2>Why Choose ACF+GB?</h2>
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