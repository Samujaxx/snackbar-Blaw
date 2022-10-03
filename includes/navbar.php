<?php
    include ('includes/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<span style="margin-left: 10px" class="navbar-brand">PROJECT MMS</span> 
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="gebruiker-overzicht.php">gebruiker overzicht</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="category-list.php">categorie overzicht  </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="report-incident.php">melding maken</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="overzicht-melding.php">meldingen overzicht</a>
    </li>
  </ul>
</nav>
</body>
</html>
