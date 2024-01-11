<?php
#vars
$intro_header = get_field('intro_header');

?>

<style>

</style>

test
<div class="container px-4 py-4" id="icon-grid">
    <div class="row">
        <div class="col-12  col-sm-12 col-md-6 col-xl-3">
            <div class="border  border-3 rounded-3 align-items-start p-2 mb-1  mx-sm-5  mx-md-0" style="border-color: #cccccc;">
                <div class="row ps-3">
                    <div class="" style="width:50%;">
                        <svg class="bi text-muted flex-shrink-0 me-3 pl-3" width="7em" height="6em">
                            <use xlink:href="#home" />
                        </svg>
                    </div>
                    <div class="w-50">

                    </div>
                </div>


                <div class="row text-left pt-0 mt-0">
                    <h3 class="  text-center mb-0 text-primary">
                        Seller
                    </h3>
                </div>


                <div class="row text-center m-1">
                    <div>
                        <h4>List your home for Free</h4>
                    </div>
                </div>
                <div class="row text-center text-dark m-2">
                    <p>Find the right service to meet your needs</p>
                </div>
                <div class="row m-2  justify-content-center">
                    <a href="/tabs" role="button" class="w-100 btn btn-lg btn-secondary" type="submit" style=" max-width:175px;">
                        Learn More
                    </a>
                </div>

            </div>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-xl-3">
            <div class="border  border-3 rounded-3 align-items-start p-2 mb-1  mx-sm-5  mx-md-0" style="border-color: #cccccc;">
                <div class="row ms-3">
                    <div class="w-50">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="7em" height="6em">
                            <use xlink:href="#forsale" />
                        </svg>
                    </div>
                    <div class="w-50">

                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3 class=" text-center mb-0 text-primary">
                            Seller
                        </h3>
                    </div>
                </div>

                <div class="row text-center m-1">
                    <div>
                        <h4>Price your home today</h4>
                    </div>
                </div>
                <div class="row text-center text-dark m-2">
                    <p>Register to use the Suggested Pricing Tool</p>
                </div>
                <div class="row m-2  justify-content-center">
                    <a href="https://www.repdai.com/sell" role="button" class="w-100 btn btn-lg btn-secondary" type="submit" style=" max-width:175px;">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-xs-12  col-sm-12 col-md-6 col-xl-3">
            <div class="border  border-3 rounded-3 align-items-start p-2 mb-1  mx-sm-5  mx-md-0" style="border-color: #cccccc;">
                <div class="row ms-3">
                    <div class="w-25 me-4">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="7em" height="6em">
                            <use xlink:href="#power" />
                        </svg>
                    </div>
                    <div class="w-25 pl-2">

                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3 class="mb-0  text-center text-primary">
                            Everyone
                        </h3>
                    </div>
                </div>
                <div class="row text-center m-1">
                    <div>
                        <h4>Knowledge is power</h4>
                    </div>
                </div>
                <div class="row text-center text-dark m-2">
                    <p>Set up an info session how to use the platform</p>

                </div>
                <div class="row m-2  justify-content-center">
                    <a href="https://www.repdai.com/free-seminars" role="button" class="w-100 btn btn-lg btn-secondary" type="submit" style=" max-width:175px;">
                        Schedule Now
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-xs-12  col-sm-12 col-md-6  col-xl-3">
            <div class="border  border-3 rounded-3 align-items-start p-2 mb-1  mx-sm-5  mx-md-0" style="border-color: #cccccc;">
                <div class="row ms-0">
                    <div class="w-25 me-4">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="7em" height="6em">
                            <use xlink:href="#key" />
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3 class="text-center  mb-0 text-primary">
                            Buyer
                        </h3>
                    </div>
                </div>
                <div class="row text-center m-1">
                    <div>
                        <h4>Find your perfect home</h4>
                    </div>
                </div>

                <div class="row text-center text-dark m-2">
                    <p>Use iRepdai search tool to find the perfect home</p>
                </div>
                <div class="row m-2  justify-content-center">
                    <a href="https://www.repdai.com" role="button" class="w-100 btn btn-lg btn-secondary" type="submit" style=" max-width:175px;">
                        Search Now
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>


<?php echo $intro_header; ?>

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