<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo asset_url('css3/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo asset_url('css3/4-col-portfolio.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css3/logo-nav.css'); ?>" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- CSS -->
    <style type="text/css">

        img {
            width: 100%;
            height: auto;
        }


        .navbar-inverse {
            background-color: #E95800!important;
            border-color: #E95800!important;
            height: 76px!important;;
        }

        footer {
            margin: 0px 0!important;
        }

        .navbar-default {
            background-color: #555!important;
            border-color: #9d9d9d!important;
        }

        .producto:hover {
            border:4px solid #833301!important;/*ancho y color del borde */
            border-radius:0px!important; /* radio del borde */
        }
        .footer-list{
            list-style: none!important;
        }
        a {
            color: #f5f5f5!important;
            text-decoration: none!important;
        }
        a:link   
        {   
         text-decoration:none!important;  
        } 

    </style>
</head>

<body>

<!-- Page Content -->
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
              
                <a class="navbar-brand" href="#">
                    <img style="max-width: 298px;" src="<?php echo asset_url('images/imagocomercialtoledo1.svg?crc=4130409434'); ?>" alt="">
                </a>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color: #833301!important; margin-top: 64px;">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               

             <div class="col-md-11 col-md-offset-1 ">
              <ul class="nav navbar-nav ">   
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"style=" font-family: 'Roboto Condensed';font-size: 24px;"><i class=" fa fa-bars"></i> Menú de Categorías<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
               </li>
                    
                </ul>
                   <div style="background-color: #AD6135;height: 80px;float: left;width: 100%;max-width: 300px;"></div>
                   <div style="background-color: #D2A991;height: 80px;float: left;width: 100%;max-width: 300px;"></div>
            </div>


            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>