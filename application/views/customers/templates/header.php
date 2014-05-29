<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> 
                            <a class="navbar-brand" href="home">ELO Doctor</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li <?php if (isset($page)) { if ($page == 'home') { echo 'class="active"'; }}?>>
                                    <a href="home">Home</a>
                                </li>
                                <li <?php if (isset($page)) {if ($page == 'about') {echo 'class="active"';}}?>>
                                    <a href="about">Information</a>
                                </li>
                                <li <?php if (isset($page)) {if ($page == 'buy') {echo 'class="active"';}}?>>
                                    <a href="#">Buy Boosting</a>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#"><i class="fa fa-user"></i> Login</a>
                                    </li>
                                    <li>
                                        <a href="register"><i class="fa fa-pencil"></i> Register</a>
                                    </li>
                                </ul>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>