<?php

use App\Models\AppSettings;

function menu_open_if_match($path)
{
    return Request::is($path . '*') ? 'menu-open' : '';
}

function menu_open_if_full_match($path)
{
    return Request::is($path) ? 'menu-open' : '';
}

function active_if_match($path)
{
    return Request::is($path . '*') ? 'active' : '';
}

function active_if_full_match($path)
{
    return Request::is($path) ? 'active' : '';
}


function toggle_status($status){
    if ($status == 1){
        return 0;
    }else{
        return 1;
    }
}

function get_settings($settings_key)
{
    if (AppSettings::where('option_key', $settings_key)->count() > 0)
    {
        $option = AppSettings::where('option_key', $settings_key)->first();
        return $option->option_value;
    } else {
        return '';
    }
}

function toastrMessage($message_type, $message)
{
    Toastr::$message_type($message, '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
}

//Functions for Frontend
function getClientIp(){
    $ip_address = '';

    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ip_address = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ip_address = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ip_address = $_SERVER['REMOTE_ADDR'];
    else
        $ip_address = '';

    return $ip_address;
}
?>
