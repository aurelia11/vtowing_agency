<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
    <link href="styles.css" rel="stylesheet">

</head>
<body> 
</div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">V-TOWING AGENCY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#report">Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">FAQs</a>
          </div>
        </div>
      </nav>

      <div class="button">
        <a href="#home"><i class="material-icons">arrow_upward</i></a>
      </div>


      <section class="home" id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item drk active">
              <img src="index_first.jpg" class="d-block w-100" alt="...">
              <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>About us</h1>
                    <p>V-Towing Company Limited serves their clients with the best way of attaining services for vehicles <br>
                      we also provide them the towing services from different partner companies. </p>                  
                  </div>
                </div>
            </div>
            <div class="carousel-item drk">
              <img src="index_second.jpg" class="d-block w-100" alt="...">
              <div class="container">
                  <div class="carousel-caption">
                    <h1>Ever ready to serve you!</h1>
                    <p>Professional breakdown and towing assistance is just a call away</p>
                    <p><a class="btn btn-lg btn-warning" href="../index.php">Learn more</a></p>
                  </div>
                </div>
            </div>
            <div class="carousel-item drk">
              <img src="index_last.jpg" class="d-block w-100" alt="...">
              <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>Thank you for the visit!</h1>
                    <p>Customer satisfaction at its best!</p>
                  </div>
                </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <!-- Report Secton -->
      <section class="report" id="report">
        <h1>Report</h1>
        <br>
        <br>
        <div class="row d-flex justify-content-center">
          <form action= "index_report.php" method="post"class="row g-6">
            <div class="col-md-4">
              <label for="inputFullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="col-md-4">
              <label for="inputContact" class="form-label">Active Call Number</label>
              <input type="text" class="form-control" name="contact" required>
            </div>
            <div class="col-4">
              <label for="inputCarnumber" class="form-label">Car Number</label>
              <input type="text" class="form-control" name="carnumber" required>
            </div>
            <div class="col-md-4">
              <label for="inputService" class="form-label">Service</label>             
              <select id="inputService" name= "services"class="form-select">
                <option selected>Choose...</option>
                <option>Fuelrefill</option>
                <option>Heavy Duty Towing</option>
                <option>Junk Car Removal</option>
                <option>Roadside Assistance</option>
              </select>
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Street Address</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="col-md-12">
              <label for="inputMessage" class="form-label">Message</label>
              <textarea class="form-control" name="message" rows="5" cols="50"></textarea>
            </div>
            <br>
            <div>
              <div class="col-12">
                <button type="submit" name = "submit" class="btn btn-warning">Send</button>
              </div>
            </div>
          </form>
        </div>  
      </section>
      <br>
      <br>
      <br>

      <!-- Footer-->
      <footer class="footer py-4">       
        <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-3 link-light text-lg-start">Copyright &copy; V-Towing Agency 2021</div>               
                  <div class="col justify-content-end">
                    <a class="link-light text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-light text-decoration-none" href="#!">Terms of Use</a>
                  </div>
                </div>
          </div>
      </footer>

      <script src="script.js"></script>
</body>
</html>