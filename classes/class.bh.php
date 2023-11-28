public function login_button()
{
ob_start();
get_template_part('partials/shortcodes/login', 'button');

$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function search_page()
{
ob_start();
get_template_part('partials/shortcodes/search', 'page');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function step_one()
{
ob_start();
get_template_part('partials/shortcodes/search', 'page');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function find_provider()
{
ob_start();
get_template_part('partials/shortcodes/find', 'provider');
$content = ob_get_contents();
ob_end_clean();
return $content;
}





public function step_two()
{
ob_start();
get_template_part('partials/shortcodes/step', 'two');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function step_three()
{
ob_start();
get_template_part('partials/shortcodes/step', 'three');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function create_account()
{
ob_start();
get_template_part('partials/shortcodes/create', 'account');
$content = ob_get_contents();
ob_end_clean();
return $content;
}





public function account_page()
{
ob_start();
get_template_part('partials/shortcodes/account', 'page');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function dependent_add()
{

$action = post_var('action');

if ($action) {
//required fields

$first_name = post_var('first_name');
$last_name = post_var('last_name');
$email = post_var('email');
$dob = post_var('dob');

$recurly_account_id = 'code-' . $this->get_recurly_wp_id();
$account_info = $this->get_recurly_account_info($recurly_account_id);
$recurly_account_id_internal = $account_info->getId();

//create new id from recurly account id
//family_account_id = $this->get_recurly_wp_id()
//get count of dependents from recurly
$errors = '';
if (!$errors) {

$beta_account_id = get_unique_account_id();

$recurly = new Recurly;
$recurly_account_id = 'code-' . $recurly->get_recurly_wp_id();
$account_info = $recurly->get_recurly_account_info($recurly_account_id);
$child_accounts = $recurly->get_dependents($recurly_account_id);
$count = 1;
if ($child_accounts) {
foreach ($child_accounts as $child_account) {
$count++;
}
}

$dependent_id = $recurly->get_recurly_wp_id();
$dependent_id = substr_replace("$dependent_id", $count, -1);

$account_data = [
'code' => $dependent_id,
'first_name' => $first_name,
'last_name' => $last_name,
'email' => $email,
'parent_account_id' => $recurly_account_id_internal,
'custom_fields' => [
[
'name' => 'dob',
'value' => $dob
]
]

];



$client = new \Recurly\Client(RECURLY_API_KEY);
try {
$account_data = $client->createAccount($account_data);
// return $account_data->getId();
} catch (\Recurly\Errors\Validation $e) {
error_log(print_r($e, true));
var_dump($e);
} catch (\Recurly\RecurlyError $e) {
error_log(print_r($e, true));
var_dump($e);
}
wp_redirect('/account/', '301');
// return false;

// $this->create_recurly_account($account_data);

$errors['account'] = 'There was an error creating your account. Please try again. If the error persists, please contact support.';
$this->errors['signup'] = $errors;
echo 'Dependent Added';
} else {
$this->errors['signup'] = $errors;
}
}

ob_start();
get_template_part('partials/shortcodes/dependent', 'add');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function update_account()
{
ob_start();
get_template_part('partials/shortcodes/account', 'update');
$content = ob_get_contents();
ob_end_clean();
return $content;
}








public function signup_form()
{
if (is_user_logged_in()) {

wp_redirect('/account/', '301');
//Recurly->account_admin();
//$content = '<p>You are currently logged in to an account. Access your <a href="' . get_permalink(get_field('account_page', 'option')) . '">account here</a>.</p>';
//return $content;
} else {
ob_start();
get_template_part('partials/shortcodes/signup', 'form', [
'errors' => $this->errors,
'messages' => $this->messages
]);

$content = ob_get_contents();
ob_end_clean();
return $content;
}
}

public function account_admin()
{
ob_start();
get_template_part('partials/shortcodes/account', 'admin');
$content = ob_get_contents();
ob_end_clean();
return $content;
}

public function dependent_admin()
{
ob_start();
get_template_part('partials/shortcodes/dependent', 'page');
$content = ob_get_contents();
ob_end_clean();
return $content;
}






// internal functions
public function create_recurly_account($account)
{
echo 'made it';
/* return;

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
*/
}

function get_recurly_wp_id()
{
global $current_user;
wp_get_current_user();
$user_id = $current_user->ID;
$user_info = array_map(
function ($a) {
return $a[0];
},
get_user_meta($user_id)
);
return $user_info['recurly_account_id'];
}

function get_recurly_account_info($recurly_account_id)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
try {
$account = $client->getAccount($recurly_account_id);
return ($account);
} catch (\Recurly\Errors\NotFound $e) {
echo 'Could not find resource1.' . PHP_EOL;
} catch (\Recurly\RecurlyError $e) {
echo 'Some unexpected Recurly error happened. Try again later.' . PHP_EOL;
}
}

public function get_dependents($recurly_account_id)
{
$recurly_account_id = $recurly_account_id;
$client = new \Recurly\Client(RECURLY_API_KEY);
try {
$options = [
'params' => [
'limit' => 200
]
];
$child_accounts = $client->listChildAccounts($recurly_account_id, $options);
return ($child_accounts);
} catch (\Recurly\Errors\NotFound $e) {
echo 'Could not find child accounts' . PHP_EOL;
// var_dump($e);
} catch (\Recurly\RecurlyError $e) {
echo 'Some unexpected Recurly error happened. Try again later.' . PHP_EOL;
}
}

function create_dependent_account($dependent_account)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
try {
$account_data = $client->createAccount($dependent_account);
return $account_data->getId();
} catch (\Recurly\Errors\Validation $e) {
error_log(print_r($e, true));
} catch (\Recurly\RecurlyError $e) {
error_log(print_r($e, true));
}

return false;
}

function set_recurly_account_billing_info($account_id)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
echo '
<pre>';

        try {
            $binfo_update = [
                'number' => post_var('ccnum'),
                'month' => post_var('ccmonth'),
                'year' => post_var('ccyear'),
                'cvv' => post_var('cvv'),
                'first_name' => 'First',
                'last_name' => 'Last',
                'address' => [
                    'street1' => post_var('address'),
                    'street2' => '',
                    'city' => post_var('city'),
                    'region' => post_var('state'),
                    'postal_code' => post_var('zipcode'),
                    'country' => 'US'
                ]
            ];
            print_r($binfo_update);
            $binfo = $client->updateBillingInfo($account_id, $binfo_update);
            echo 'Updated Billing Info:' . PHP_EOL;
            var_dump($binfo);
        } catch (\Recurly\Errors\Validation $e) {
            // If the request was not valid, you may want to tell your user
            // why. You can find the invalid params and reasons in err.params
            //var_dump($e);
        } catch (\Recurly\RecurlyError $e) {
            // If we don't know what to do with the err, we should
            // probably re-raise and let our web framework and logger handle it
            // var_dump($e);
        }
        echo '</pre>';
}

function add_recurly_plan_subscription($account_id)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
echo '
<pre>';
        try {
            $sub_create = [
                "plan_code" => post_var('plan_type'),
                "currency" => "USD",
                "account" => [
                    "code" => $account_id
                ],
            ];

            $subscription = $client->createSubscription($sub_create);

            echo 'Created Subscription:' . PHP_EOL;
            //var_dump($subscription);
        } catch (\Recurly\Errors\Validation $e) {
            // If the request was not valid, you may want to tell your user
            // why. You can find the invalid params and reasons in err.params
            // var_dump($e);
        } catch (\Recurly\RecurlyError $e) {
            // If we don't know what to do with the err, we should
            // probably re-raise and let our web framework and logger handle it
            //    var_dump($e);
        }


        echo '</pre>';
}








function get_recurly_account_billing_info($account_id)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
try {
$binfo = $client->getBillingInfo($account_id);

echo '
<pre>' . PHP_EOL;
            //var_dump($binfo);
            echo '</pre>';
} catch (\Recurly\Errors\NotFound $e) {
// Could not find the resource, you may want to inform the user
// or just return a NULL
echo 'Could not find resource.' . PHP_EOL;
var_dump($e);
} catch (\Recurly\RecurlyError $e) {
// Something bad happened... tell the user so that they can fix it?
echo 'Some unexpected Recurly error happened. Try again later.' . PHP_EOL;
}
}


function verify_recurly_account_billing_info($account_id)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
echo '
<pre>';


        try {
            $transaction = $client->verifyBillingInfo($account_id);

            echo 'Got Transaction:' . PHP_EOL;
            // var_dump($transaction);
        } catch (\Recurly\Errors\NotFound $e) {
            // Could not find the resource, you may want to inform the user
            // or just return a NULL
            echo 'Could not find resource.' . PHP_EOL;
            // var_dump($e);
        } catch (\Recurly\RecurlyError $e) {
            // Something bad happened... tell the user so that they can fix it?
            echo 'Some unexpected Recurly error happened. Try again later.' . PHP_EOL;
        }

        echo '</pre>';
}

function show_recurly_plans($account_id)
{
$client = new \Recurly\Client(RECURLY_API_KEY);
echo '
<pre>';
        try {
            $plan = $client->removePlan('test');
            //echo 'Removed Plan: ' . 'test' . PHP_EOL;
        } catch (\Recurly\Errors\Validation $e) {
            // If the request was not valid, you may want to tell your user
            // why. You can find the invalid params and reasons in err.params
            //var_dump($e);
        } catch (\Recurly\RecurlyError $e) {
            // If we don't know what to do with the err, we should
            // probably re-raise and let our web framework and logger handle it
            //var_dump($e);
        }
        $options = [
            'params' => [
                'limit' => 200
            ]
        ];
        $plans = $client->listPlans($options);

        foreach ($plans as $plan) {
            echo 'Plan: ' . $plan->getCode() . PHP_EOL;
        }

        echo '</pre>';
}








function add_dependent_relation($account_id, $account_update)
{

echo "updating dependend relation..";
$client = new \Recurly\Client(RECURLY_API_KEY);
try {

$account = $client->updateAccount($account_id, $account_update);

echo 'Updated Account:' . PHP_EOL;
//var_dump($account);

$account_data = $client->updateAccount($account_id, $account_update);
$account = $client->updateAccount;
return $account_data->getId();
} catch (\Recurly\Errors\Validation $e) {
error_log(print_r($e, true));
} catch (\Recurly\RecurlyError $e) {
error_log(print_r($e, true));
}
return false;
}

function update_recurly_account($account_id, $account)
{
$client = new \Recurly\Client(RECURLY_API_KEY);

try {
$account_data = $client->updateAccount($account_id, $account);

return $account_data->getId();
} catch (\Recurly\Errors\Validation $e) {
error_log(print_r($e, true));
} catch (\Recurly\RecurlyError $e) {
error_log(print_r($e, true));
}

return false;
}

public function update_dependent_account($account_id, $dependent_account)
{
$child_accounts = $client->listChildAccounts($account_id, $options);
foreach ($child_accounts as $child_account) {
echo 'Child Account: ' . $child_account->getId() . PHP_EOL;
}
}