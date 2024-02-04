<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/Assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>/Assets/img/favicon.png">
  <title>
  <?= $data['page_title'] ?> - <?= $data['page_name'] ?>
  </title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>/Assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/Assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url() ?>/Assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url() ?>/Assets/css/argon-dashboard.min.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">

<?php navAdmin($data) ?>