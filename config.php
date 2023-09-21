<?php
$connected = mysqli_connect('localhost','root','','sparks_bank')
if($connected)
{
    die("Could not connect".mysqli_connect_error());
}
?>