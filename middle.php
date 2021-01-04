<?php
     include 'head.php';
    ?>


<body onload="loader()" style="margin:0;">

  <div id="loader" class="text-center"><center><img src="img\load.gif" width="300%"></center></div>

  <div style="display:none;" id="loadDiv" class="animate-bottom">
    
     <?php
      include_once 'nav_bar.php';
     ?>
     
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img src="img\slide\slide_1.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
    <div class="carousel-item">
  <img src="img\slide\slide_2.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
    <div class="carousel-item">
    <img src="img\slide\slide_3.jpg" alt="...">
    <div class="carousel-caption d-none d-md-block">
    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="mt-3 mb-5"><span>Products <img src="img/ProductM2.png" aria-label="CodeNet (Pvt) Ltd" width="225"
                                        height="135"></span>
                            </h1>
                            <p><a class="btn btn-success mt-5" href="#" role="button">SHOW PRODUCTS</a></p>
                        </div>
                    </div>
  </div>
</div>
  </div>
  <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-white " style="border-radius:50%" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">3
    <span class="carousel-control-next-icon bg-white " style="border-radius:50%" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<center>

<h1 class="text-muted   bt-5 " style="margin-top:8%; ">Our Product</h1>
<div class="card-deck mt-3" style="width:85%; margin-bottom:15%;">
  <div class="card border-success ">
    <img class="card-img-top" src="img\clothes.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title text-success font-weight-normal center">Products</h4>
      <p class="card-text font-weight-light">This is a longer card with supporting text below as a natural lead-in to additional content. </p>
      <div class="form-group  ">
        <button type="submit" class="btn btn-success font-weight-normal btn-block">SHOW ME</button>
    </div>
    </div>
  </div>
  <div class="card border-success">
    <img class="card-img-top" src="img\staff.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title text-success font-weight-normal">Employees</h4>
      <p class="card-text font-weight-light">Our company has a team of skilled employees with lead us to success. </p>
      <div class="form-group  ">
        <button type="submit" class="btn btn-success font-weight-normal  btn-block">VIEW DETAILS</button>
    </div>
    </div>
  </div>
  <div class="card border-success ">
    <img class="card-img-top" src="img\employees.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title text-success font-weight-normal"> Internship Opportunities</h4>
      <p class="card-text font-weight-light">A great opportunities are available to gain experience for a paid intership.</p>
      
      <div class="form-group  ">
        <button type="submit" class="btn btn-success font-weight-normal btn-block">APPLY NOW</button>
    </div>
    </div>
  </div>
</div>

</center>
      <?php
      include_once 'footer.php';
     ?>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    var myVar;

    function loader() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("loadDiv").style.display = "block";
    }
</script>
  </body>
</html>