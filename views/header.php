<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo URL;?>/public/css/default.css">
    <script src="<?php echo URL;?>/public/js/jquery.js"></script>
    <script src="<?php echo URL;?>/public/js/custom.js"></script>
</head>
<body>
<div id="header">
    <a href="<?php echo URL;?>/index">Index</a>
    <a href="help">Help</a>
    <?php if(Session::get('loggedIn') == true):?>
        <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
    <?php else: ?>
        <a href="<?php echo URL; ?>login">Login</a>
    <?php endif; ?>
</div>
<div id="content"></div>
