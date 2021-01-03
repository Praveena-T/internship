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
        <h3 >Clothes for Woman</h3>
        <p>Latest Coolections of Clothes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\product\ps2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark bg-white" style="opacity:0.6">
        <h3>Clothes for Man</h3>
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

