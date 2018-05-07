<?php
function ExtendedAddslash(&$params)
{
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        }
}

     // Initialize ExtendedAddslash() function for every $_POST variable
    ExtendedAddslash($_POST);

$form_idNum=$post['PersonId'];
$form_name=$POST['FName'];
$form_lastname=$POST['LName'];
$form_email=$POST['Email'];
$form_phone=$POST['Phone'];
$form_message=$POST['Msg']

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'submissions';
mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name);
?>