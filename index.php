<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>TRIP ADVISOR</title>
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
            <a class="nav-link active" aria-current="page" href="/TRIP-ADVISOR-bootstrap/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" https:"//www.memonotepad.com/">Tell Us</a>
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
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
            <div class="mx-2 my-2">
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#LoginModal">Login</button>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#SignUpModal">SignUp</button>
        </div>
      </div>
    </div>
  </nav>
  <!--  Login Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Login to TRIP ADVISOR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Sign Up Modal -->
  <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SignUpModalLabel"> Get A TRIP ADVISOR account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
              <br>
              <br>
              <button class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1000x450/?thailand,thailand" width="260" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1000x450/?singapore,singapore" width="260" class="d-block w-100"
          alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1000x450/?new york,new york" width="260" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">New York city</strong>
            <h3 class="mb-0">New York City</h3>
            <div class="mb-1 text-muted">AUG 29</div>
            <p class="card-text mb-auto">New York City (NYC), often called simply New York, is the most populous city in
              the United States. With an estimated 2019 population of 8,336,817 distributed over about 302.6 square
              miles (784 km2)</p>
            <a href="https://en.wikipedia.org/wiki/New_York_City" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="img-fluid" class="bd-placeholder-img" width="200" height="250"
              src="hotelpenn-homepage-01-mobileheader-5cc091eb8cc0a.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Singapore</strong>
            <h3 class="mb-0">Singapore</h3>
            <div class="mb-1 text-muted">FEB 10</div>
            <p class="mb-auto">Singapore (/ˈsɪŋ(ɡ)əpɔːr/ (About this soundlisten)), officially the Republic of
              Singapore, is a sovereign island city-state in maritime Southeast Asia. It lies about one degree of
              latitude (137 kilometres or 85 miles)</p>
            <a href="https://en.wikipedia.org/wiki/Singapore" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="img-fluid" class="bd-placeholder-img" width="200" height="250"
              src="Accenture-Singapore-Hero.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">Thailand</strong>
            <h3 class="mb-0">Thailand</h3>
            <div class="mb-1 text-muted">APR 7</div>
            <p class="card-text mb-auto">Thailand,[a] officially the Kingdom of Thailand and formerly known as Siam,[b]
              is a country in Southeast Asia. Located at the centre of the Indochinese Peninsula, it is composed of 76
              provinces spanning 513,120 square kilometres (198,120 sq mi)</p>
            <a href="https://en.wikipedia.org/wiki/Thailand" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="img-fluid" class="bd-placeholder-img" width="200" height="250" src="new.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Dubai</strong>
            <h3 class="mb-0">Dubai</h3>
            <div class="mb-1 text-muted">DEC 3</div>
            <p class="mb-auto">Located in the eastern part of the Arabian Peninsula on the coast of the Persian Gulf,
              Dubai aims to be the business hub of Western Asia.[8] It is also a major global transport hub for
              passengers and cargo</p>
            <a href="https://en.wikipedia.org/wiki/Dubai" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="img-fluid" class="bd-placeholder-img" width="200" height="250" src="singapore.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="container">
    <p>© 2017–2021 TRIP ADVISOR Company, Inc. · <a href="https://en.wikipedia.org/wiki/Privacy">Privacy</a> · <a href="https://en.wikipedia.org/wiki/Term">Terms</a></p>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
