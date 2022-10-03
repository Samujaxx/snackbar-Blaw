<?php include 'session-start.php';
if(empty($_SESSION['id']))
{
header('location: index.php');
}