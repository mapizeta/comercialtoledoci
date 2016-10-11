<div class="container" style="margin-top: 81px;">
    <center>
        <div class="row" >
            <div class="col-md-10 col-md-offset-1" >
                <div style="height: 59px; background-color: #e95800; margin-bottom: 33px;"></div>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            
            <?php 
                
                $cont = 0;

                foreach($products->result() as $product)
                {
                    if($cont > 0)
                        $offset = "";
                    else
                        $offset = "col-md-offset-1";

                    echo    '<div class="col-md-2 '.$offset.' portfolio-item" style="text-align: left;font-style: italic;font-size: 14px;">
                                <a href="#">
                                <img class="img-responsive producto" src="'.asset_url('images/olivillo%20caramelo%2045x45.jpg?crc=94621944').'" alt="">
                                </a>
                                <h5><strong>'.$product->name.'</strong></h5>
                                <h5 ><strong>'.$product->categoria.'</strong></h5>
                                <h5  ><strong>Dimensiones: '.$product->dimensiones.'</strong></h5>
                                <h5 >&nbsp;</h5>
                                <a href="http://#"><div class="ficha" style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
                                <a href="http://#"><div  class="cotiza"  style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>   </a>    
                            </div>';
                    
                    $cont++;
                }
                
            ?>	
            <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images/olivillo%20caramelo%2045x45.jpg?crc=94621944'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5 ><strong>Cerámicos</strong></h5>
			      <h5  ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a href="http://#"><div class="ficha" style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a href="http://#"><div  class="cotiza"  style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
            <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images/sauce%20beige%2036x36.jpg?crc=416825218'); ?>" alt="">
                </a>
                  <h5><strong>CIMENTA CENIZA</strong></h5>
                  <h5 ><strong>Cerámicos</strong></h5>
                  <h5  ><strong>Dimensiones: 45x45</strong></h5>
                  <h5 >&nbsp;</h5>
                  <a class="ficha" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
                  <a class="cotiza" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div> </a>    
            </div>
            <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images/sauce%20beige%2036x36.jpg?crc=416825218'); ?>" alt="">
                </a>
                  <h5><strong>CIMENTA CENIZA</strong></h5>
                  <h5 ><strong>Cerámicos</strong></h5>
                  <h5  ><strong>Dimensiones: 45x45</strong></h5>
                  <h5 >&nbsp;</h5>
                  <a class="ficha" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
                  <a class="cotiza" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div> </a>    
            </div>
<!--             
            <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images/parqueton%20caramelo%2060x60.jpg?crc=118005730'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5 ><strong>Cerámicos</strong></h5>
			      <h5 ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="ficha" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="cotiza" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images/sauce%20beige%2036x36.jpg?crc=416825218'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5 ><strong>Cerámicos</strong></h5>
			      <h5  ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="ficha" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="cotiza" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5><strong>Cerámicos</strong></h5>
			      <h5><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="ficha" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="cotiza" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5 ><strong>Cerámicos</strong></h5>
			      <h5  ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="ficha" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="cotiza" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>		

			</div>
-->
        </div>
        <!-- /.row -->

      <!-- Projects Row -->
        <div class="row">
        	
            <div class="col-md-2 col-md-offset-1  portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5 ><strong>Cerámicos</strong></h5>
			      <h5  ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="nonblock" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="nonblock" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
<!--
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5><strong>Cerámicos</strong></h5>
			      <h5 ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="nonblock" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="nonblock" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5 ><strong>Cerámicos</strong></h5>
			      <h5  ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="nonblock" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="nonblock" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5><strong>Cerámicos</strong></h5>
			      <h5 ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="nonblock" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="nonblock" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>	
			</div>
             <div class="col-md-2 portfolio-item" style="text-align: left;">
                <a href="#">
                    <img class="img-responsive producto" src="<?php echo asset_url('images2/atenas%20beige%2036x36.jpg?crc=3870275145'); ?>" alt="">
                </a>
            	  <h5><strong>CIMENTA CENIZA</strong></h5>
			      <h5><strong>Cerámicos</strong></h5>
			      <h5 ><strong>Dimensiones: 45x45</strong></h5>
			      <h5 >&nbsp;</h5>
			      <a class="nonblock" href="http://#"><div style="background-color: #833301;height: 34px;padding: 7px;text-align: center;font-weight: 600;">FICHA TÉCNICA</div></a>
				  <a class="nonblock" href="http://#"><div style="background-color: #e95800;height: 34px;padding: 7px;text-align: center;font-weight: 600;">COTIZAR</div>	</a>		
			</div>
-->
        </div>
        <!-- /.row -->
    
    </center>
        

     
</div>


