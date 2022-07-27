<?php
if (getenv('DEPLOY')) {
  $suffix = '.html';
} else {
  $suffix = '.php';
}
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <title><?= $title ?></title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description ?>">

  <link rel="icon" href="img/icon.png">

  <!-- TODO: Merge -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_courses.css">
  <link rel="stylesheet" href="css/style_nav.css">
</head>
