<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

<div style="margin: 0 auto 0 auto;width:100px;">
    <form action='/search/' method="post">
        <input type=text name=zipcode>
        <input type=submit value=Search>
    </form>
</div>

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
<h3>Signup Form</h3>

<section id="stepone-form" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="form" action="/signup/" method="post" class="w-100">
                    <div class="row gy-4">
                        <div class="col-md-">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="text" name="basic_email" id="basic_email" value="<?php echo esc_attr(post_var('email')); ?>" placeholder="Email Address" class="form-control <?php echo $class; ?>">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="basic_password" id="basic_password" value="" placeholder="" class="form-control <?php echo $class; ?>">
                            <span class="form-text">
                                Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
                            </span>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pass_confirm" class="form-label">Confirm Password</label>
                            <input type="password" name="basic_password_confirm" id="basic_password_confirm" value="" placeholder="" class="form-control <?php echo $class; ?>">
                            <span class="form-text">
                                Confirm your password.
                            </span>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="zipcode" value="<?php echo post_var('zipcode') ?>">
                            <p><button class="btn btn-primary" type="submit">Signup</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


</div>
<div class="col-lg-6">
    Individual Plan: $105/year ($8.75/month)<br>
    Individual Plan +1 Family Member: $180/year ($15.00/month)<br>
    Family Plan: $198/year ($16.50/month)<br>
    <br>
    <h3>Example Costs from providers in your area</h3>
    Cleaning $100<br>
    Cleaning $100<br>
    Cleaning $100<br>

</div>
</section>

<script>
    const validator = new window.JustValidate('#form');

    validator
        .addField('#basic_email', [{
                rule: 'required',
            },
            {
                rule: 'required',
            },
            {
                rule: 'email',
            },
        ])
        .addField('#basic_password', [{
                rule: 'required',
            },
            {
                rule: 'password',
            },
        ])
        .addField('#basic_password_confirm', [{
                rule: 'required',
            },
            {
                validator: (value, fields) => {
                    if (fields['#pass'] && fields['#pass'].elem) {
                        const passValue = fields['#pass'].elem.value;

                        return passValue === value;
                    }

                    return true;
                },
                errorMessage: 'Passwords must match.'
            },
        ])
        .onSuccess((event) => {
            document.getElementById('form').submit();
        });
</script>