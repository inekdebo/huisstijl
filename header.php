<?php
/**
 * User: inekdebo
 * Date: 24/08/2019
 * Time: 11:43
 */

$conf = include('config.php');
include('helper/helper.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,600,700,700i" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/assets/img/favicon.ico">
    <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet">
    <title><?php echo $conf['title']; ?></title>
</head>
<body>

<div class="nav">
    <div class="nav-left">
        <a href="#">
            <div class="home-button">
                <img src="<?php echo base_url(); ?>assets/img/Group213.png" class="img-fluid">
            </div>
        </a>
    </div>
    <div class="nav-right">
        <a href="<?php echo base_url(); ?>">Home</a>
        <a href="<?php echo base_url(); ?>logo.php">Logo</a>
        <a href="<?php echo base_url(); ?>typography.php">Typografie</a>
        <a href="<?php echo base_url(); ?>color.php">Color</a>
        <a href="<?php echo base_url(); ?>pictures.php">Pictures</a>
        <a href="<?php echo base_url(); ?>icons.php">Icons</a>
        <a href="<?php echo base_url(); ?>print.php">Print</a>
        <a href="<?php echo base_url(); ?>digital.php">Digitaal</a>
    </div>
</div>
