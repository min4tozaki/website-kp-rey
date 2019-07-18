<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php
            if ($title)
                echo $title;
            else
                echo 'No Title' ?>
        - <?= $_SESSION['IMPORTANT_P'] ?></title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Project Rey">
    <meta property="og:image" content="<?= base_url() ?>assets/img/UNADJUSTEDNONRAW_thumb_1.jpg">
    <meta name="description" content="Ini sementara adalah contoh dari tampilan kasarnya, kira2 gmn?">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="<?= base_url() ?>assets/img/UNADJUSTEDNONRAW_thumb_1.jpg">
    <meta name="twitter:description" content="Mantap">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/untitled.css">
</head>

<body class="bg-gradient-primary">
    <div class="flash-data-s" data-flashdata="<?= $_SESSION['msg_s']; ?>"></div>
    <div class="flash-data-f" data-flashdata="<?= $_SESSION['msg_f']; ?>"></div>