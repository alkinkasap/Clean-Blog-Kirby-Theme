<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $page->tags() ?>">
    <meta name="author" content="">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <!-- Bootstrap Core CSS -->
    <?php echo css('assets/css/bootstrap.min.css') ?>

    <!-- Custom CSS -->
    <?php echo css('assets/css/clean-blog.css') ?>

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <?php
    if($site->has('tracker')) {
      echo $site->tracker()->html();
    }
    ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo url() ?>">Home</a>
            </div>

            <?php snippet('menu') ?>



    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <?php if($background = $page->image('cover.jpg')): ?>
    <header class="intro-header" style="background-image: url(<?php echo $background->url(); ?>)">
    <?php elseif($image = $site->image('cover.jpg')): ?>
    <header class="intro-header" style="background-image: url(<?php echo $image->url() ?>)">
    <?php endif; ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php echo $page->title()->kirbytitle() ?></h1>
                    <hr class="small">
                    <span class="subheading"><time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d.m.Y') ?></span>
                    <h4><?php echo $page->tags() ?></h4>
                </div>
            </div>
        </div>
    </div>
    </header>
