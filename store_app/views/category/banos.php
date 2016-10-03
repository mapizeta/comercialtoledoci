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
                    <img src="<?php echo asset_url('images/inodoros_normal.jpg?crc=3870998791'); ?>" onmouseover="this.src='<?php echo asset_url('images/inodoros_h.jpg?crc=4276785677'); ?>';" onmouseout="this.src='<?php echo asset_url('images/inodoros_normal.jpg?crc=3870998791'); ?>';"/>
                    </a>
    			</div>
                 <div class="col-md-4 portfolio-item" style="text-align: left;">
                    <a href="#">
                    <img src="<?php echo asset_url('images/lavamanos_normal.jpg?crc=3767742300'); ?>" onmouseover="this.src='<?php echo asset_url('images/lavamanos_h.jpg?crc=4108855945'); ?>';" onmouseout="this.src='<?php echo asset_url('images/lavamanos_normal.jpg?crc=3767742300'); ?>';"/>
                    </a>
    			</div>

    		</div>
            <div class="row">
                <div class="col-md-2 portfolio-item">
                   
                </div>
                <div class="col-md-4 portfolio-item" style="text-align: left;">
                    <a href="#">
                    <img src="<?php echo asset_url('images/institucional_normal.jpg?crc=3763659908'); ?>" onmouseover="this.src='<?php echo asset_url('images/institucional_h.jpg?crc=285975823'); ?>';" onmouseout="this.src='<?php echo asset_url('images/institucional_normal.jpg?crc=3763659908'); ?>';"/>
                    </a>
                </div>
                 <div class="col-md-4 portfolio-item" style="text-align: left;">
                    <a href="#">
                    <img src="<?php echo asset_url('images/tinas_normal.jpg?crc=3813373186'); ?>" onmouseover="this.src='<?php echo asset_url('images/tinas_h.jpg?crc=3863660850'); ?>';" onmouseout="this.src='<?php echo asset_url('images/tinas_normal.jpg?crc=3813373186'); ?>';"/>
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