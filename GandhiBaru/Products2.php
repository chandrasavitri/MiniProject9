<html>
    <?php include_once 'header.php';?>
    <?php include_once 'navbarbody.php';?>
    <?php require 'functions.php';?>
        <!--Carousel-->
        <div id="carouselExampleSlidesOnly" class="carousel slide no-padding" data-ride="carousel">
            <div class="carousel-inner no-padding">
              <div class="carousel-item active no-padding">
                  <img src="Foto/Mask Group 16.png" class="d-block w-100" alt="...">
                  <div class="mb-4 carousel-caption display-right no-padding caption-kiri">
                    <h4 style="font-size:3vmin;">Buying <span class="font-weight-bold">Frangipani.co</span> products
                        <br>means you have helped <span class="font-weight-bold">preserve</span><br>
                        <span class="font-weight-bold">culture archipelago</span></h4>
                  </div>
              </div>
            </div>
        </div>
        <!--Akhir Carousel-->
        <!--Panel-->


        <div class="container mt-4"></div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: auto; margin-left: 10vw; margin-right: 10vw;" >
        
                <div class="panel panel-default">
                    <div class="panel-heading no-padding" role="tab" id="headingOne" >
                        <h4 class="panel-title no-padding">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="display-title" style="color: #fede00;">
                                <i class="more-less fas fa-chevron-down"></i>
                                Ganesha Statue
                                <hr>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body" >
                              <div class="row" >
                                <div class="col-sm-6 col-md-4">
                                    <div class="text-center">
                                        <a href="ProductStories2.html">
                                        <img src="Foto/Mask Group 6.png" style="width: 80%; height: auto; text-align: center;"> </a> 
                                        <div class="display-title-products">
                                            <b style="font-size: 2vmin; color: #fede00;">Ganesha Statue</b>
                                            <p class="no-padding" style="font-size: 2vmin; color: white;">Rp199.000.000,00</p>
                                        </div>
                                    </div>
                                </div>
                                <?php while( $row = mysqli_fetch_assoc($result)):?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="text-center">
                                        <a href="ProductStories2.html">
                                        <img src="Foto/<?php echo $row["cata"]; ?>" style="width: 80%; height: auto; text-align: center;"> </a> 
                                        <div class="display-title-products">
                                            <b style="font-size: 2vmin; color: #fede00;"><?php echo $row["name"]; ?></b>
                                            <p class="no-padding" style="font-size: 2vmin; color: white;">Rp.<?php echo $row["harga"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                                
                                    
                              </div>
                        </div>
                    </div>
                </div>
        
            </div><!-- panel-group -->
    <?php include_once 'footer.php';?>
</html>