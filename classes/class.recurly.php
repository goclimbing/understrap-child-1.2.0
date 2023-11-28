<?php
class Recurly
{
    public $messages = null;
    public $errors = null;
    public $form_data = null;

    public function __construct()
    {
        add_action('template_redirect', [$this, 'init']);
        add_action('after_setup_theme', [$this, 'remove_admin_bar']);
        add_action('admin_init', [$this, 'hide_dashboard']);

        add_shortcode('search_start', [$this, 'display_content']);

        add_shortcode('initial_signup', [$this, 'initial_signup']);


        /*
        add_shortcode('login_button', [$this, 'login_button']);
        add_shortcode('step_three', [$this, 'step_three']);
      
        
        add_shortcode('search_page', [$this, 'search_page']);
        add_shortcode('account_admin', [$this, 'account_admin']);
        add_shortcode('dependent_add', [$this, 'dependent_add']);
        add_shortcode('update_account', [$this, 'update_account']);

        add_shortcode('find_provider', [$this, 'find_provider']);


        add_shortcode('create_account', [$this, 'create_account']);

        add_shortcode('account_page', [$this, 'account_page']);

        add_shortcode('dependent_admin', [$this, 'dependent_admin']);
        add_shortcode('payment_page', [$this, 'payment_page']);
        add_shortcode('signup_process', [$this, 'signup_form']);
    */
    }

    // Set Up Functions
    public function hide_dashboard()
    {
        if (!current_user_can('manage_options') && (!defined('DOING_AJAX') || !DOING_AJAX)) {
            wp_redirect(get_permalink(get_field('account_page', 'option')));
            exit;
        }
    }

    public function remove_admin_bar()
    {
        if (!current_user_can('manage_options') && !is_admin()) {
            show_admin_bar(false);
        }
    }

    public function init()
    {
        // need to test if user is logged in
        if (is_user_logged_in()) {
            //  wp_redirect('https://fortytwo.test/search');
            // die;
        }
    }

    // shortcode callback functions

    public function display_content($template)
    {
        $template = 'search';
        ob_start();
        get_template_part('templates/shortcodes/' . $template);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function search_start()
    {
        ob_start();
        get_template_part('templates/shortcodes/search');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }



    public function initial_signup()
    {
        ob_start();
        get_template_part('templates/shortcodes/initial-signup');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    // internal functions
    public function create_recurly_account($account)
    {
        echo 'made it';
        /*    return;

    $client = new \Recurly\Client(RECURLY_API_KEY);
    try {
        $account_data = $client->createAccount($account);
        return $account_data->getId();
    } catch (\Recurly\Errors\Validation $e) {
        error_log(print_r($e, true));
        var_dump($e);
    } catch (\Recurly\RecurlyError $e) {
        error_log(print_r($e, true));
        var_dump($e);
    }
    return false;


      $register = post_var('register');

        //var_dump($_POST);

        if ($register == '1') {

            //required fields
            $first_name = post_var('first_name');
            $last_name = post_var('last_name');
            $email = post_var('email');
            $dob = post_var('dob');
            $pass = post_var('pass');
            $confirm_pass = post_var('pass_confirm');
            $address = post_var('address');
            $city = post_var('city');
            $state = post_var('state');
            $zip = post_var('zip');

            //Not required 
            $address_2 = post_var('address_2');

            $errors = [];

            //Validate form
            if (empty($first_name)) {
                $errors['first_name'] = 'Field is required.';
            }

            if (empty($last_name)) {
                $errors['last_name'] = 'Field is required.';
            }

            if (empty($email)) {
                $errors['email'] = 'Field is required.';
            } elseif (!is_email($email)) {
                $errors['email'] = 'Please enter a valid email.';
            } elseif (email_exists($email)) {
                $errors['email'] = 'An account already exist with this email. Please log in.';
            }

            if (empty($dob)) {
                $errors['dob'] = 'Field is required.';
            }

            if (empty($pass)) {
                $errors['pass'] = 'Field is required.';
            } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $pass)) {
                $errors['pass'] = 'Password should contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character';
            }

            if ($pass !== $confirm_pass) {
                $errors['confirm_pass'] = 'Passwords must match';
            }

            if (empty($address)) {
                $errors['address'] = 'Field is required.';
            }

            if (empty($city)) {
                $errors['city'] = 'Field is required.';
            }

            if (empty($state)) {
                $errors['state'] = 'Field is required.';
            }

            if (empty($zip)) {
                $errors['zip'] = 'Field is required.';
            }

            if (!$errors) {
                //Register and Login to WP
                $user_data = [
                    'user_login' => $email,
                    'user_pass' => $pass,
                    'user_email' => $email,
                    'role' => 'subscriber',
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                ];
                $user_id = wp_insert_user($user_data);

                //Add user to Recurly
                if (!is_wp_error($user_id)) {
                    $beta_account_id = get_unique_account_id();

                    update_user_meta($user_id, 'address', $address);
                    update_user_meta($user_id, 'address_2', $address_2);
                    update_user_meta($user_id, 'city', $city);
                    update_user_meta($user_id, 'state', $state);
                    update_user_meta($user_id, 'zip', $zip);
                    update_user_meta($user_id, 'dob', date('Y-m-d', strtotime($dob)));
                    update_user_meta($user_id, 'beta_account_id', $beta_account_id);

                    $account_data = [
                        'code' => $beta_account_id,
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'email' => $email,
                        'address' => [
                            'street1' => $address,
                            'street2' => $address_2,
                            'city' => $city,
                            'region' => $state,
                            'postal_code' => $zip,
                            'country' => 'US'
                        ],
                        
                        'custom_fields' => [
                            [
                                'dob' => $city,
                            ]
                        ]
                        
                    ];

                    $recurly_account_id = $this->create_recurly_account($account_data);

                    if ($recurly_account_id) {
                        update_user_meta($user_id, 'recurly_account_id', $beta_account_id);
                        wp_set_current_user($user_id);
                        wp_set_auth_cookie($user_id);
                        do_action('wp_login', $user_login);
                        // wp_safe_redirect(get_permalink(get_field('account_page', 'option')));
                        die();
                    }

                    $errors['account'] = 'There was an error creating your Recurly account. Please try again. If the error persists, please contact support.';

                    $this->errors['signup'] = $errors;
                }
            } else {
                $this->errors['signup'] = $errors;
            }
        }



    */
    }
}
