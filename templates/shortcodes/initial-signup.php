<style>
    .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    .active,
    .collapsible:hover {
        background-color: #555;
    }

    .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
    }
</style>


<button class="collapsible">There are 20+ providers in your zip code area (<?php echo post_var('zipcode'); ?>).
    <br>View Results</button>
<div class="content">

    <?php
    global $wpdb;
    $searchzip = post_var('zipcode');
    $sql = "SELECT * FROM wp_dentists where zip like '" . post_var('zipcode') . "%' limit 25";
    $sql = "SELECT * FROM wp_dentists limit 25";

    $retrieve_data = $wpdb->get_results($sql);
    ?>
    Results:
    <ul>
        <?php foreach ($retrieve_data as $retrieved_data) { ?>
            <li>
                <?php echo $retrieved_data->fname; ?> <?php echo $retrieved_data->lname; ?><br>
                <strong><?php echo $retrieved_data->center; ?></strong><br>
                <?php echo $retrieved_data->zip; ?><br>
                <a href="/demo"></a>


            </li>
            <br>

        <?php } ?>

    </ul>
    <br><br>


</div>
<br><br>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

<?php
//$email = post_var('basic_email');
//$pass = post_var('basic_password');
//$confirm_pass = post_var('basic_password_confirm');

$email = post_var('basic_email');;
$pass = post_var('basic_password');;
$confirm_pass = post_var('basic_password_confirm');


$errors = [];


//Register and Login to WP
$user_data = [
    'user_login' => $email,
    'user_pass' => $pass,
    'user_email' => $email,
    'role' => 'subscriber'
];
$user_id = wp_insert_user($user_data);
echo 'user inserted';

//if ($recurly_account_id) {

wp_set_current_user($user_id);
echo 'user set';
print_r($user_id);
wp_set_auth_cookie($user_id);
echo 'cookie set';
do_action('wp_login', $email);
echo 'logged user in';

//do a redirect to their admin page
//   wp_safe_redirect(get_permalink(get_field('account_page', 'option')));
die();
//}

//print_r($user_data);
//var_dump($user_data);
//echo 'user inserted';

//    $this->errors['signup'] = $errors;
//    }



?>

<h3>Account Information</h3>

<?php
$errors = isset($args['errors']['signup']) ? $args['errors']['signup'] : [];
?>

<section id="steptwo-form" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if ($errors['account']) : ?>
                    <div class="alert alert-danger"><?php echo $errors['account']; ?></div>
                <?php elseif ($errors) : ?>
                    <div class="alert alert-danger">The was a problem with your submission.</div>
                <?php endif; ?>
                <form id="steptwoForm" action="/step-three/" method="post" class="w-100">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <?php $class = (isset($errors['first_name'])) ? 'is-invalid' : ''; ?>
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="<?php echo esc_attr(post_var('first_name')); ?>" placeholder="First Name" class="form-control <?php echo $class; ?>">
                            <?php if ($errors['first_name']) : ?>
                                <div class="invalid-feedback">
                                    <?php echo $errors['first_name']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php $class = (isset($errors['last_name'])) ? 'is-invalid' : ''; ?>
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="<?php echo esc_attr(post_var('last_name')); ?>" placeholder="Last Name" class="form-control <?php echo $class; ?>">
                            <?php if ($errors['last_name']) : ?>
                                <div class="invalid-feedback">
                                    <?php echo $errors['last_name']; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <?php $class = (isset($errors['dob'])) ? 'is-invalid' : ''; ?>
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" name="dob" id="dob" value="<?php echo esc_attr(post_var('dob')); ?>" placeholder="" class="form-control <?php echo $class; ?>">
                            <?php if ($errors['dob']) : ?>
                                <div class="invalid-feedback">
                                    <?php echo $errors['dob']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <br><br>

                            <input type="submit" value="Continue">
                        </div>
                        <div style="display: block; width: 50%; float:left; padding: 10px 10px  10px  10px ;">
                            Bill Me:<br>
                            <input type=radio name=duration value=month> Monthly
                            <input type=radio name=duration value=year checked> Yearly
                            <br><br>
                            Select Your Plan:<br>
                            <input type=radio name=plan value="in-plan" checked> Individual Plan: $105/year ($8.75/month)<br>
                            <input type=radio name=plan value="in-plus"> Individual Plan +1 Family Member: $180/year ($15.00/month)<br>
                            <input type=radio name=plan value="fam-plan"> Family Plan: $198/year ($16.50/month)<br>
                            <br>
                        </div>

                        <div class="col-12">
                            <input type="hidden" name="register" value="1">
                            <input type="hidden" name="email" value="<?php echo post_var('email') ?>">

                            <p><button class="btn btn-primary" type="submit">Continue to Payment Info</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>