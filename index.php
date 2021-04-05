<?php
/*
Plugin Name: Foot Bal APi Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Dmitriy
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

if (!defined('ABSPATH')) { die; }

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');

if (!function_exists('add_action')) {
    echo 'Hey, you can\t access this file, you silly human!';
    exit;
}

function __construct()
{
    add_action('init', array(new AlecadddPlugin, 'custom_post_type'));
}

function activate()
{
}

function deactivate()
{
}

function uninstall()
{
}


//class AlecadddPlugin {
// link1 https://api-football-v1.p.rapidapi.com/v2/fixtures/date/%7Bdate%7D
// link2  https://api-football-v1.p.rapidapi.com/v2/fixtures/live
// api key 18b960fa370ea04d582635a951f6ab8f

//if ($_POST) {
//$data1 = file_get_contents('https://api-football-v1.p.rapidapi.com/v2/fixtures/date/%7Bdate%7D');
//$data2 = file_get_contents('https://api-football-v1.p.rapidapi.com/v2/fixtures/live');
//var_dump($link1);
//var_dump($link2);
////}

//class Football_API { }
//$footbalapi = new Football_API();
//$footbalapi->getdatafromapi1();
// senddatatoclient //
//$footbalapi->senddatatoclient();
//}

if (class_exists('AlecadddPlugin')) {
    $alecadddPlugin = new AlecadddPlugin();
}

function customFunction($arg)
{
    echo $arg;
}
$arg = "ARG";

customFunction($arg);

$data1 = '1234';
$data2 = '1234';
$data3 = '1234';
$data4 = '1234';
$data5 = '1234';
$data6 = '1234';
$token = '1234';

register_activation_hook(__FILE__, array($alecadddPlugin, 'activate'));
register_deactivation_hook(__FILE__, array($alecadddPlugin, 'deactivate'));
