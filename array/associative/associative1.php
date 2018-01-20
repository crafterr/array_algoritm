<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

//associate array students
//
//$studentInfo = [];
$studentInfo['Name'] = "Adiyan";
$studentInfo['Age'] = 11;
$studentInfo['Class'] = 6;
$studentInfo['RollNumber'] = 71;
$studentInfo['Contact'] = "info@adiyan.com";

foreach ($studentInfo as $key=>$item)
{
    echo $key. ': '.$item.' <br />';
}
dump($studentInfo); die();