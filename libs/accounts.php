<?php

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 0) return $min; // not so random...
    $log = log($range, 2);
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd >= $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet .= "0123456789";
    for ($i = 0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, strlen($codeAlphabet))];
    }
    return $token;
}

function account_id_exists($id)
{
    global $wpdb;
    $query = "SELECT * FROM {$wpdb->usermeta} WHERE meta_key='beta_account_id' && meta_value='{$id}'";
    $results = $wpdb->get_results($query);
    return $results ? true : false;
}

function get_unique_account_id($prefix = 'BH')
{
    $id = $prefix . getToken(6) . '00';
    if (account_id_exists($id)) {
        $id = get_unique_account_id();
    }
    return $id;
}
