<?php
session_start();
require "includes/database.php";

$email = $_POST["email"];
$wachtwoord = $_POST["password"];

$result = $conn->query("SELECT * FROM user WHERE email = '$email' LIMIT 1");

$gebruiker = $result->fetch_assoc();


if (!empty($gebruiker)) {

    if ($gebruiker['password'] == $wachtwoord) {
        $_SESSION["gebruikerData"] = $gebruiker;
        $_SESSION["wrong_pas"] = false;
        $_SESSION["id"] = $gebruiker['id'];
        header("Location: welkom.php");
        exit();
    } else {
        $_SESSION["wrong_pas"] = true;
        header("Location: index.php");
        exit();
    }
}