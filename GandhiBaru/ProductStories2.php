<html>
    <?php include_once 'header.php';?>
    <?php include_once 'navbarbody.php';?>
    <body style="background-color:#000000;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.html"><strong>Frangipani.co</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="container">
                <a href="Stories.html" class="btn custom-btn float-lg-right" role="button" aria-pressed="true">Stories</a>
                <br class="d-lg-none">
                <button class="btn custom-btn float-lg-right " onclick="openNav()">SHOP</button>
                </div>
              </div>
            </div>
        </nav>
        <!--Akhir Navbar-->
        <!--Side Navbar-->
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="Products2.html">Statue</a>
          <a href="#">Jewel</a>
          <a href="#">Spiritual</a>
          <a href="#">Food</a>
        </div>
        <!--Akhir Navbar-->
        <div class="row">
            <div class="col-md-6 no-padding" style="margin-bottom: 3vmin;">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="Foto/Mask Group 18.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="Foto/Mask Group 18.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="Foto/Mask Group 18.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  
            </div>
            <div class="col-md-6 align-self-center" style="margin-bottom: 3vmin;">
                  <div class="text-center">
                    <h5 style="font-size:4vmin;" class="display-left"><span class="font-weight-bold">Ganesha Statue</span></h5>
                    <div class="container" style="height: 1vmin;"></div>
                    <h5 style="font-size:3vmin;" class="display-price"><span class="font-weight-bold">Rp 199.999.999</span></h5>
                    <div class="border border-left"></div>
                    <div class="display-price" style="font-size: 2vmin; margin-right: 10vmin;">
                      <br>Product Spesification : 
                      <br>
                      Terbuat dari emas lhoo. Ini juga bagus lhooo, trus jugaa bisa dipajang di lemari, di tembok atau dimanapun yang kamu mau
                  </div>
                  </div>
            </div>
        </div>
        <div class="row" style="background-color: #FEDE00; width: 100vw; height: 3vh;"></div>
        <div class="row" style="background-color: #FEDE00;">
            <div class="col-md-6 align-self-center">
                <div class="d-md-none">
                  <div class="container" style="height: 5vmin;"></div>
                </div>
                <div class="text-center">
                  <div class="display-price" style="font-size: 2vmin; margin-right: 10vmin; margin-left: 10vmin; color: black;">
                    <b style="font-size: 3vmin;">Ganesha Statue</b>
                    <p>Ganesha merupakan salah satu arca antropomorsis. Ciri khususnya adalah digambarkan sebagai manusia berkepala gajah (setengah gajah). Ganesha digambarkan dengan bermacam-macam, ada yang duduk, ada yang berdiri, dan kadang digambarkan sedang menari</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 align-self-center" style="margin-bottom: 3vmin;">
                    <div class="d-md-none">
                      <div class="container" style="height: 5vmin;"></div>
                    </div>
                    <div class="text-center">
                      <div class="display-price" style="font-size: 2vmin; margin-right: 10vmin; margin-left: 10vmin;color: #000000;">
                        <b style="font-size: 3vmin;">Pesan Sekarang</b>
                        <h6><a href="" style="color: #000000;"><u>Line</u><br></a></h6>
                        <h6><a href="" style="color: #000000;"><u>Whatsapp</u><br></a></h6>
                    </div>
                    </div>
            </div>
        </div>
  <?php include_once 'footer.php';?>
</html>
