<?php

function get_state_list()
{
    return [
        'AL' => 'ALABAMA',
        'AK' => 'ALASKA',
        'AS' => 'AMERICAN SAMOA',
        'AZ' => 'ARIZONA',
        'AR' => 'ARKANSAS',
        'CA' => 'CALIFORNIA',
        'CO' => 'COLORADO',
        'CT' => 'CONNECTICUT',
        'DE' => 'DELAWARE',
        'DC' => 'DISTRICT OF COLUMBIA',
        'FM' => 'FEDERATED STATES OF MICRONESIA',
        'FL' => 'FLORIDA',
        'GA' => 'GEORGIA',
        'GU' => 'GUAM GU',
        'HI' => 'HAWAII',
        'ID' => 'IDAHO',
        'IL' => 'ILLINOIS',
        'IN' => 'INDIANA',
        'IA' => 'IOWA',
        'KS' => 'KANSAS',
        'KY' => 'KENTUCKY',
        'LA' => 'LOUISIANA',
        'ME' => 'MAINE',
        'MH' => 'MARSHALL ISLANDS',
        'MD' => 'MARYLAND',
        'MA' => 'MASSACHUSETTS',
        'MI' => 'MICHIGAN',
        'MN' => 'MINNESOTA',
        'MS' => 'MISSISSIPPI',
        'MO' => 'MISSOURI',
        'MT' => 'MONTANA',
        'NE' => 'NEBRASKA',
        'NV' => 'NEVADA',
        'NH' => 'NEW HAMPSHIRE',
        'NJ' => 'NEW JERSEY',
        'NM' => 'NEW MEXICO',
        'NY' => 'NEW YORK',
        'NC' => 'NORTH CAROLINA',
        'ND' => 'NORTH DAKOTA',
        'MP' => 'NORTHERN MARIANA ISLANDS',
        'OH' => 'OHIO',
        'OK' => 'OKLAHOMA',
        'OR' => 'OREGON',
        'PW' => 'PALAU',
        'PA' => 'PENNSYLVANIA',
        'PR' => 'PUERTO RICO',
        'RI' => 'RHODE ISLAND',
        'SC' => 'SOUTH CAROLINA',
        'SD' => 'SOUTH DAKOTA',
        'TN' => 'TENNESSEE',
        'TX' => 'TEXAS',
        'UT' => 'UTAH',
        'VT' => 'VERMONT',
        'VI' => 'VIRGIN ISLANDS',
        'VA' => 'VIRGINIA',
        'WA' => 'WASHINGTON',
        'WV' => 'WEST VIRGINIA',
        'WI' => 'WISCONSIN',
        'WY' => 'WYOMING',
        'AE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
        'AA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
        'AP' => 'ARMED FORCES PACIFIC'
    ];
}

function build_state_list($selected_state = '')
{
    //echo $selected_state;
    $state_list = '<label for="state" class="form-label">State</label><select id="state" name="state" class="form-select">';
    $states = get_state_list();
    if ($states) {
        foreach ($states as $abbr => $full) {
            // echo $abbr;
            // echo $selected_state . '<br>';
            if ($abbr == $selected_state) {
                $selected = 'selected';
                // echo $selected_state;
                // echo 'selected1';
            } else {
                $selected = '';
            }

            // $selected = ($abbr == $selected_state) ? 'selected' : '';

            $state_list .= '<option value="' . $abbr . '" ' . $selected . '>' . ucwords(strtolower($full)) . '</option>' . "\n";
        }
    }
    $state_list .= '</select>';

    echo $state_list;
}

function get_var($key)
{
    return trim(isset($_GET[$key]) ? $_GET[$key] : '');
}

function post_var($key)
{
    return trim(isset($_POST[$key]) ? $_POST[$key] : '');
}
