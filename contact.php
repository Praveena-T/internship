<?php
     include 'head.php';
    ?>

<body>
    
     <?php
      include_once 'nav_bar.php';
     ?>

<div class="container mt-5 pt-5 mb-5">
<div class="card-group">

  <div class="card">
    <img class="card-img-top" src="img\contact.jpeg"  alt="Card image cap">
  </div>

  <div class="card">
    <div class="card-body bg-dark opacity-2">
        <h4 class="card-title font-weight-bold text-success text-center">Contact Us</h4>
            <div class="form-row ml-5" >
                <div class="col-md-10 p-1">
                    <input type="text" class="form-control font-weight-normal text-success text-center" id="" placeholder="Name" value="" required>
                </div>
            </div>
            <div class="form-row ml-5" >
                <div class="col-md-10 p-1">
                    <input type="email" class="form-control font-weight-normal text-success text-center" id="" placeholder="Email" value="" required>
                </div>
            </div>
            <div class="form-row ml-5">
                <div class="col-md-10 p-1">
                  <textarea class="form-control font-weight-normal text-success text-center" row="30" id="" placeholder="Message" value=" " required></textarea>
                </div>
            </div>
            <div class="form-group text-center p-2">
            <button class="btn btn-outline-success font-weight-normal " id="send-message-btn" type="submit"> Send Message</button>
            </div>
    </div>
  </div>
</div>
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