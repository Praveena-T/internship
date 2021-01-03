<?php
     include 'head.php';
    ?>
<?php
    include_once 'nav_bar.php';
    ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\product\ps1.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block text-dark bg-white" style="opacity:0.6">
        <h3 >Clothes for Women</h3>
        <p>Latest Coolections of Clothes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\product\ps2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark bg-white" style="opacity:0.6">
        <h3>Clothes for Men</h3>
        <p>Wear Clothes for different Occations</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\product\ps3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark bg-white" style="opacity:0.6">
        <h3>Clothes for Kids</h3>
        <p>Clothes for All Age Groups</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<section class="bgproduct">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-light">
        <h1 class="mt-5 pchead ">Products</h1>
        <p> Clothes According to the current trend!!</p>
      </div>
    </div>
  </div>
</section>
       



<div class="card-deck mt-3 mb-3 ">
  <div class="card border-none ">
    <img class="card-img-top" src="img\clothes.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-normal text-center">Teenages</h5>
      <div class="form-group  ">
        <button type="submit" class="btn btn-dark font-weight-normal btn-block">SHOW</button>
    </div>
    </div>
  </div>
  <div class="card border-none">
    <img class="card-img-top" src="img\p_card\woman.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-normal text-center">Woman</h5>
      <div class="form-group">
        <button type="submit" class="btn btn-dark font-weight-normal  btn-block">SHOW</button>
    </div>
    </div>
  </div>
  <div class="card border-none ">
    <img class="card-img-top" src="img\p_card\pregnant.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-normal text-center">Prenant Women</h5>     
      <div class="form-group  ">
        <button type="submit" class="btn btn-dark font-weight-normal btn-block">SHOW</button>
    </div>
    </div>
  </div>
</div>


<div class="card-deck mt-3 mb-3 ">
  <div class="card border-none ">
    <img class="card-img-top" src="img\clothes.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-normal text-center">Men</h5>
      <div class="form-group  ">
        <button type="submit" class="btn btn-dark font-weight-normal btn-block">SHOW</button>
    </div>
    </div>
  </div>
  <div class="card border-none">
    <img class="card-img-top" src="img\staff.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-normal text-center">Kids</h5>
      <div class="form-group  ">
        <button type="submit" class="btn btn-dark font-weight-normal  btn-block">SHOW</button>
    </div>
    </div>
  </div>
  <div class="card border-none ">
    <img class="card-img-top" src="img\employees.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-normal text-center">Wedding</h5>     
      <div class="form-group  ">
        <button type="submit" class="btn btn-dark font-weight-normal btn-block">SHOW</button>
    </div>
    </div>
  </div>
</div>



<section class="bgimage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-light">
        <h1 class="mt-5 pchead ">Purchase Clothes</h1>
        
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  More Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title  text-dark " id="exampleModalLongTitle">Hello</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark text-light text-center">
        Welcome to CodeNet Website.

        We are on o the leading company in Sri Lanka with promising products in the garment industry.
        Never dissapointes our customer when delivering the product according to their preference. We provide a varietty of clothes from different cultures.
      </div>
      <div class="mb-4">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section>


<?php
      include_once 'footer.php';
     ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

