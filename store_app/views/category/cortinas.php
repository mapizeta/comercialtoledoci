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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<style type="text/css">
	
img {
 width: 100%;
 height: auto;
}
a {
    color: #f5f5f5!important;
    text-decoration: none;
}
a:link   
{   
 text-decoration:none;   
} 

.cotiza:hover{
   background-color:#FF0000;
}
a div.ficha:hover{
   background-color:#FF0000;
}


</style>

<!-- PRODUUCTOS -->

<!-- Page Content -->
<div class="container">

    <center>
            <!-- Projects Row -->
            <div class="row">
            	<div class="col-md-2 portfolio-item">
                   
                </div>
                <div class="col-md-4 portfolio-item" style="text-align: left;">
                    <a href="#">
                    <img src="<?php echo asset_url('images/roller_normal.jpg?crc=4128838306'); ?>" onmouseover="this.src='<?php echo asset_url('images/roller_hover.jpg?crc=244012267'); ?>';" onmouseout="this.src='<?php echo asset_url('images/roller_normal.jpg?crc=4128838306'); ?>';"/>
                    </a>
    			</div>
                 <div class="col-md-4 portfolio-item" style="text-align: left;">
                    <a href="#">
                    <img src="<?php echo asset_url('images/persianas_normal.jpg?crc=142761640'); ?>" onmouseover="this.src='<?php echo asset_url('images/persianas_hover.jpg?crc=507453714'); ?>';" onmouseout="this.src='<?php echo asset_url('images/persianas_normal.jpg?crc=142761640'); ?>';"/>
                    </a>
    			</div>

    		</div>
       
        
    </center>

</div>
        
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo asset_url('js3/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo asset_url('js3/bootstrap.min.js'); ?>"></script>

</body>

</html>