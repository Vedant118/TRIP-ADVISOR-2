
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Contact Me!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">TRIP ADVISOR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/TRIP-ADVISOR-bootstrap/https://www.rapidtables.com/tools/notepad.html">Tell Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Our Packages
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://www.visitsingapore.com/en/">singapore</a></li>
                  <li><a class="dropdown-item" href="https://www.tourismthailand.org/home">thailand</a></li>
                  <li><a class="dropdown-item" href="https://www1.nyc.gov/">New York</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="https://www.rapidtables.com/tools/notepad.html">Write For Us</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Me</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container my-4">
    </div>
  <div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 offset-lg-2">
    
            <!-- THE CONTACT FORM IS HERE -->
         <h2>Contact me!</h2>
                <form action="userinfo.php" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="5Dkmy7KXVIDz2JDKq4EQ9gMXiozTPbwPQBaxuSTkeNrFBobZjfx4NkcbX9CBK6nu">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter your Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="cemail" placeholder="Enter your Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone Number (with country code)</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your Phone Number" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="description">Describe what you want to contact me for here</label>
                        <textarea type="text" class="form-control" id="message" placeholder="Your message" name="message"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-danger mt-2"  >Submit</button>
                </form>
    </div>
  </div>
 
<footer class="container my-4">
    <p class="float-end"></p>
    <p>© 2017–2021  TRIP ADVISOR Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
