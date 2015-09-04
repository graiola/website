<html>

<?php
function echoSelectedRoot()
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    $site_root = basename($GLOBALS['SITE_ROOT'], ".php");
    
    if ($current_file_name == $site_root)
        echo 'class="selected"'; 
}
?>

<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    $site_root = basename($GLOBALS['SITE_ROOT'], ".php");
    
    if ($current_file_name == $requestUri)
        echo 'class="selected"'; 
}
?>

</html>
