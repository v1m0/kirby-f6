<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    
<meta name="description" content="<?php echo $site->description()->html() ?>">
<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

<?php echo css('assets/css/foundation.min.css') ?>

<?php echo css('assets/css/motion-ui.min.css') ?>

<?php echo css('assets/css/app.css') ?>

</head>
    

<body>



<div class="headcontainer">
<div class="row">
    <div class="large-12 columns text-right">
        <?php snippet('langswitch') ?>
    </div>
</div>
<div class="row">
    <div class="large-12 columns text-center">
        <img class="headlogo" src="<?php echo url('/assets/images/rc.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
        <?php snippet('menu') ?>
    </div>
</div>
</div>
        
<div class="row mainrow">
    <div class="large-12 columns">

