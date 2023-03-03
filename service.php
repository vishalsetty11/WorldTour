<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <style>
    a{color:#000; text-decoration:none;}
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="index.php">WORLD TOUR</a>
 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 		</button>

		

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="service.php">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
<div class="jumbotron">
  <h1>Services</h1> 
  
 <section class="my-5">
  <div>
    <h1 class="text-center">Services</h1>
  </div><br><br>

    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">New York nights</h4>
    <p class="card-text">Wonderful sight</p>
    <a href="ny.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-3 col-16">
        <div class="card">
  <img class="card-img-top" src="03.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Canadian Mountains</h4>
    <p class="card-text">Time for trekking</p>
    <a href="cad.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="21.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sydney</h4>
    <p class="card-text">What'a Cityscape!</p>
    <a href="nz.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
</section> 
</div>

<!-- footer -->
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© World Tour 2022 Company, Inc</p>

                    <a href="index.php" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="Footer-192x192.png" alt="World Tour Favicon" class="bi" width="50" height="50"><use xlink:href="#bootstrap"></use></img>
                    </a>

                    <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="service.php" class="nav-link px-2 text-muted">Services</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
                </ul>
                </footer>
            </div>
</body>
</html>