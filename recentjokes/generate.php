<?php
$srcurl = 'http://localhost/welcome/recentjokes/controller.php';
$tempfilename = $_SERVER['DOCUMENT_ROOT'] . '/welcome/recentjokes/tempindex.html';
$targetfilename = $_SERVER['DOCUMENT_ROOT'] . '/welcome/recentjokes/index.html';

if (file_exists($tempfilename))
{
    unlink($tempfilename);
}
echo exec('whoami');
echo get_current_user();
error_reporting(~0);

ini_set('display_errors', 1);

$html = file_get_contents($srcurl);
//var_dump($html);
if (!$html)
{
    $error = "Unable to load $srcurl. Static page update aborted!";
    include $_SERVER['DOCUMENT_ROOT'] . '/welcome/includes/error.html.php';
    exit();
}

if (!file_put_contents($tempfilename, $html))
{
    $error = "Unable to write $tempfilename. Static page update aborted!";
    include $_SERVER['DOCUMENT_ROOT'] . '/welcome/includes/error.html.php';
    exit();
}

copy($tempfilename, $targetfilename);
unlink($tempfilename);