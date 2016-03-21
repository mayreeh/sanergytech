<?php
/*
 *  SANERGY STAGE 1 TECHNICAL SCREENING
 *  Developer : Mary Gichohi
 * 
 */
include 'function.php';

//instantiate our functions class
$funct = new MyFunctions();

$messageFormatOne = "Reg no: CS/20/2016, booK: PE 1478 S65 1991, DATE: 21/01/2016-30/01/2016";
$messageFormatTwo = "CS/20/2016, PE 1478 S65 1991, 21/01/2016-30/01/2016";
 
echo "Assumptions :  Same results for either of the format used.".'<br>';

echo  'Format One  '.$funct->getMessage($messageFormatOne).'<br>';
echo  'Format Two ' . $funct->getMessage($messageFormatTwo).'<br>';

?>



